<?php

namespace app\controllers;

use app\models\Bug;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;

class AssessmentController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'send'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['@'],
                    ]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $model = new Bug();
        return $this->render('index', compact('model'));
    }

    public function actionSend()
    {
        $data = Yii::$app->request->post();

        if (!empty($data['Bug'])) {
            $transaction = Yii::$app->db->beginTransaction();

            try {
                $model = new Bug();
                $model->load($data, 'Bug');

                $imgData = UploadedFile::getInstance($model, 'image');
                if (!empty($imgData)) {
                    $filePath = 'uploads/' . $imgData->baseName . '.' . $imgData->extension;
                    if ($imgData->saveAs($filePath)) {
                        $model->image = $filePath;
                    }
                }

                $model->user_id = (int)Yii::$app->user->id;
                $model->save();

                $transaction->commit();
            } catch (\Exception $e) {
                $transaction->rollBack();
                Yii::$app->session->setFlash('error', 'Data failed! Message: ' . $e->getMessage());
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }

            Yii::$app->session->setFlash('success',
                'Thank you for reporting this bug, we will respond to you via email shortly.');
            $mailResult = $this->sendMail($model);
            Yii::$app->session->setFlash('mailResult', 'Mail result: ' . $mailResult);
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Data not submitted!');
        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }

    private function sendMail(Bug $model)
    {
        try {
            $mail = Yii::$app->mailer->compose('@app/mail-templates/email01', ['model' => $model])
                ->setFrom(Yii::$app->params['customEmail']['from'])
                ->setTo(Yii::$app->params['customEmail']['to'])
                ->setSubject('Report a bug by ' . Yii::$app->user->identity->username);

            if (!empty($model->image)) {
                $mail->attach($model->image);
            }

            $mail->send();
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return 'Mail sent!';
    }
}

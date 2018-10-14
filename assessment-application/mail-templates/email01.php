<?php

use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $mode \app\models\Bug */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<h2>Bug Form</h2>

<p>
<?=
'User id: ' . $model->user_id . '<br>' .
'Name: ' . $model->name . '.<br>' .
'Email: ' . $model->email . '<br>' .
'Issue description: ' . $model->body . '<br>'
?>
</p>

<div class="footer">
    With kind regards,
    <br/>
    <?= Yii::$app->name ?> team.
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

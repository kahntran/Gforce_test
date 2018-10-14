<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'My Yii Application Test';

?>

<div class="test-index">
    <h2>Report a bug</h2>

    <?php $form = ActiveForm::begin(['id' => 'assessment-form', 'action' => '/assessment/send']); ?>
    <?= $form->field($model, 'name')->textInput(['class' => 'form-control']) ?>
    <?= $form->field($model, 'email')->textInput(['class' => 'form-control']) ?>
    <?= $form->field($model, 'body')->textarea(['rows' => '6', 'class' => 'form-control']) ?>
    <?= $form->field($model, 'image')->fileInput(['class' => 'form-control']) ?>
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>
</div>

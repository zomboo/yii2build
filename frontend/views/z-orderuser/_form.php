<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\ZOrderuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zorderuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order')->dropDownList($model->orderList,
        ['prompt' => '请选择活动']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'time')->widget(DatePicker:: className(),
        ['clientOptions' => ['dateFormat' => 'yy-mm-dd:hh:mm:ss']]); ?>


    <!--$form->field($model, 'flag')->textInput();-->


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

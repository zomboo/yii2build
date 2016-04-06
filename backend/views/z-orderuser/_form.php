<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//use yii\jui\DatePicker;
//use dosamigos\datepicker\DatePicker;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\ZOrderuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zorderuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order')->dropDownList($model->orderList,
        ['prompt' => '请选择活动']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?php
    /*= $form->field($model, 'time')->widget(DatePicker:: className(),
        ['language' => 'zh-CN', 'value' => date('yyyy-mm-dd'),
            /*'options' => array(
                'minDate' => 0,
                'maxDate' => "+1M +5D",
            ),*/
    //'dateFormat' => 'yyyy-MM-dd']); */
    ?>
    <?php /*$form->field($model, 'time')->widget(
        DatePicker::className(), [
        // inline too, not bad
        //'inline' => true,
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); */?>
    <?= $form->field($model, 'time')->widget(DateTimePicker::className(),
        ['language' => 'zh-CN',
            'size' => 'ms',

            'template' => '{input}',
            'pickButtonIcon' => 'glyphicon glyphicon-time',
            //'inline' => true,
            'clientOptions' => [
                'startView' => 2,
                'minView' => 0,
                'maxView' => 2,
                'autoclose' => true,
                'startDate'=>null,

                //'linkFormat' => 'HH:ii P', // if inline = true
                'format' => 'yyyy-mm-dd hh:ii', // if inline = false
                'todayBtn' => true
            ]
        ]); ?>


    <?= $form->field($model, 'flag')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

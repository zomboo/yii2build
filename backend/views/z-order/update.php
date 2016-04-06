<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ZOrder */

$this->title = 'Update Zorder: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Zorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zorder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

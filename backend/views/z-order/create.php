<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ZOrder */

$this->title = 'Create Zorder';
$this->params['breadcrumbs'][] = ['label' => 'Zorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zorder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

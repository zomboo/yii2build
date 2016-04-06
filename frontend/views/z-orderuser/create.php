<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ZOrderuser */

$this->title = 'Create Zorderuser';
$this->params['breadcrumbs'][] = ['label' => 'Zorderusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zorderuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

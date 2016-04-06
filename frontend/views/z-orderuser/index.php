<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ZOrderuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zorderusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zorderuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加预约用户', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order',
            'name',
            'time',
            'flag',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

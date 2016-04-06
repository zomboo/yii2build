<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\ZOrderuser;

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
        'showOnEmpty' => true,
        //'layout'=> '{items}<div class="text-right tooltip-demo">{pager}</div>',
        /* 'pager' => [
             //'options'=>['class'=>'hidden']//关闭分页
             'firstPageLabel' => "First",
             'prevPageLabel' => 'Prev',
             'nextPageLabel' => 'Next',
             'lastPageLabel' => 'Last',
         ],*/

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ou_id',
            'title',
           /* [
            'attribute'=>'title',
                'filter'=>ZOrderuser::getOrderList(),
                //TblCategory::get_status(),
        ],*/
            /*[
                'label'=>'title',
                'value'=>'zOrder.title',
            ],*/
            'name',
            [
                'label' => '日期',
                'format' => ['date', 'php:Y-m-d H:i'],
                'value' => 'time'
            ],
            'flag',
            ['class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                //'headerOptions' => ['width' => '80'],
                /*'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-user"></span>',$url);
                    },
                    'link' => function ($url, $model, $key) {
                        return Html::a('Action', $url);
                    },
                ],*/
                /*'template' => '{delete} {update}',//只需要展示删除和更新
                'headerOptions' => ['width' => '240'],
                'buttons' => [
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-ban"></i> 删除',
                            ['del', 'id' => $key],
                            [
                                'class' => 'btn btn-default btn-xs',
                                'data' => ['confirm' => '你确定要删除文章吗？',]
                            ]);
                    },
                ],*/
            ],
            ['class' => 'yii\grid\CheckboxColumn',
                'header' => Html::checkBox('selection_all', false, [
                    'class' => 'select-on-check-all',
                    'label' => 'Check All',
                ]),
               // 'multiple'=>true,
            ],
        ],
    ]); ?>
</div>
<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "z_order".
 *
 * @property integer $id
 * @property string $title
 * @property string $startTime
 * @property string $endTime
 * @property integer $count
 * @property integer $isOpen
 */
class ZOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startTime', 'endTime'], 'safe'],
            [['count', 'isOpen'], 'integer'],
            [['title'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'title' => '主题',
            'startTime' => '开始时间',
            'endTime' => '结束时间',
            'count' => '人数',
            'isOpen' => '是否开放',
        ];
    }
    
    public function getUsers()
    {
        //return $this-> hasMany(ZOrderuser:: className(), [ 'order' => 'id' ]);
    }
    

}

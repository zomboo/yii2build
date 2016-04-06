<?php

namespace backend\models;

use Yii;
use backend\models\ZOrder;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "z_orderuser".
 *
 * @property integer $order
 * @property string $name
 * @property string $time
 * @property integer $flag
 */
class ZOrderuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_orderuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order'], 'required'],
            [['order'], 'in', 'range' => array_keys($this->getOrderList())],
            [['ou_id','order', 'flag'], 'integer'],
            [['time'], 'safe'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ou_id'=> 'User',
            'title' =>'Order',
            'name' => 'Name',
            'time' => 'Time',
            'flag' => 'Flag',
        ];
    }

    public static function getOrderList()
    {
        $droptions = ZOrder:: find()->asArray()->all();
        return Arrayhelper:: map($droptions, 'id', 'title');
    }

    public function beforeValidate()
    {
        if ($this->time != null) {
            $new_date_format = date('Y-m-d H:i', strtotime($this->time));
            $this->time = $new_date_format;
        }
        return parent:: beforeValidate();
    }

    public function getZOrder()
    {
        return $this->hasOne(ZOrder:: className(), ['id' => 'order']);
    }

    public function getTitle()
    {
        return $this->zOrder ? $this->zOrder->title : '- no title -';
    }
}

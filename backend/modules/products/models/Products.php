<?php

namespace backend\modules\products\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $company
 * @property integer $code
 * @property string $industry
 * @property string $products
 * @property string $functions
 * @property string $power
 * @property string $neighbor
 * @property string $competitor
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company', 'code', 'industry', 'products', 'functions', 'power', 'neighbor', 'competitor'], 'required'],
            [['company', 'industry', 'products', 'functions', 'power', 'neighbor', 'competitor'], 'string'],
            [['code'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company' => '公司名称',
            'code' => '股票代码',
            'industry' => '所属行业',
            'products' => '核心产品',
            'functions' => '产品功能',
            'power' => '核心竞争力',
            'neighbor' => '产业链上下游',
            'competitor' => '竞争对手',
        ];
    }
}

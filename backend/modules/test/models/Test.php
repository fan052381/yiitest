<?php

namespace backend\modules\test\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sex
 * @property integer $high
 * @property string $birthday
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'sex', 'high', 'birthday'], 'required'],
            [['id', 'sex', 'high'], 'integer'],
            [['name'], 'string'],
            [['birthday'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sex' => 'Sex',
            'high' => 'High',
            'birthday' => 'Birthday',
        ];
    }
}

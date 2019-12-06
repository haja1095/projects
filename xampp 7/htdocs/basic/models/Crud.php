<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%crud}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $class
 */
class Crud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%crud}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'class'], 'required'],
            [['name', 'class'], 'string', 'max' => 50],
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
            'class' => 'Class',
        ];
    }
}

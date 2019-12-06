<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_class}}".
 *
 * @property int $id
 * @property string $class_name
 */
class TblClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_class}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_name'], 'required'],
            [['class_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_name' => 'Class Name',
        ];
    }
}

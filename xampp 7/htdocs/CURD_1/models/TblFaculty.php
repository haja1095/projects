<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_faculty}}".
 *
 * @property int $id
 * @property string $photo
 * @property string $name
 * @property string $department
 * @property string $email
 */
class TblFaculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_faculty}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo', 'name', 'department', 'email'], 'required'],
            [['photo', 'name', 'department', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
            'department' => 'Department',
            'email' => 'Email',
        ];
    }
}

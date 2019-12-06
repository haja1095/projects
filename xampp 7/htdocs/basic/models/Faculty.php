<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_faculty}}".
 *
 * @property integer $id
 * @property integer $photo
 * @property string $name
 * @property string $department
 * @property string $email
 */
class Faculty extends \yii\db\ActiveRecord
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
           // [['name', 'department','email'], 'required'],
           // [['name', 'department','email'], 'string', 'max' => 50],
            [['photo'], 'file','extensions' => 'png, jpg' ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Photo'=>'Photo',
            'name' => 'Name',
            'department' => 'Department',
            'email'=>'Email'
        ];
    }

    public function upload()
    {
        $ran=rand(1,10000);
        if ($this->validate()) {
            $this->photo->saveAs('uploads/' .$ran.time().'.' . $this->photo->extension);
            return $ran.time().'.' . $this->photo->extension;
        } else {
            return false;
        }
    }

    public function getImageurl()
    {
        return \Yii::$app->request->BaseUrl.'/uploads/'.$this->photo;
    }
}

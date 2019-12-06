<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_image}}".
 *
 * @property integer $id
 * @property resource $image
 */
class Image extends \yii\db\ActiveRecord
{

     public $imageFile;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_image}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'file','extensions' => 'png, jpg' ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
        ];
    }

    public function upload()
    {
        $ran=rand(1,10000);
        if ($this->validate()) {
             $this->image->saveAs('uploads/' .$ran.time().'.' . $this->image->extension);
             return $ran.time().'.' . $this->image->extension;
        } else {
            return false;
        }
    }
}

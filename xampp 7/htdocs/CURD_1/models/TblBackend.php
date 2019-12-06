<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_backend".
 *
 * @property int $int
 * @property string $name
 * @property int $status
 */
class TblBackend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_backend';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'int' => 'Int',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }
}

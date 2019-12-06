<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%trn_emp_log_hours}}".
 *
 * @property integer $id
 * @property integer $mst_employee_id
 * @property string $att_date
 * @property string $log_hours
 */
class TrnEmpLogHours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%trn_emp_log_hours}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_employee_id'], 'integer'],
            [['att_date'], 'safe'],
            [['log_hours'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_employee_id' => 'Mst Employee ID',
            'att_date' => 'Att Date',
            'log_hours' => 'Log Hours',
        ];
    }
}

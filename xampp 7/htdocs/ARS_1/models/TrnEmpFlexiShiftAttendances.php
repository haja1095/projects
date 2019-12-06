<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%trn_emp_flexi_shift_attendances}}".
 *
 * @property integer $id
 * @property integer $mst_employee_id
 * @property string $att_date
 * @property string $punch_time
 * @property integer $is_processed
 */
class TrnEmpFlexiShiftAttendances extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%trn_emp_flexi_shift_attendances}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_employee_id', 'is_processed'], 'integer'],
            [['att_date', 'punch_time'], 'safe'],
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
            'punch_time' => 'Punch Time',
            'is_processed' => 'Is Processed',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mst_departments}}".
 *
 * @property integer $id
 * @property integer $mst_institution_id
 * @property string $dept_name
 * @property string $dept_short_name
 * @property string $dept_start_date
 * @property integer $status
 * @property integer $is_deleted
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property integer $dept_type
 * @property integer $hod_employee_id
 * @property integer $dept_order
 * @property integer $is_first_year
 */
class MstDepartments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mst_departments}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_institution_id', 'status', 'is_deleted', 'created_by', 'modified_by', 'dept_type', 'hod_employee_id', 'dept_order', 'is_first_year'], 'integer'],
            [['dept_start_date', 'created_date', 'modified_date'], 'safe'],
            [['dept_name', 'dept_short_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_institution_id' => 'Mst Institution ID',
            'dept_name' => 'Dept Name',
            'dept_short_name' => 'Dept Short Name',
            'dept_start_date' => 'Dept Start Date',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
            'dept_type' => 'Dept Type',
            'hod_employee_id' => 'Hod Employee ID',
            'dept_order' => 'Dept Order',
            'is_first_year' => 'Is First Year',
        ];
    }
}

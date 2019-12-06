<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mst_academics}}".
 *
 * @property integer $id
 * @property integer $mst_institution_id
 * @property integer $mst_batch_id
 * @property string $acd_name
 * @property integer $mst_semester_id
 * @property integer $mst_course_id
 * @property string $acd_opendate
 * @property integer $acd_duration
 * @property integer $duration_type
 * @property string $acd_closingdate
 * @property integer $status
 * @property integer $is_deleted
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property integer $academic_year
 * @property string $worked_duration
 * @property integer $inst_duration
 */
class MstAcademics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mst_academics}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_institution_id', 'mst_batch_id', 'mst_semester_id', 'mst_course_id', 'acd_duration', 'duration_type', 'status', 'is_deleted', 'created_by', 'modified_by', 'academic_year', 'inst_duration'], 'integer'],
            [['acd_opendate', 'acd_closingdate', 'created_date', 'modified_date'], 'safe'],
            [['worked_duration'], 'number'],
            [['acd_name'], 'string', 'max' => 255],
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
            'mst_batch_id' => 'Mst Batch ID',
            'acd_name' => 'Acd Name',
            'mst_semester_id' => 'Mst Semester ID',
            'mst_course_id' => 'Mst Course ID',
            'acd_opendate' => 'Acd Opendate',
            'acd_duration' => 'Acd Duration',
            'duration_type' => 'Duration Type',
            'acd_closingdate' => 'Acd Closingdate',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
            'academic_year' => 'Academic Year',
            'worked_duration' => 'Worked Duration',
            'inst_duration' => 'Inst Duration',
        ];
    }
}

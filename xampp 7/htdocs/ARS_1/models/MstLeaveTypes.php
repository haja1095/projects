<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mst_leave_types}}".
 *
 * @property integer $id
 * @property integer $mst_institution_id
 * @property string $leave_name
 * @property string $leave_desc
 * @property integer $leave_duration
 * @property integer $leave_category
 * @property integer $status
 * @property integer $is_deleted
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property integer $order
 * @property string $short_name
 * @property integer $quick_att_order
 * @property string $leave_name_odml
 * @property string $final_attenance
 * @property integer $is_lop
 */
class MstLeaveTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mst_leave_types}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_institution_id', 'leave_duration', 'leave_category', 'status', 'is_deleted', 'created_by', 'modified_by', 'order', 'quick_att_order', 'is_lop'], 'integer'],
            [['leave_desc'], 'string'],
            [['created_date', 'modified_date'], 'safe'],
            [['leave_name', 'leave_name_odml'], 'string', 'max' => 100],
            [['short_name', 'final_attenance'], 'string', 'max' => 50],
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
            'leave_name' => 'Leave Name',
            'leave_desc' => 'Leave Desc',
            'leave_duration' => 'Leave Duration',
            'leave_category' => 'Leave Category',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
            'order' => 'Order',
            'short_name' => 'Short Name',
            'quick_att_order' => 'Quick Att Order',
            'leave_name_odml' => 'Leave Name Odml',
            'final_attenance' => 'Final Attenance',
            'is_lop' => 'Is Lop',
        ];
    }
}

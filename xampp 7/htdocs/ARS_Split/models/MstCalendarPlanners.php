<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mst_calendar_planners}}".
 *
 * @property integer $id
 * @property integer $mst_institution_id
 * @property string $cal_date
 * @property integer $mst_dayorder_id
 * @property integer $att_entry_status
 * @property integer $is_holiday
 * @property string $holiday_desc
 * @property integer $is_eventday
 * @property string $event_desc
 * @property integer $status
 * @property integer $is_deleted
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property integer $calendar_year
 * @property string $calendar_name
 * @property integer $sem_type
 * @property integer $periods_count
 * @property integer $is_week_holiday
 * @property integer $update_trigger_status
 * @property integer $record_manually_updated
 * @property integer $update_dayorder_for_current_date_only
 * @property integer $is_working_day
 * @property integer $is_special_dayorder
 * @property string $special_dayorder_desc
 * @property string $col_desc
 */
class MstCalendarPlanners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mst_calendar_planners}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_institution_id', 'mst_dayorder_id', 'att_entry_status', 'is_holiday', 'is_eventday', 'status', 'is_deleted', 'created_by', 'modified_by', 'calendar_year', 'sem_type', 'periods_count', 'is_week_holiday', 'update_trigger_status', 'record_manually_updated', 'update_dayorder_for_current_date_only', 'is_working_day', 'is_special_dayorder'], 'integer'],
            [['cal_date', 'created_date', 'modified_date'], 'safe'],
            [['holiday_desc', 'event_desc', 'special_dayorder_desc', 'col_desc'], 'string', 'max' => 250],
            [['calendar_name'], 'string', 'max' => 150],
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
            'cal_date' => 'Cal Date',
            'mst_dayorder_id' => 'Mst Dayorder ID',
            'att_entry_status' => 'Att Entry Status',
            'is_holiday' => 'Is Holiday',
            'holiday_desc' => 'Holiday Desc',
            'is_eventday' => 'Is Eventday',
            'event_desc' => 'Event Desc',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
            'calendar_year' => 'Calendar Year',
            'calendar_name' => 'Calendar Name',
            'sem_type' => 'Sem Type',
            'periods_count' => 'Periods Count',
            'is_week_holiday' => 'Is Week Holiday',
            'update_trigger_status' => 'Update Trigger Status',
            'record_manually_updated' => 'Record Manually Updated',
            'update_dayorder_for_current_date_only' => 'Update Dayorder For Current Date Only',
            'is_working_day' => 'Is Working Day',
            'is_special_dayorder' => 'Is Special Dayorder',
            'special_dayorder_desc' => 'Special Dayorder Desc',
            'col_desc' => 'Col Desc',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%trn_emp_attendances}}".
 *
 * @property integer $id
 * @property integer $mst_employee_id
 * @property integer $mst_institution_id
 * @property string $att_date
 * @property string $punch_time
 * @property string $created_date
 * @property integer $created_by
 */
class TrnEmpAttendances extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%trn_emp_attendances}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_employee_id', 'mst_institution_id', 'created_by'], 'integer'],
            [['att_date', 'punch_time', 'created_date'], 'safe'],
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
            'mst_institution_id' => 'Mst Institution ID',
            'att_date' => 'Att Date',
            'punch_time' => 'Punch Time',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
        ];
    }


    public static function getARSReportIndividualFacultyWise($inst_id,$mst_employee_id,$ars_month,$ars_year, $late_punch_time)
    {
        $connection = Yii::$app->get('db');
        $query="SELECT DISTINCT cal_date,
					MstEmployee.emp_fname || (case when MstEmployee.emp_mname is not null then ' '||MstEmployee.emp_mname else '' end ) || (case when MstEmployee.emp_lname is not null then ' '||MstEmployee.emp_lname else '' end ) as emp_name ,
					is_holiday,
					holiday_desc,
					is_eventday,
					event_desc,
					TrnEmpLeaveEntry.mst_leave_type_id,
					MstLeaveType.leave_name,
					MstLeaveType.short_name,
					to_char(TrnEmpAttendance.punch_time ,'HH12:MI AM') punch_time,
					to_char(TrnEmpAttendance.punch_time ,'HH24:MI') punch_order,
					(case when to_char(TrnEmpAttendance.punch_time ,'HH24:MI')>'$late_punch_time' THEN 'red' ELSE '' END) late_punch,
					(case when to_char(TrnEmpAttendance.punch_time ,'HH24:MI') between '08:40' and '11:59' THEN 'orange' ELSE '' END) max_late_punch,
					TrnEmpLeaveEntry.ars_session
				FROM mst_employees as MstEmployee
					CROSS JOIN (select cal_date,is_holiday,holiday_desc,is_eventday,event_desc from mst_calendar_planners AS MstCalendarPlanner where mst_institution_id=".$inst_id." and to_char(cal_date,'yyyy-mm')='".$ars_year."-".$ars_month."') as CalDates
					LEFT JOIN trn_emp_attendances as TrnEmpAttendance on(TrnEmpAttendance.att_date=CalDates.cal_date AND TrnEmpAttendance.mst_employee_id=MstEmployee.id )
        			LEFT JOIN trn_emp_leave_entries as TrnEmpLeaveEntry on (TrnEmpLeaveEntry.mst_employee_id=MstEmployee.id and TrnEmpLeaveEntry.status=1 and TrnEmpLeaveEntry.is_deleted=0 and TrnEmpLeaveEntry.ars_date=CalDates.cal_date)
					LEFT JOIN mst_leave_types as MstLeaveType on(TrnEmpLeaveEntry.mst_leave_type_id=MstLeaveType.id)
				WHERE MstEmployee.id=".$mst_employee_id."
      				  and MstEmployee.is_approve_modified is not null
     			      and MstEmployee.emp_ars_track =1
				ORDER BY cal_date ,punch_order";

        //echo'<pre>';print_r($query);echo'</pre>';

        return self::getDb()->createCommand($query)->queryAll();
    }

   public static function getExistStatusForEmpLogHour($mst_employee_id,$date,$log)
   {
       $connection = Yii::$app->get('db');
       $status = array();

       $query = "select * from trn_emp_log_hours where mst_employee_id = $mst_employee_id and att_date = '$date'";

       $res = self::getDb()->createCommand($query)->queryAll();

        if(empty($res))
        {
            $status['status'] = 1;
        }
        else
        {
            foreach($res as $log_hour)
            {
                if($log_hour['mst_employee_id'] != $mst_employee_id || $log_hour['att_date'] != $date || $log_hour['log_hours'] != $log)
                {
                    $status['status'] = 2;
                    $status['id'] = $log_hour['id'];
                }else
                {
                    $status['status'] = 0;
                }
            }
        }

       return $status;
    }

    public static function getARSTimings($inst_id=0)
    {
        $connection = Yii::$app->get('db');

        $query_1 ="select var_value from trn_siteconfigs where mst_institution_id=".$inst_id." and var_name='close' and status=1 and is_deleted=0";
        $query_2 ="select var_value from trn_siteconfigs where mst_institution_id=".$inst_id." and var_name='late-in' and status=1 and is_deleted=0";
        $query_3 ="select var_value from trn_siteconfigs where mst_institution_id=".$inst_id." and var_name='late-out' and status=1 and is_deleted=0";

        $close_timings= self::getDb()->createCommand($query_1)->queryAll();
        $late_in_timings = self::getDb()->createCommand($query_2)->queryAll();
        $late_out_timings = self::getDb()->createCommand($query_3)->queryAll();

        $timing=array();
        $timing['close'] =$close_timings[0]['var_value'];
        $timing['late-in']  =$late_in_timings[0]['var_value'];
        $timing['late-out']  =$late_out_timings[0]['var_value'];

        return $timing;
    }
}

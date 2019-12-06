<?php

namespace app\controllers;

use app\models\TrnSiteconfigs;
use Yii;
use app\models\MstEmployee;
use app\models\TrnEmpAttendances;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\Session;


class ArsController extends Controller
{

       /* public function beforeAction($action) {
            $this->enableCsrfValidation = false;
            return parent::beforeAction($action);
        }*/

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /*------Year Range Load----------*/
    public function getYearsList()
    {
        $currentYear = date('Y');
        $yearFrom = 1987;
        $yearsRange = range($currentYear,$yearFrom);
        return array_combine($yearsRange, $yearsRange);
    }

    public function actionIndex()
    {

       if(!empty(Yii::$app->request->post()))
       {

       if(!empty(Yii::$app->request->post('employee_id')))
           $employee_id=Yii::$app->request->post('employee_id');
       if(!empty(Yii::$app->request->post('month')))
           $month=Yii::$app->request->post('month');
       if(!empty(Yii::$app->request->post('year')))
           $year=Yii::$app->request->post('year');


           $punch_heading=0;
           $result=[];

           /*-----Ars Report Type-----*/
           $ars_report_type=0;


           /*---------Late Punch Time---------------*/
            $late_punch_time='';

           $ArsTimings      = TrnEmpAttendances::getARSTimings($inst_id=9);

           if(isset($ArsTimings['late-in'])) {
               $late_punch_time = $ArsTimings['late-in'];
           }
           else {
               $late_punch_time = '09:00:00';
           }

           /*------Total Worked Hours Calculate ------*/
           $LogHours = MstEmployee::getEmpLogHoursByMonthUsingShiftAttendance($mst_employee_id=$employee_id ,$ars_month=$month, $ars_year=$year);


           /*---------------------------Purpose ?????????----------------------------------------*/


          /* if(isset($LogHours) && !empty($LogHours) && !empty($employee_id))
           {
               foreach($LogHours as $date=> $log)
               {
                   $time = explode(':', $log);
                   $log_time =  ($time[0]*60) + ($time[1]);

                   $check_exist = TrnEmpAttendances::getExistStatusForEmpLogHour($mst_employee_id=Yii::$app->request->post('employee_id'),$date,$log_time);

                   if($check_exist['status'] == 1){
                       $insert_query = "insert into trn_emp_log_hours (mst_employee_id,att_date,log_hours) VALUES ($mst_employee_id,'$date','$log_time')";
                       $this->TrnEmpAttendance->query($insert_query);
                   }elseif($check_exist['status'] == 2){
                       $update_query = "update trn_emp_log_hours set mst_employee_id=$mst_employee_id, att_date = '$date', log_hours = '$log_time' where id = ".$check_exist['id'];
                       $this->TrnEmpAttendance->query($update_query);
                   }

               }
           }*/


           /*-----Punch Details-----*/
           $ARSReportFaculties_res= TrnEmpAttendances::getARSReportIndividualFacultyWise($inst_id=9, $employee_id, $month, $year, $late_punch_time=$late_punch_time /*'09:40:59'*/);

           if(!empty($ARSReportFaculties_res))
           {
               foreach($ARSReportFaculties_res as $ARSReportFaculty)
               {
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['is_holiday']=$ARSReportFaculty['is_holiday'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['holiday_desc']=$ARSReportFaculty['holiday_desc'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['is_eventday']=$ARSReportFaculty['is_eventday'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['event_desc']=$ARSReportFaculty['event_desc'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['ars_session']=$ARSReportFaculty['ars_session'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['leave_name'][]=$ARSReportFaculty['leave_name'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['short_name'][]=$ARSReportFaculty['short_name'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['punch_time'][]=$ARSReportFaculty['punch_time'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['late_punch'][]=$ARSReportFaculty['late_punch'];
                   $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['max_late_punch'][]=$ARSReportFaculty['max_late_punch'];
                   if(sizeof($result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['punch_time'])>$punch_heading)
                       $punch_heading=sizeof($result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['punch_time']);
               }

           }


           /*------Punch Heading------*/
           if(!empty($punch_heading))
           {
               if($punch_heading%2!=0)
                   $punch_heading=$punch_heading+1;
           }


           //---Layer---//
           $this->layout = "ars_punch";

           return $this->render('_search',
               [
                   'employee'=>ArrayHelper::map(MstEmployee::getEmployees(), 'id' ,'emp_fname','dept_short_name'),'year'=>$this->getYearsList(),
                   'ARSReportFaculties'=>$result,
                   'ars_report_type'=>$ars_report_type,
                   'late_punch_time'=>$late_punch_time,
                   'punch_heading'=>$punch_heading,
                   'LogHours'=>$LogHours

              ],true,true);

       }
       else
       {
           //------layer----//
           $this->layout = "menu";


           $punch_heading=0;
           $result=[];

           /*-----Ars Report Type-----*/
           $ars_report_type=0;
           $employees_list=0;
           $full_access_right=0;
           $current_year=date('Y');
           $current_month=date('m');

           //USER_ID
           $user_id = !empty($_SESSION['user_id'])?$_SESSION['user_id']:0;

           //EMP_ID
           $emp_id = !empty($_SESSION['userref_id'])?$_SESSION['userref_id']:0;      //3318; //site_config--3277,3235 //3236--punch time have id


           /*------Total Worked Hours Calculate ------*/
           $LogHours = MstEmployee::getEmpLogHoursByMonthUsingShiftAttendance($mst_employee_id=$emp_id, $ars_month=$current_month, $ars_year=$current_year);


           /*--------------------------- Purpose ????????? ----------------------------------------*/
           /*if(isset($LogHours) && !empty($LogHours) && !empty($mst_employee_id))
           {
               foreach($LogHours as $date=> $log)
               {
                   $time = explode(':', $log);
                   $log_time =  ($time[0]*60) + ($time[1]);

                   $check_exist = TrnEmpAttendances::getExistStatusForEmpLogHour($mst_employee_id, $date, $log_time);

                   if($check_exist['status'] == 1){
                       $insert_query = "insert into trn_emp_log_hours (mst_employee_id,att_date,log_hours) VALUES ($mst_employee_id,'$date','$log_time')";
                       $this->TrnEmpAttendance->query($insert_query);
                   }elseif($check_exist['status'] == 2){
                       $update_query = "update trn_emp_log_hours set mst_employee_id=$mst_employee_id, att_date = '$date', log_hours = '$log_time' where id = ".$check_exist['id'];
                       $this->TrnEmpAttendance->query($update_query);
                   }

               }
           }*/


           /*---------Late Punch Time---------------*/
           $late_punch_time='';

           $ArsTimings = TrnEmpAttendances::getARSTimings($inst_id=9);

           if(isset($ArsTimings['late-in'])) {
               $late_punch_time = $ArsTimings['late-in'];
           }
           else {
               $late_punch_time = '09:00:00';
           }


           /*-----Punch Details-----*/
           $ARSReportFaculties_res= TrnEmpAttendances::getARSReportIndividualFacultyWise($inst_id=9, $emp_id, $current_month, $current_year, $late_punch_time='09:40:59');

               if(!empty($ARSReportFaculties_res))
               {
                   foreach($ARSReportFaculties_res as $ARSReportFaculty)
                   {
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['is_holiday']=$ARSReportFaculty['is_holiday'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['holiday_desc']=$ARSReportFaculty['holiday_desc'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['is_eventday']=$ARSReportFaculty['is_eventday'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['event_desc']=$ARSReportFaculty['event_desc'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['ars_session']=$ARSReportFaculty['ars_session'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['leave_name'][]=$ARSReportFaculty['leave_name'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['short_name'][]=$ARSReportFaculty['short_name'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['punch_time'][]=$ARSReportFaculty['punch_time'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['late_punch'][]=$ARSReportFaculty['late_punch'];
                       $result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['max_late_punch'][]=$ARSReportFaculty['max_late_punch'];
                       if(sizeof($result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['punch_time'])>$punch_heading)
                           $punch_heading=sizeof($result[$ARSReportFaculty['emp_name']][$ARSReportFaculty['cal_date']]['punch_time']);
                   }

               }

           /*------Punch Heading------*/
           if(!empty($punch_heading))
           {
               if($punch_heading%2!=0)
                   $punch_heading=$punch_heading+1;
           }


           //-------Employee List------//

           $for_display_all_employees = TrnSiteconfigs::getVarValueByName('is_app_admin', $inst_id=9);

           $dept_hod = MstEmployee::getHodDeptEmp($inst_id=9, $emp_ids=$emp_id);


           if(!empty($for_display_all_employees) && !empty($user_id) || $user_id==1)
           {
               $allowed_users=explode(',',$for_display_all_employees);

               if($user_id==1 || in_array($user_id,$allowed_users)){  //--User_id=1 sysadmin or // sysadmin user rights have employee.

                   $employees_list = MstEmployee::getEmployeeActiveALLList($inst_id=9);
                   $employees_list = ArrayHelper::map($employees_list, 'id' ,'emp_fname','dept_short_name');
                   $full_access_right=1;
               }
               elseif(!empty($dept_hod)){ //--Department hod based employees list out

                  $employees_list =  MstEmployee::getEmpNameListForEmployeeArs($inst_id,$dept_hod);
                  $employees_list = ArrayHelper::map($employees_list, 'id' ,'emp_fname','dept_short_name');
                   $full_access_right=1;

               }
               else{
                   //Employee display..
                   $employees_list= (new \yii\db\Query())->select(['id','emp_fname'])->from('mst_employees')->where(['id'=>$emp_id,'status'=>1,'is_deleted'=>0])->one();
                   $full_access_right=0;
               }
           }

           return $this->render('index',
               [
                   'employee_list'=>$employees_list,
                   'year'=>$this->getYearsList(),
                   'ARSReportFaculties'=>$result,
                   'ars_report_type'=>$ars_report_type,
                   'late_punch_time'=>$late_punch_time,
                   'punch_heading'=>$punch_heading,
                   'LogHours'=>$LogHours,
                   'full_access_right'=>$full_access_right,
               ]);

           }

    }
}

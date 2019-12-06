<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mst_employees}}".
 *
 * @property integer $id
 * @property integer $mst_institution_id
 * @property integer $mst_department_id
 * @property integer $mst_designation_id
 * @property string $empno
 * @property integer $salutation
 * @property string $emp_fname
 * @property string $emp_mname
 * @property string $emp_lname
 * @property string $emp_sname
 * @property integer $emp_type
 * @property integer $emp_guardtype
 * @property string $emp_guardname
 * @property integer $emp_maritalstatus
 * @property string $emp_dob
 * @property integer $emp_age
 * @property integer $emp_gender
 * @property string $emp_nationality
 * @property string $emp_qual
 * @property string $emp_jdate
 * @property string $emp_rdate
 * @property string $remarks
 * @property string $emp_omail
 * @property string $emp_pmail
 * @property string $emp_handphone
 * @property string $emp_landphone
 * @property string $emp_paddress
 * @property integer $emp_pcountry_id
 * @property integer $emp_pstate_id
 * @property integer $emp_pcity_id
 * @property string $emp_pzipcode
 * @property string $emp_caddress
 * @property integer $emp_ccountry_id
 * @property integer $emp_cstate_id
 * @property integer $emp_ccity_id
 * @property string $emp_czipcode
 * @property string $emp_photo
 * @property integer $status
 * @property integer $is_deleted
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property integer $emp_ext_no
 * @property string $user_name
 * @property string $password
 * @property string $emp_guardian_name
 * @property string $emp_mother_name
 * @property integer $mst_community_id
 * @property integer $mst_caste_id
 * @property string $fax
 * @property string $pan
 * @property integer $emp_is_physically_challanged
 * @property integer $miniority_indicator
 * @property integer $emp_is_ft_pt
 * @property integer $appointment_type
 * @property integer $faculty_type
 * @property integer $mst_course_id
 * @property integer $emp_pay_scale_type
 * @property integer $emp_salary_mode
 * @property string $emp_bank_acc_no
 * @property string $emp_bank_branch_name
 * @property string $emp_bank_ifsc_code
 * @property string $emp_esi_no
 * @property string $emp_pf_no
 * @property integer $teaching_experience
 * @property integer $total_work_experience
 * @property integer $research_experience
 * @property integer $no_national_publications
 * @property integer $no_of_patents
 * @property integer $no_of_pg_projects_guided
 * @property integer $no_of_doctorate_students_guided
 * @property integer $no_of_international_publications
 * @property integer $no_of_books_published
 * @property integer $is_first_yr_teacher
 * @property integer $is_fy_common_subject_teacher
 * @property string $fy_common_subject_name
 * @property integer $is_aicte_work_member
 * @property integer $is_aicte_grants_assistance
 * @property string $is_approve_new
 * @property string $is_approve_modified
 * @property string $nominee_name
 * @property integer $nominee_relation
 * @property string $emp_bank_name
 * @property string $emp_handphone_1
 * @property integer $mst_blood_group_id
 * @property integer $emp_basic_pay
 * @property integer $emp_gross_pay
 * @property integer $emp_hra
 * @property integer $emp_other_allowance
 * @property integer $emp_da_percentage
 * @property integer $emp_bio_metric_id1
 * @property integer $emp_bio_metric_id2
 * @property string $emp_religion
 * @property integer $emp_ars_track
 * @property integer $profile_edit_flag
 * @property integer $approve_message_flag
 * @property integer $emp_is_phychallanged
 * @property integer $employee_status
 * @property string $resigned_date
 * @property string $resigned_reason
 * @property string $suspended_from_date
 * @property string $suspended_to_date
 * @property string $suspended_reason
 * @property string $spouse_name
 * @property string $father_name
 * @property string $scan_signature
 * @property integer $state_of_origin
 * @property string $caddress_1
 * @property string $caddress_2
 * @property string $caddress_3
 * @property string $paddress_1
 * @property string $paddress_2
 * @property string $paddress_3
 * @property string $scale_of_pay
 * @property string $next_increment_date
 * @property integer $substitute_faculty_id
 * @property string $fip_start_date
 * @property string $fip_end_date
 * @property integer $nature_of_handicap
 * @property string $emp_physically_challanged_desc
 * @property string $emp_spouse_name
 * @property string $emp_com_paddress
 * @property string $emp_com_caddress
 * @property string $emp_fullname
 * @property string $area_of_specialization
 * @property integer $mst_programme_id
 * @property string $adhar_no
 * @property integer $seniority_order
 * @property integer $is_emp_qualified
 * @property integer $emp_qualified_type
 * @property string $emp_qualification_approval_no
 * @property string $emp_qualification_approval_date
 * @property string $emp_qualification_temp_approval_no
 * @property string $emp_qualification_temp_approval_date
 * @property string $emp_qualification_temp_approval_exp_date
 */
class MstEmployee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mst_employees}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_institution_id', 'mst_department_id', 'mst_designation_id', 'salutation', 'emp_type', 'emp_guardtype', 'emp_maritalstatus', 'emp_age', 'emp_gender', 'emp_pcountry_id', 'emp_pstate_id', 'emp_pcity_id', 'emp_ccountry_id', 'emp_cstate_id', 'emp_ccity_id', 'status', 'is_deleted', 'created_by', 'modified_by', 'emp_ext_no', 'mst_community_id', 'mst_caste_id', 'emp_is_physically_challanged', 'miniority_indicator', 'emp_is_ft_pt', 'appointment_type', 'faculty_type', 'mst_course_id', 'emp_pay_scale_type', 'emp_salary_mode', 'teaching_experience', 'total_work_experience', 'research_experience', 'no_national_publications', 'no_of_patents', 'no_of_pg_projects_guided', 'no_of_doctorate_students_guided', 'no_of_international_publications', 'no_of_books_published', 'is_first_yr_teacher', 'is_fy_common_subject_teacher', 'is_aicte_work_member', 'is_aicte_grants_assistance', 'nominee_relation', 'mst_blood_group_id', 'emp_basic_pay', 'emp_gross_pay', 'emp_hra', 'emp_other_allowance', 'emp_da_percentage', 'emp_bio_metric_id1', 'emp_bio_metric_id2', 'emp_ars_track', 'profile_edit_flag', 'approve_message_flag', 'emp_is_phychallanged', 'employee_status', 'state_of_origin', 'substitute_faculty_id', 'nature_of_handicap', 'mst_programme_id', 'seniority_order', 'is_emp_qualified', 'emp_qualified_type'], 'integer'],
            [['emp_dob', 'emp_jdate', 'emp_rdate', 'created_date', 'modified_date', 'resigned_date', 'suspended_from_date', 'suspended_to_date', 'next_increment_date', 'fip_start_date', 'fip_end_date', 'emp_qualification_approval_date', 'emp_qualification_temp_approval_date', 'emp_qualification_temp_approval_exp_date'], 'safe'],
            [['remarks', 'emp_paddress', 'emp_caddress', 'resigned_reason', 'suspended_reason', 'emp_physically_challanged_desc', 'emp_com_paddress', 'emp_com_caddress'], 'string'],
            [['empno', 'emp_nationality', 'emp_qual', 'emp_omail', 'emp_pmail', 'emp_handphone', 'emp_landphone', 'emp_pzipcode', 'emp_czipcode', 'emp_guardian_name', 'emp_mother_name', 'emp_bank_branch_name', 'fy_common_subject_name', 'nominee_name', 'emp_bank_name', 'emp_handphone_1', 'caddress_1', 'caddress_2', 'caddress_3', 'paddress_1', 'paddress_2', 'paddress_3', 'emp_spouse_name', 'adhar_no'], 'string', 'max' => 150],
            [['emp_fname', 'emp_mname', 'emp_lname', 'emp_sname', 'emp_guardname', 'emp_photo', 'user_name', 'password', 'emp_religion', 'spouse_name', 'father_name', 'scan_signature'], 'string', 'max' => 255],
            [['fax', 'pan', 'emp_bank_ifsc_code', 'emp_esi_no', 'emp_pf_no'], 'string', 'max' => 20],
            [['emp_bank_acc_no'], 'string', 'max' => 50],
            [['is_approve_new', 'is_approve_modified'], 'string', 'max' => 1],
            [['scale_of_pay', 'emp_fullname', 'area_of_specialization'], 'string', 'max' => 250],
            [['emp_qualification_approval_no', 'emp_qualification_temp_approval_no'], 'string', 'max' => 100],
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
            'mst_department_id' => 'Mst Department ID',
            'mst_designation_id' => 'Mst Designation ID',
            'empno' => 'Empno',
            'salutation' => 'Salutation',
            'emp_fname' => 'Emp Fname',
            'emp_mname' => 'Emp Mname',
            'emp_lname' => 'Emp Lname',
            'emp_sname' => 'Emp Sname',
            'emp_type' => 'Emp Type',
            'emp_guardtype' => 'Emp Guardtype',
            'emp_guardname' => 'Emp Guardname',
            'emp_maritalstatus' => 'Emp Maritalstatus',
            'emp_dob' => 'Emp Dob',
            'emp_age' => 'Emp Age',
            'emp_gender' => 'Emp Gender',
            'emp_nationality' => 'Emp Nationality',
            'emp_qual' => 'Emp Qual',
            'emp_jdate' => 'Emp Jdate',
            'emp_rdate' => 'Emp Rdate',
            'remarks' => 'Remarks',
            'emp_omail' => 'Emp Omail',
            'emp_pmail' => 'Emp Pmail',
            'emp_handphone' => 'Emp Handphone',
            'emp_landphone' => 'Emp Landphone',
            'emp_paddress' => 'Emp Paddress',
            'emp_pcountry_id' => 'Emp Pcountry ID',
            'emp_pstate_id' => 'Emp Pstate ID',
            'emp_pcity_id' => 'Emp Pcity ID',
            'emp_pzipcode' => 'Emp Pzipcode',
            'emp_caddress' => 'Emp Caddress',
            'emp_ccountry_id' => 'Emp Ccountry ID',
            'emp_cstate_id' => 'Emp Cstate ID',
            'emp_ccity_id' => 'Emp Ccity ID',
            'emp_czipcode' => 'Emp Czipcode',
            'emp_photo' => 'Emp Photo',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
            'emp_ext_no' => 'Emp Ext No',
            'user_name' => 'User Name',
            'password' => 'Password',
            'emp_guardian_name' => 'Emp Guardian Name',
            'emp_mother_name' => 'Emp Mother Name',
            'mst_community_id' => 'Mst Community ID',
            'mst_caste_id' => 'Mst Caste ID',
            'fax' => 'Fax',
            'pan' => 'Pan',
            'emp_is_physically_challanged' => 'Emp Is Physically Challanged',
            'miniority_indicator' => 'Miniority Indicator',
            'emp_is_ft_pt' => 'Emp Is Ft Pt',
            'appointment_type' => 'Appointment Type',
            'faculty_type' => 'Faculty Type',
            'mst_course_id' => 'Mst Course ID',
            'emp_pay_scale_type' => 'Emp Pay Scale Type',
            'emp_salary_mode' => 'Emp Salary Mode',
            'emp_bank_acc_no' => 'Emp Bank Acc No',
            'emp_bank_branch_name' => 'Emp Bank Branch Name',
            'emp_bank_ifsc_code' => 'Emp Bank Ifsc Code',
            'emp_esi_no' => 'Emp Esi No',
            'emp_pf_no' => 'Emp Pf No',
            'teaching_experience' => 'Teaching Experience',
            'total_work_experience' => 'Total Work Experience',
            'research_experience' => 'Research Experience',
            'no_national_publications' => 'No National Publications',
            'no_of_patents' => 'No Of Patents',
            'no_of_pg_projects_guided' => 'No Of Pg Projects Guided',
            'no_of_doctorate_students_guided' => 'No Of Doctorate Students Guided',
            'no_of_international_publications' => 'No Of International Publications',
            'no_of_books_published' => 'No Of Books Published',
            'is_first_yr_teacher' => 'Is First Yr Teacher',
            'is_fy_common_subject_teacher' => 'Is Fy Common Subject Teacher',
            'fy_common_subject_name' => 'Fy Common Subject Name',
            'is_aicte_work_member' => 'Is Aicte Work Member',
            'is_aicte_grants_assistance' => 'Is Aicte Grants Assistance',
            'is_approve_new' => 'Is Approve New',
            'is_approve_modified' => 'Is Approve Modified',
            'nominee_name' => 'Nominee Name',
            'nominee_relation' => 'Nominee Relation',
            'emp_bank_name' => 'Emp Bank Name',
            'emp_handphone_1' => 'Emp Handphone 1',
            'mst_blood_group_id' => 'Mst Blood Group ID',
            'emp_basic_pay' => 'Emp Basic Pay',
            'emp_gross_pay' => 'Emp Gross Pay',
            'emp_hra' => 'Emp Hra',
            'emp_other_allowance' => 'Emp Other Allowance',
            'emp_da_percentage' => 'Emp Da Percentage',
            'emp_bio_metric_id1' => 'Emp Bio Metric Id1',
            'emp_bio_metric_id2' => 'Emp Bio Metric Id2',
            'emp_religion' => 'Emp Religion',
            'emp_ars_track' => 'Emp Ars Track',
            'profile_edit_flag' => 'Profile Edit Flag',
            'approve_message_flag' => 'Approve Message Flag',
            'emp_is_phychallanged' => 'Emp Is Phychallanged',
            'employee_status' => 'Employee Status',
            'resigned_date' => 'Resigned Date',
            'resigned_reason' => 'Resigned Reason',
            'suspended_from_date' => 'Suspended From Date',
            'suspended_to_date' => 'Suspended To Date',
            'suspended_reason' => 'Suspended Reason',
            'spouse_name' => 'Spouse Name',
            'father_name' => 'Father Name',
            'scan_signature' => 'Scan Signature',
            'state_of_origin' => 'State Of Origin',
            'caddress_1' => 'Caddress 1',
            'caddress_2' => 'Caddress 2',
            'caddress_3' => 'Caddress 3',
            'paddress_1' => 'Paddress 1',
            'paddress_2' => 'Paddress 2',
            'paddress_3' => 'Paddress 3',
            'scale_of_pay' => 'Scale Of Pay',
            'next_increment_date' => 'Next Increment Date',
            'substitute_faculty_id' => 'Substitute Faculty ID',
            'fip_start_date' => 'Fip Start Date',
            'fip_end_date' => 'Fip End Date',
            'nature_of_handicap' => 'Nature Of Handicap',
            'emp_physically_challanged_desc' => 'Emp Physically Challanged Desc',
            'emp_spouse_name' => 'Emp Spouse Name',
            'emp_com_paddress' => 'Emp Com Paddress',
            'emp_com_caddress' => 'Emp Com Caddress',
            'emp_fullname' => 'Emp Fullname',
            'area_of_specialization' => 'Area Of Specialization',
            'mst_programme_id' => 'Mst Programme ID',
            'adhar_no' => 'Adhar No',
            'seniority_order' => 'Seniority Order',
            'is_emp_qualified' => 'Is Emp Qualified',
            'emp_qualified_type' => 'Emp Qualified Type',
            'emp_qualification_approval_no' => 'Emp Qualification Approval No',
            'emp_qualification_approval_date' => 'Emp Qualification Approval Date',
            'emp_qualification_temp_approval_no' => 'Emp Qualification Temp Approval No',
            'emp_qualification_temp_approval_date' => 'Emp Qualification Temp Approval Date',
            'emp_qualification_temp_approval_exp_date' => 'Emp Qualification Temp Approval Exp Date',
        ];
    }


    public function getEmployees()
    {
        $connection = Yii::$app->get('db');
        $query="select
                        mst_employees.id as id,
                        emp_fname,
                        mst_department_id,
                        dept_short_name,
                        dept_name,
                        ROW_NUMBER()over(
                        PARTITION BY mst_department_id
                        order by mst_department_id )
                    from mst_employees
                        join mst_departments on(mst_employees.mst_department_id=mst_departments.id)";

        return self::getDb()->createCommand($query)->queryAll();
    }

    public static function getEmpLogHoursByMonthUsingShiftAttendance($mst_employee_id, $sal_month, $sal_year)
    {
        $LogByEmp = array();
        $LogHours = array();
        $FinalHours = array();

        $connection = Yii::$app->get('db');

        $query ="select
					row_number() over (PARTITION BY att_date ORDER BY punch_time) as rowno,
					case when (row_number() over (PARTITION BY att_date ORDER BY punch_time))%2=1 then 'I' else 'O' end as in_out,
					att_date, punch_time
				  from trn_emp_flexi_shift_attendances as Log
				  join mst_employees as Emp on(Log.mst_employee_id=Emp.id)
				  where Log.mst_employee_id=$mst_employee_id
					and to_char(Log.att_date, 'mm')::integer=$sal_month
					and to_char(Log.att_date, 'YYYY')::integer=$sal_year
				  order by att_date, punch_time ";

        $Result = self::getDb()->createCommand($query)->queryAll();

        //echo'<pre>';print_r($query);echo'</pre>'; exit;

        // echo'<pre>';print_r($Result);echo'</pre>';


        if(!empty($Result)) {
            foreach ($Result as $key=>$data) {

               //echo'<pre>';print_r($data);echo'</pre>';
               //echo'<pre>';print_r("From Date: ".$data['att_date']);echo'</pre>';
               //echo'<pre>';print_r("To Date: ".$data['punch_time']);echo'</pre>';
                //exit;

                $LogByEmp[$data['att_date']][] = $data['punch_time'];
            }

            //echo'<pre>';print_r("----------------------Form Array: ");echo'</pre>';
            //echo'<pre>';print_r($LogByEmp);echo'</pre>'; exit;

            foreach($LogByEmp as $att_date => $detail)	{
                $LogHours[$att_date] =0;
            }

            foreach($LogByEmp as $att_date => $detail)
            {
                $count = count($detail);
                for($key=0; $key < $count; $key+=2)
                {
                    $subKey = $key+1;
                    if(isset($detail[$key]) && isset($detail[$subKey]))
                    {
                        $from_time = strtotime($detail[$key]);
                        $to_time = strtotime($detail[$subKey]);
                        $minute = round(abs($to_time - $from_time) / 60,2);
                        $LogHours[$att_date] += $minute;
                    }
                }

                if(isset($LogHours[$att_date])&& !empty($LogHours[$att_date])) {
                    $hours = floor($LogHours[$att_date] / 60);
                    $minutes = $LogHours[$att_date] % 60;
                    $FinalHours[$att_date]=$hours.':'.$minutes;
                }
                else {
                    $FinalHours[$att_date]='00:00';
                }
            }
        }
        return $FinalHours;
    }


    public static function getHodDeptEmp($inst_id,$emp_id)
    {
        $DeptIds=array();

        $connection = Yii::$app->get('db');

        $query = "select Mstdept.id
      			from mst_departments as Mstdept
				where   Mstdept.hod_employee_id = '$emp_id'	and Mstdept.mst_institution_id = $inst_id
						and Mstdept.status = 1 and Mstdept.is_deleted = 0  ";

        $res=self::getDb()->createCommand($query)->queryAll();

        foreach($res as $ress)
        {

            if(isset($DeptIds) && !empty($DeptIds))
            {
                $DeptIds.=",".$ress['id'];
            }
            else
            {
                $DeptIds=$ress['id'];
            }
        }
        return $DeptIds;
    }

    public static function getEmployeeActiveALLList($inst_id=0)
    {

        /*$result=(new \yii\db\Query())->select(['id','emp_fname','dept_name'])
                                            ->from('mst_employees')
                                            ->where([
                                                         'mst_institution_id'=>$inst_id,
                                                         'status'=>1,
                                                         'is_deleted'=>0
                                                     ])
                                            ->orderBy('emp_fname')->all();*/


        $connection=Yii::$app->get('db');
        $query="select
	                    mst_employees.id,
	                    mst_departments.dept_name,
	                    mst_departments.dept_short_name,
	                    mst_employees.emp_fname
                            from mst_employees
		                      left join mst_departments on(mst_employees.mst_department_id=mst_departments.id)
		                      where mst_employees.mst_institution_id='$inst_id'
		                           and mst_employees.status=1
		                           and mst_employees.is_deleted=0
		                           order by mst_employees.emp_fname";

        return $result=self::getDb()->createCommand($query)->queryAll();

    }

    public static function getEmpNameListForEmployeeArs($inst_id=0,$dept_id)
    {
        $connection=Yii::$app->get('db');
        $query="select
                        mst_employees.id,
                        mst_departments.dept_name,
                        mst_departments.dept_short_name,
                        mst_employees.emp_fname
                        from mst_employees
                              left join mst_departments on(mst_employees.mst_department_id=mst_departments.id)
                              where
                                mst_employees.mst_institution_id='$inst_id'
                               and mst_employees.mst_department_id='$dept_id'
                               and mst_employees.status=1
                               and mst_employees.is_deleted=0
                               order by mst_employees.emp_fname";
        return $result=self::getDb()->createCommand($query)->queryAll();

    }
}

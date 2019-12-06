<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstEmployees;

/**
 * MstEmployeesSearch represents the model behind the search form about `app\models\MstEmployees`.
 */
class MstEmployeesSearch extends MstEmployees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mst_institution_id', 'mst_department_id', 'mst_designation_id', 'salutation', 'emp_type', 'emp_guardtype', 'emp_maritalstatus', 'emp_age', 'emp_gender', 'emp_pcountry_id', 'emp_pstate_id', 'emp_pcity_id', 'emp_ccountry_id', 'emp_cstate_id', 'emp_ccity_id', 'status', 'is_deleted', 'created_by', 'modified_by', 'emp_ext_no', 'mst_community_id', 'mst_caste_id', 'emp_is_physically_challanged', 'miniority_indicator', 'emp_is_ft_pt', 'appointment_type', 'faculty_type', 'mst_course_id', 'emp_pay_scale_type', 'emp_salary_mode', 'teaching_experience', 'total_work_experience', 'research_experience', 'no_national_publications', 'no_of_patents', 'no_of_pg_projects_guided', 'no_of_doctorate_students_guided', 'no_of_international_publications', 'no_of_books_published', 'is_first_yr_teacher', 'is_fy_common_subject_teacher', 'is_aicte_work_member', 'is_aicte_grants_assistance', 'nominee_relation', 'mst_blood_group_id', 'emp_basic_pay', 'emp_gross_pay', 'emp_hra', 'emp_other_allowance', 'emp_da_percentage', 'emp_bio_metric_id1', 'emp_bio_metric_id2', 'emp_ars_track', 'profile_edit_flag', 'approve_message_flag', 'emp_is_phychallanged', 'employee_status', 'state_of_origin', 'substitute_faculty_id', 'nature_of_handicap', 'mst_programme_id', 'seniority_order', 'is_emp_qualified', 'emp_qualified_type'], 'integer'],
            [['emp_fname', 'emp_mname', 'emp_lname', 'emp_guardname', 'emp_dob', 'emp_nationality', 'emp_qual', 'emp_jdate', 'emp_rdate', 'remarks', 'emp_omail', 'emp_pmail', 'emp_handphone', 'emp_landphone', 'emp_paddress', 'emp_caddress', 'emp_photo', 'created_date', 'modified_date', 'user_name', 'password', 'emp_guardian_name', 'emp_mother_name', 'fax', 'pan', 'emp_bank_acc_no', 'emp_bank_branch_name', 'emp_bank_ifsc_code', 'emp_esi_no', 'emp_pf_no', 'fy_common_subject_name', 'is_approve_new', 'is_approve_modified', 'nominee_name', 'emp_bank_name', 'emp_handphone_1', 'emp_religion', 'resigned_date', 'resigned_reason', 'suspended_from_date', 'suspended_to_date', 'suspended_reason', 'spouse_name', 'father_name', 'scan_signature', 'caddress_1', 'caddress_2', 'caddress_3', 'paddress_1', 'paddress_2', 'paddress_3', 'scale_of_pay', 'next_increment_date', 'fip_start_date', 'fip_end_date', 'emp_physically_challanged_desc', 'emp_spouse_name', 'emp_com_paddress', 'emp_com_caddress', 'emp_fullname', 'area_of_specialization', 'emp_qualification_approval_no', 'emp_qualification_approval_date', 'emp_qualification_temp_approval_no', 'emp_qualification_temp_approval_date', 'emp_qualification_temp_approval_exp_date', 'emp_omail_domain', 'empno', 'emp_sname', 'emp_pzipcode', 'emp_czipcode', 'adhar_no'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MstEmployees::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'mst_institution_id' => $this->mst_institution_id,
            'mst_department_id' => $this->mst_department_id,
            'mst_designation_id' => $this->mst_designation_id,
            'salutation' => $this->salutation,
            'emp_type' => $this->emp_type,
            'emp_guardtype' => $this->emp_guardtype,
            'emp_maritalstatus' => $this->emp_maritalstatus,
            'emp_dob' => $this->emp_dob,
            'emp_age' => $this->emp_age,
            'emp_gender' => $this->emp_gender,
            'emp_jdate' => $this->emp_jdate,
            'emp_rdate' => $this->emp_rdate,
            'emp_pcountry_id' => $this->emp_pcountry_id,
            'emp_pstate_id' => $this->emp_pstate_id,
            'emp_pcity_id' => $this->emp_pcity_id,
            'emp_ccountry_id' => $this->emp_ccountry_id,
            'emp_cstate_id' => $this->emp_cstate_id,
            'emp_ccity_id' => $this->emp_ccity_id,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'modified_date' => $this->modified_date,
            'modified_by' => $this->modified_by,
            'emp_ext_no' => $this->emp_ext_no,
            'mst_community_id' => $this->mst_community_id,
            'mst_caste_id' => $this->mst_caste_id,
            'emp_is_physically_challanged' => $this->emp_is_physically_challanged,
            'miniority_indicator' => $this->miniority_indicator,
            'emp_is_ft_pt' => $this->emp_is_ft_pt,
            'appointment_type' => $this->appointment_type,
            'faculty_type' => $this->faculty_type,
            'mst_course_id' => $this->mst_course_id,
            'emp_pay_scale_type' => $this->emp_pay_scale_type,
            'emp_salary_mode' => $this->emp_salary_mode,
            'teaching_experience' => $this->teaching_experience,
            'total_work_experience' => $this->total_work_experience,
            'research_experience' => $this->research_experience,
            'no_national_publications' => $this->no_national_publications,
            'no_of_patents' => $this->no_of_patents,
            'no_of_pg_projects_guided' => $this->no_of_pg_projects_guided,
            'no_of_doctorate_students_guided' => $this->no_of_doctorate_students_guided,
            'no_of_international_publications' => $this->no_of_international_publications,
            'no_of_books_published' => $this->no_of_books_published,
            'is_first_yr_teacher' => $this->is_first_yr_teacher,
            'is_fy_common_subject_teacher' => $this->is_fy_common_subject_teacher,
            'is_aicte_work_member' => $this->is_aicte_work_member,
            'is_aicte_grants_assistance' => $this->is_aicte_grants_assistance,
            'nominee_relation' => $this->nominee_relation,
            'mst_blood_group_id' => $this->mst_blood_group_id,
            'emp_basic_pay' => $this->emp_basic_pay,
            'emp_gross_pay' => $this->emp_gross_pay,
            'emp_hra' => $this->emp_hra,
            'emp_other_allowance' => $this->emp_other_allowance,
            'emp_da_percentage' => $this->emp_da_percentage,
            'emp_bio_metric_id1' => $this->emp_bio_metric_id1,
            'emp_bio_metric_id2' => $this->emp_bio_metric_id2,
            'emp_ars_track' => $this->emp_ars_track,
            'profile_edit_flag' => $this->profile_edit_flag,
            'approve_message_flag' => $this->approve_message_flag,
            'emp_is_phychallanged' => $this->emp_is_phychallanged,
            'employee_status' => $this->employee_status,
            'resigned_date' => $this->resigned_date,
            'suspended_from_date' => $this->suspended_from_date,
            'suspended_to_date' => $this->suspended_to_date,
            'state_of_origin' => $this->state_of_origin,
            'next_increment_date' => $this->next_increment_date,
            'substitute_faculty_id' => $this->substitute_faculty_id,
            'fip_start_date' => $this->fip_start_date,
            'fip_end_date' => $this->fip_end_date,
            'nature_of_handicap' => $this->nature_of_handicap,
            'mst_programme_id' => $this->mst_programme_id,
            'seniority_order' => $this->seniority_order,
            'is_emp_qualified' => $this->is_emp_qualified,
            'emp_qualified_type' => $this->emp_qualified_type,
            'emp_qualification_approval_date' => $this->emp_qualification_approval_date,
            'emp_qualification_temp_approval_date' => $this->emp_qualification_temp_approval_date,
            'emp_qualification_temp_approval_exp_date' => $this->emp_qualification_temp_approval_exp_date,
        ]);

        $query->andFilterWhere(['like', 'emp_fname', $this->emp_fname])
            ->andFilterWhere(['like', 'emp_mname', $this->emp_mname])
            ->andFilterWhere(['like', 'emp_lname', $this->emp_lname])
            ->andFilterWhere(['like', 'emp_guardname', $this->emp_guardname])
            ->andFilterWhere(['like', 'emp_nationality', $this->emp_nationality])
            ->andFilterWhere(['like', 'emp_qual', $this->emp_qual])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'emp_omail', $this->emp_omail])
            ->andFilterWhere(['like', 'emp_pmail', $this->emp_pmail])
            ->andFilterWhere(['like', 'emp_handphone', $this->emp_handphone])
            ->andFilterWhere(['like', 'emp_landphone', $this->emp_landphone])
            ->andFilterWhere(['like', 'emp_paddress', $this->emp_paddress])
            ->andFilterWhere(['like', 'emp_caddress', $this->emp_caddress])
            ->andFilterWhere(['like', 'emp_photo', $this->emp_photo])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'emp_guardian_name', $this->emp_guardian_name])
            ->andFilterWhere(['like', 'emp_mother_name', $this->emp_mother_name])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'pan', $this->pan])
            ->andFilterWhere(['like', 'emp_bank_acc_no', $this->emp_bank_acc_no])
            ->andFilterWhere(['like', 'emp_bank_branch_name', $this->emp_bank_branch_name])
            ->andFilterWhere(['like', 'emp_bank_ifsc_code', $this->emp_bank_ifsc_code])
            ->andFilterWhere(['like', 'emp_esi_no', $this->emp_esi_no])
            ->andFilterWhere(['like', 'emp_pf_no', $this->emp_pf_no])
            ->andFilterWhere(['like', 'fy_common_subject_name', $this->fy_common_subject_name])
            ->andFilterWhere(['like', 'is_approve_new', $this->is_approve_new])
            ->andFilterWhere(['like', 'is_approve_modified', $this->is_approve_modified])
            ->andFilterWhere(['like', 'nominee_name', $this->nominee_name])
            ->andFilterWhere(['like', 'emp_bank_name', $this->emp_bank_name])
            ->andFilterWhere(['like', 'emp_handphone_1', $this->emp_handphone_1])
            ->andFilterWhere(['like', 'emp_religion', $this->emp_religion])
            ->andFilterWhere(['like', 'resigned_reason', $this->resigned_reason])
            ->andFilterWhere(['like', 'suspended_reason', $this->suspended_reason])
            ->andFilterWhere(['like', 'spouse_name', $this->spouse_name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'scan_signature', $this->scan_signature])
            ->andFilterWhere(['like', 'caddress_1', $this->caddress_1])
            ->andFilterWhere(['like', 'caddress_2', $this->caddress_2])
            ->andFilterWhere(['like', 'caddress_3', $this->caddress_3])
            ->andFilterWhere(['like', 'paddress_1', $this->paddress_1])
            ->andFilterWhere(['like', 'paddress_2', $this->paddress_2])
            ->andFilterWhere(['like', 'paddress_3', $this->paddress_3])
            ->andFilterWhere(['like', 'scale_of_pay', $this->scale_of_pay])
            ->andFilterWhere(['like', 'emp_physically_challanged_desc', $this->emp_physically_challanged_desc])
            ->andFilterWhere(['like', 'emp_spouse_name', $this->emp_spouse_name])
            ->andFilterWhere(['like', 'emp_com_paddress', $this->emp_com_paddress])
            ->andFilterWhere(['like', 'emp_com_caddress', $this->emp_com_caddress])
            ->andFilterWhere(['like', 'emp_fullname', $this->emp_fullname])
            ->andFilterWhere(['like', 'area_of_specialization', $this->area_of_specialization])
            ->andFilterWhere(['like', 'emp_qualification_approval_no', $this->emp_qualification_approval_no])
            ->andFilterWhere(['like', 'emp_qualification_temp_approval_no', $this->emp_qualification_temp_approval_no])
            ->andFilterWhere(['like', 'emp_omail_domain', $this->emp_omail_domain])
            ->andFilterWhere(['like', 'empno', $this->empno])
            ->andFilterWhere(['like', 'emp_sname', $this->emp_sname])
            ->andFilterWhere(['like', 'emp_pzipcode', $this->emp_pzipcode])
            ->andFilterWhere(['like', 'emp_czipcode', $this->emp_czipcode])
            ->andFilterWhere(['like', 'adhar_no', $this->adhar_no]);

        return $dataProvider;
    }
}

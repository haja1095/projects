<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstEmployeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mst_institution_id') ?>

    <?= $form->field($model, 'mst_department_id') ?>

    <?= $form->field($model, 'mst_designation_id') ?>

    <?= $form->field($model, 'salutation') ?>

    <?php // echo $form->field($model, 'emp_fname') ?>

    <?php // echo $form->field($model, 'emp_mname') ?>

    <?php // echo $form->field($model, 'emp_lname') ?>

    <?php // echo $form->field($model, 'emp_type') ?>

    <?php // echo $form->field($model, 'emp_guardtype') ?>

    <?php // echo $form->field($model, 'emp_guardname') ?>

    <?php // echo $form->field($model, 'emp_maritalstatus') ?>

    <?php // echo $form->field($model, 'emp_dob') ?>

    <?php // echo $form->field($model, 'emp_age') ?>

    <?php // echo $form->field($model, 'emp_gender') ?>

    <?php // echo $form->field($model, 'emp_nationality') ?>

    <?php // echo $form->field($model, 'emp_qual') ?>

    <?php // echo $form->field($model, 'emp_jdate') ?>

    <?php // echo $form->field($model, 'emp_rdate') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'emp_omail') ?>

    <?php // echo $form->field($model, 'emp_pmail') ?>

    <?php // echo $form->field($model, 'emp_handphone') ?>

    <?php // echo $form->field($model, 'emp_landphone') ?>

    <?php // echo $form->field($model, 'emp_paddress') ?>

    <?php // echo $form->field($model, 'emp_pcountry_id') ?>

    <?php // echo $form->field($model, 'emp_pstate_id') ?>

    <?php // echo $form->field($model, 'emp_pcity_id') ?>

    <?php // echo $form->field($model, 'emp_caddress') ?>

    <?php // echo $form->field($model, 'emp_ccountry_id') ?>

    <?php // echo $form->field($model, 'emp_cstate_id') ?>

    <?php // echo $form->field($model, 'emp_ccity_id') ?>

    <?php // echo $form->field($model, 'emp_photo') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'modified_date') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'emp_ext_no') ?>

    <?php // echo $form->field($model, 'user_name') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'emp_guardian_name') ?>

    <?php // echo $form->field($model, 'emp_mother_name') ?>

    <?php // echo $form->field($model, 'mst_community_id') ?>

    <?php // echo $form->field($model, 'mst_caste_id') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'pan') ?>

    <?php // echo $form->field($model, 'emp_is_physically_challanged') ?>

    <?php // echo $form->field($model, 'miniority_indicator') ?>

    <?php // echo $form->field($model, 'emp_is_ft_pt') ?>

    <?php // echo $form->field($model, 'appointment_type') ?>

    <?php // echo $form->field($model, 'faculty_type') ?>

    <?php // echo $form->field($model, 'mst_course_id') ?>

    <?php // echo $form->field($model, 'emp_pay_scale_type') ?>

    <?php // echo $form->field($model, 'emp_salary_mode') ?>

    <?php // echo $form->field($model, 'emp_bank_acc_no') ?>

    <?php // echo $form->field($model, 'emp_bank_branch_name') ?>

    <?php // echo $form->field($model, 'emp_bank_ifsc_code') ?>

    <?php // echo $form->field($model, 'emp_esi_no') ?>

    <?php // echo $form->field($model, 'emp_pf_no') ?>

    <?php // echo $form->field($model, 'teaching_experience') ?>

    <?php // echo $form->field($model, 'total_work_experience') ?>

    <?php // echo $form->field($model, 'research_experience') ?>

    <?php // echo $form->field($model, 'no_national_publications') ?>

    <?php // echo $form->field($model, 'no_of_patents') ?>

    <?php // echo $form->field($model, 'no_of_pg_projects_guided') ?>

    <?php // echo $form->field($model, 'no_of_doctorate_students_guided') ?>

    <?php // echo $form->field($model, 'no_of_international_publications') ?>

    <?php // echo $form->field($model, 'no_of_books_published') ?>

    <?php // echo $form->field($model, 'is_first_yr_teacher') ?>

    <?php // echo $form->field($model, 'is_fy_common_subject_teacher') ?>

    <?php // echo $form->field($model, 'fy_common_subject_name') ?>

    <?php // echo $form->field($model, 'is_aicte_work_member') ?>

    <?php // echo $form->field($model, 'is_aicte_grants_assistance') ?>

    <?php // echo $form->field($model, 'is_approve_new') ?>

    <?php // echo $form->field($model, 'is_approve_modified') ?>

    <?php // echo $form->field($model, 'nominee_name') ?>

    <?php // echo $form->field($model, 'nominee_relation') ?>

    <?php // echo $form->field($model, 'emp_bank_name') ?>

    <?php // echo $form->field($model, 'emp_handphone_1') ?>

    <?php // echo $form->field($model, 'mst_blood_group_id') ?>

    <?php // echo $form->field($model, 'emp_basic_pay') ?>

    <?php // echo $form->field($model, 'emp_gross_pay') ?>

    <?php // echo $form->field($model, 'emp_hra') ?>

    <?php // echo $form->field($model, 'emp_other_allowance') ?>

    <?php // echo $form->field($model, 'emp_da_percentage') ?>

    <?php // echo $form->field($model, 'emp_bio_metric_id1') ?>

    <?php // echo $form->field($model, 'emp_bio_metric_id2') ?>

    <?php // echo $form->field($model, 'emp_religion') ?>

    <?php // echo $form->field($model, 'emp_ars_track') ?>

    <?php // echo $form->field($model, 'profile_edit_flag') ?>

    <?php // echo $form->field($model, 'approve_message_flag') ?>

    <?php // echo $form->field($model, 'emp_is_phychallanged') ?>

    <?php // echo $form->field($model, 'employee_status') ?>

    <?php // echo $form->field($model, 'resigned_date') ?>

    <?php // echo $form->field($model, 'resigned_reason') ?>

    <?php // echo $form->field($model, 'suspended_from_date') ?>

    <?php // echo $form->field($model, 'suspended_to_date') ?>

    <?php // echo $form->field($model, 'suspended_reason') ?>

    <?php // echo $form->field($model, 'spouse_name') ?>

    <?php // echo $form->field($model, 'father_name') ?>

    <?php // echo $form->field($model, 'scan_signature') ?>

    <?php // echo $form->field($model, 'state_of_origin') ?>

    <?php // echo $form->field($model, 'caddress_1') ?>

    <?php // echo $form->field($model, 'caddress_2') ?>

    <?php // echo $form->field($model, 'caddress_3') ?>

    <?php // echo $form->field($model, 'paddress_1') ?>

    <?php // echo $form->field($model, 'paddress_2') ?>

    <?php // echo $form->field($model, 'paddress_3') ?>

    <?php // echo $form->field($model, 'scale_of_pay') ?>

    <?php // echo $form->field($model, 'next_increment_date') ?>

    <?php // echo $form->field($model, 'substitute_faculty_id') ?>

    <?php // echo $form->field($model, 'fip_start_date') ?>

    <?php // echo $form->field($model, 'fip_end_date') ?>

    <?php // echo $form->field($model, 'nature_of_handicap') ?>

    <?php // echo $form->field($model, 'emp_physically_challanged_desc') ?>

    <?php // echo $form->field($model, 'emp_spouse_name') ?>

    <?php // echo $form->field($model, 'emp_com_paddress') ?>

    <?php // echo $form->field($model, 'emp_com_caddress') ?>

    <?php // echo $form->field($model, 'emp_fullname') ?>

    <?php // echo $form->field($model, 'area_of_specialization') ?>

    <?php // echo $form->field($model, 'mst_programme_id') ?>

    <?php // echo $form->field($model, 'seniority_order') ?>

    <?php // echo $form->field($model, 'is_emp_qualified') ?>

    <?php // echo $form->field($model, 'emp_qualified_type') ?>

    <?php // echo $form->field($model, 'emp_qualification_approval_no') ?>

    <?php // echo $form->field($model, 'emp_qualification_approval_date') ?>

    <?php // echo $form->field($model, 'emp_qualification_temp_approval_no') ?>

    <?php // echo $form->field($model, 'emp_qualification_temp_approval_date') ?>

    <?php // echo $form->field($model, 'emp_qualification_temp_approval_exp_date') ?>

    <?php // echo $form->field($model, 'emp_omail_domain') ?>

    <?php // echo $form->field($model, 'empno') ?>

    <?php // echo $form->field($model, 'emp_sname') ?>

    <?php // echo $form->field($model, 'emp_pzipcode') ?>

    <?php // echo $form->field($model, 'emp_czipcode') ?>

    <?php // echo $form->field($model, 'adhar_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

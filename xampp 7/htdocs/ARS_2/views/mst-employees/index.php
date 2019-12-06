<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MstEmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content">
    <div class="page-header">
        <h1>
            <?= Html::encode($this->title) ?>
        </h1>
    </div>
    <div class="mst-employees-index">

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
        <p>
            <?= Html::a('Create Mst Employees', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
        </p>
    <?php Pjax::begin(); ?>            <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
            'mst_institution_id',
            'mst_department_id',
            'mst_designation_id',
            'salutation',
            // 'emp_fname',
            // 'emp_mname',
            // 'emp_lname',
            // 'emp_type',
            // 'emp_guardtype',
            // 'emp_guardname',
            // 'emp_maritalstatus',
            // 'emp_dob',
            // 'emp_age',
            // 'emp_gender',
            // 'emp_nationality',
            // 'emp_qual',
            // 'emp_jdate',
            // 'emp_rdate',
            // 'remarks:ntext',
            // 'emp_omail',
            // 'emp_pmail',
            // 'emp_handphone',
            // 'emp_landphone',
            // 'emp_paddress:ntext',
            // 'emp_pcountry_id',
            // 'emp_pstate_id',
            // 'emp_pcity_id',
            // 'emp_caddress:ntext',
            // 'emp_ccountry_id',
            // 'emp_cstate_id',
            // 'emp_ccity_id',
            // 'emp_photo',
            // 'status',
            // 'is_deleted',
            // 'created_date',
            // 'created_by',
            // 'modified_date',
            // 'modified_by',
            // 'emp_ext_no',
            // 'user_name',
            // 'password',
            // 'emp_guardian_name',
            // 'emp_mother_name',
            // 'mst_community_id',
            // 'mst_caste_id',
            // 'fax',
            // 'pan',
            // 'emp_is_physically_challanged',
            // 'miniority_indicator',
            // 'emp_is_ft_pt',
            // 'appointment_type',
            // 'faculty_type',
            // 'mst_course_id',
            // 'emp_pay_scale_type',
            // 'emp_salary_mode',
            // 'emp_bank_acc_no',
            // 'emp_bank_branch_name',
            // 'emp_bank_ifsc_code',
            // 'emp_esi_no',
            // 'emp_pf_no',
            // 'teaching_experience',
            // 'total_work_experience',
            // 'research_experience',
            // 'no_national_publications',
            // 'no_of_patents',
            // 'no_of_pg_projects_guided',
            // 'no_of_doctorate_students_guided',
            // 'no_of_international_publications',
            // 'no_of_books_published',
            // 'is_first_yr_teacher',
            // 'is_fy_common_subject_teacher',
            // 'fy_common_subject_name',
            // 'is_aicte_work_member',
            // 'is_aicte_grants_assistance',
            // 'is_approve_new',
            // 'is_approve_modified',
            // 'nominee_name',
            // 'nominee_relation',
            // 'emp_bank_name',
            // 'emp_handphone_1',
            // 'mst_blood_group_id',
            // 'emp_basic_pay',
            // 'emp_gross_pay',
            // 'emp_hra',
            // 'emp_other_allowance',
            // 'emp_da_percentage',
            // 'emp_bio_metric_id1',
            // 'emp_bio_metric_id2',
            // 'emp_religion',
            // 'emp_ars_track',
            // 'profile_edit_flag',
            // 'approve_message_flag',
            // 'emp_is_phychallanged',
            // 'employee_status',
            // 'resigned_date',
            // 'resigned_reason:ntext',
            // 'suspended_from_date',
            // 'suspended_to_date',
            // 'suspended_reason:ntext',
            // 'spouse_name',
            // 'father_name',
            // 'scan_signature',
            // 'state_of_origin',
            // 'caddress_1',
            // 'caddress_2',
            // 'caddress_3',
            // 'paddress_1',
            // 'paddress_2',
            // 'paddress_3',
            // 'scale_of_pay',
            // 'next_increment_date',
            // 'substitute_faculty_id',
            // 'fip_start_date',
            // 'fip_end_date',
            // 'nature_of_handicap',
            // 'emp_physically_challanged_desc:ntext',
            // 'emp_spouse_name',
            // 'emp_com_paddress:ntext',
            // 'emp_com_caddress:ntext',
            // 'emp_fullname',
            // 'area_of_specialization',
            // 'mst_programme_id',
            // 'seniority_order',
            // 'is_emp_qualified',
            // 'emp_qualified_type',
            // 'emp_qualification_approval_no',
            // 'emp_qualification_approval_date',
            // 'emp_qualification_temp_approval_no',
            // 'emp_qualification_temp_approval_date',
            // 'emp_qualification_temp_approval_exp_date',
            // 'emp_omail_domain',
            // 'empno',
            // 'emp_sname',
            // 'emp_pzipcode',
            // 'emp_czipcode',
            // 'adhar_no',

                ['class' => 'yii\grid\ActionColumn',
                    'template'=>'<div class="hidden-sm hidden-xs action-buttons">{view}{update}{delete}</div>
                                    <div class="hidden-md hidden-lg"><div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-position="auto" data-toggle="dropdown">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>{res_view}</li>
                                        <li>{res_update}</li>
                                        <li>{res_delete}</li>
                                    </ul>
                                    </div></div>',
                    'buttons'=>[
                        'view' => function ($view_url, $model) {
                            $view_title = Yii::t('yii', 'View');
                            return Html::a('<i class="ace-icon fa fa-search-plus bigger-130"></i>', $view_url, array('class'=>'blue', 'title'=>$view_title));
                        },
                        'update' => function ($edit_url, $model) {
                            $edit_title = Yii::t('yii', 'Edit');
                            return Html::a('<i class="ace-icon fa fa-pencil bigger-130"></i>', $edit_url, array('class'=>'green', 'title'=>$edit_title));
                        },
                        'delete' => function ($delete_url, $model) {
                            $delete_title = Yii::t('yii', 'Delete');
                            return Html::a('<i class="ace-icon fa fa-trash-o bigger-130"></i>', $delete_url, array('class'=>'red', 'data-method'=>'post', 'data-confirm'=>Yii::t('yii', 'Are you sure you want to delete this item?'), 'title'=>$delete_title));
                        },
                        'res_view' => function ($view_url, $model) {
                            $view_title = Yii::t('yii', 'View');
                            return Html::a('<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span>', $view_url, array('class'=>'tooltip-info', 'data-rel'=>'tooltip', 'title'=>'', 'data-original-title'=>$view_title));
                        },
                        'res_update' => function ($edit_url, $model) {
                            $edit_title = Yii::t('yii', 'Edit');
                            return Html::a('<span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span>', $edit_url, array('class'=>'tooltip-info', 'data-rel'=>'tooltip', 'title'=>'', 'data-original-title'=>$edit_title));
                        },
                        'res_delete' => function ($delete_url, $model) {
                            $delete_title = Yii::t('yii', 'Delete');
                            return Html::a('<span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span>', $delete_url, array('class'=>'tooltip-info', 'data-rel'=>'tooltip', 'title'=>'', 'data-confirm'=>Yii::t('yii', 'Are you sure you want to delete this item?'), 'data-method'=>'post', 'data-original-title'=>$delete_title));
                        },
                    ],
                    'urlCreator' => function ($action, $model, $key, $index) {
                        if ($action === 'res_view' || $action === 'view') {
                            return array('view', 'id'=>$model->id);
                        } else if($action === 'res_update' || $action === 'update') {
                            return array('update', 'id'=>$model->id);
                        } else if($action === 'res_delete' || $action === 'delete') {
                            return array('delete', 'id'=>$model->id);
                        }
                    },
                    'headerOptions' => ['style' => 'width:100px; text-align: center']
                ],
            ],
        ]); ?>
        <?php Pjax::end(); ?>    </div>
</div>
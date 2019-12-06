<?php
use kartik\widgets\Select2;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
use yii\widgets\ActiveForm;

$this->title = 'Employee Attendance Report';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ars-index">

    <div class="form-group">
        <div class="col-sm-12 padding-small">

        <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']]); ?>

                <label class="control-label col-xs-12 col-sm-1 no-padding-right"><b>Month/Year</b></label>
                <div class="col-xs-12 col-sm-5 form-inline" >
                    <div class="col-sm-4">
                        <?php  echo Select2::widget([
                            'name' => 'month',
                            'value' => '',
                            'data' => Yii::$app->params['month'],
                            'options' => ['multiple' => false,'id'=>'month','options' => [ date('m') => ['Selected'=>'selected']]]
                        ]);  ?>
                    </div> &nbsp;&nbsp;&nbsp;
                      <div class="col-sm-4">
                          <?php  echo Select2::widget([
                              'name' => 'year',
                              'value' => '',
                              'data' => $year,
                              'options' => ['multiple' => false,'id'=>'year']
                          ]);  ?>
                      </div>
                </div>

                &nbsp;&nbsp;&nbsp;
                <label class="control-label col-xs-12 col-sm-2 no-padding-right"><b>Employee Name</b> :</label>

                <div class="col-xs-12 col-sm-3">
                   <?php

                    if($full_access_right==0){


                        echo'<input type="hidden" value='.$employee_list['id'].' id="employee">';
                        echo'<div class="col-sm-8" style="padding: 8px">'.$employee_list['emp_fname'].' - '.(!empty(Yii::$app->user->identity->username)?Yii::$app->user->identity->username :'').'</div>';

                    }else{

                        echo Select2::widget([
                            'name' => 'employee',
                            'value' => '',
                            'data' => $employee_list,
                            'options' => ['multiple' => false,'id'=>'employee','options'=>[!empty(Yii::$app->user->identity->userref_id)?Yii::$app->user->identity->userref_id :''=>['Selected'=>'selected']]]
                        ]);

                    }
                     ?>
                </div>

                <div class="col-xs-12 col-sm-1" style="padding-bottom:8px; padding-top:8px">
                    <button class="inline btn btn-primary btn-sm align-top" type="button"
                            onclick="search()">
                        <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>Search
                    </button>
                </div>

        <?php ActiveForm::end(); ?>

        </div>
        <br><br>
        <div class="clearfix"></div>
        <?php
        if(isset($ARSReportFaculties) && !empty($ARSReportFaculties))
        { if($ars_report_type!=1)
            {  ?>
               <div class="col-sm-12" id="punch_description">
                       <div class="col-sm-3">
                           <span style="background-color:#FF7777;">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;
                           <?php	echo "Punch above ".  $late_punch_time;  ?>
                       </div>
                       <div class="col-sm-2">
                           <span style="background-color:#FFDFDF;">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Late Punch
                       </div>
                       <div class="col-sm-2">
                           <span style="background-color:#D2FFD2;">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Leave Days
                       </div>
                       <div class="col-sm-2">
                           <span style="background-color:#CCE6FF;">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Week Holidays
                       </div>
                       <div class="col-sm-2">
                           <span style="background-color:#CCCCFF;">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Festival Days
                       </div>
               </div> <br>
            <?php } ?>
        <?php } ?>

        <div id="ars_report">

            <table>
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Days</th>
                    <th><p style="align=center">Worked Hours</p></th>
                    <?php
                    if(isset($punch_heading) && !empty($punch_heading))/*--Punch Heading In/Out-*/
                    {
                                    for ($punch_no=1; $punch_no<=$punch_heading; $punch_no++)
                                    {
                                        if($punch_no%2==0)
                                            $col_name='OUT '.round($punch_no/2);
                                        else
                                            $col_name='IN '.round($punch_no/2);
                                        ?>
                                        <th><?php echo  $col_name;?></th>
                             <?php }
                    } ?>
                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($ARSReportFaculties) && !empty($ARSReportFaculties))
                {

                    foreach ($ARSReportFaculties as $emp_name=>$ARSReportFaculty):

                        foreach($ARSReportFaculty as $date=>$employee_detail):


                            if(!empty($employee_detail['ars_session']))
                            { ?>
                                <tr class="row2"><!--Leave row--><!--Row 1-->
                            <?php }
                            else if($employee_detail['is_holiday']==1)
                            {
                                if($employee_detail['holiday_desc']=='Sunday' || $employee_detail['holiday_desc']=='Saturday')
                                { ?>
                                    <tr class="row4" style="background-color:#CCE6FF;"><!--holiday row--> <!--Row 2-->
                                <?php } else {  ?>
                                    <tr class="row5"><!--normal row--> <!--Row 3-->
                                <?php }
                            }
                            else if($employee_detail['late_punch'][0]=='red')
                            {
                                if($employee_detail['max_late_punch'][0]=='orange')
                                { ?>
                                    <tr class="normal_row4"><!--Early punch row color:orange--> <!--Row 3-->
                                    <?php
                                }
                                else { ?>
                                    <tr class="row3"><!--Late punch row color:red--> <!--Row 4-->
                                <?php }
                            }
                            else { ?>
                                <tr class="row1"><!--normal row--> <!--Row 5-->
                            <?php } ?>

                           <td><?php echo(date('d-m-y',strtotime($date))); ?> </td>

                           <td><!--Day/Holiday Description-->

                               <?php echo(date('l',strtotime($date)));?>

                                <?php if($employee_detail['is_holiday']==1)
                                { ?>

                                    <?php
                                    if($employee_detail['holiday_desc']=='Sunday' || $employee_detail['holiday_desc']=='Saturday')
                                    {
                                        //echo "(Week Holidays)";
                                    }
                                    else
                                    {
                                        echo "(".$employee_detail['holiday_desc'].")";
                                    } ?>

                                    <?php
                                }
                                else if(!empty($employee_detail['ars_session']))  /*Leave Session Mention*/
                                {
                                    $exisintg_leave_name=array();
                                    $leave_names=array();
                                    foreach($employee_detail['short_name'] as $leave_name)
                                    {
                                        if($exisintg_leave_name!=$leave_name)
                                        {
                                            $leave_names[]=$leave_name;
                                            $exisintg_leave_name=$leave_name;
                                        }
                                    }

                                    if(sizeof($leave_names)==1)
                                    {
                                        if($employee_detail['ars_session']==1)
                                        {
                                            echo "(".$leave_names[0].")";
                                        }
                                        else
                                        {
                                            echo "(/".$leave_names[0].")";
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <?php
                                        if($employee_detail['ars_session']==1)
                                        {
                                            echo "(".implode(",",$employee_detail['short_name']).")";
                                        }
                                        else
                                        {
                                            echo "(/".implode(",/",$employee_detail['short_name']).")";
                                        }


                                        ?>
                                      <?php
                                    }
                                }  ?>
                            </td>


                            <td align="center" width="3%"><!--Total Hour Worked HH:MM-->
                                <?php

                                    if($employee_detail['is_holiday']==1)
                                    {
                                        if(isset($LogHours[$date]))
                                        {
                                            echo $LogHours[$date];
                                        }
                                    }
                                    else if(!empty($employee_detail['ars_session']))
                                    {
                                    }
                                    else if(isset($LogHours[$date]))
                                    {
                                        echo $LogHours[$date];

                                    }
                                    else
                                    {
                                        echo '00:00';

                                    }

                                ?>
                            </td>  <!--Punch display-->
                            <?php
                            for ($punch_no=0; $punch_no<$punch_heading; $punch_no++)
                            {
                                if(isset($employee_detail['punch_time'][$punch_no]))
                                { ?>
                                    <td class="text_field"><?php echo $employee_detail['punch_time'][$punch_no];?></td>
                                <?php  	}
                                else
                                { ?>
                                    <td class="text_field">&nbsp;</td>
                                <?php	}
                            }
                             ?>
                            </tr><!--row ,1,2,3,4,5 End-->
                            <?php
                        endforeach;
                    endforeach;
                }
                else
                { ?>
                    <tr class='row1'><td colspan="<?php echo (!empty($punch_heading)?$punch_heading:0)+3 ?>">No Records Found<?php //echo__('norecords found');?></td></tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<script>
    function search()
    {
       $.ajax({
                url  : '<?= Yii::$app->urlManager->createUrl('ars/index'); ?>',
                type : 'post',
                data : {month:$('#month').val(),year:$('#year').val(),employee_id:$('#employee').val()},
                beforeSend: function () {
                    $('#punch_description').empty(' ');
                    $('#pleaseWaitDialog').modal();
                },
                success: function (data) {
                    $('#ars_report').html(data);
                   //$('#pleaseWaitDialog').modal();
                   $('#pleaseWaitDialog').modal('hide');

                }
            });
    }
</script>
<style>
    th{
        background-color: #D2DCE5 !important;
        font-size: small;
    }
    td{
        font-size: smaller;
    }
</style>

<?php
use app\assets\TableAsset;


TableAsset::register($this);

?>

<table>
    <thead>
    <tr>
        <th>Date<?php //echo __('col_date');?></th>
        <th>Days<?php //echo __('col_days');?></th>
        <th><p><?php //echo __('Worked Hours'); ?></p>
            <p style="align=center">Worked Hours</p></th>
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

                    } else
                    {
                        echo '00:00';

                    }

                    ?>
                </td>
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

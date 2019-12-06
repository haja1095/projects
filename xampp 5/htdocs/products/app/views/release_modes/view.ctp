   <?php echo $form->create('ReleaseMode', array('action' => 'view'));?>
<table width="99%"  align="center" border="1" cellspacing="1" cellpadding="1"  class="table_add"> 

<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('View Release');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
   <tr class="add_row1">
    <td class="right_condent" colspan="3">
 <?php if(isset($info_message) && !empty($info_message))
 {?>
		<div class="info"><?php echo $info_message;?></div>
 <?php }?>
 <?php if(isset($warning_message) && !empty($warning_message))
 {?>
		<div class="warning"><?php echo $warning_message;?></div>
 <?php }?>
 
 <?php if(isset($success_message) && !empty($success_message))
 {?>
		<div class="success"><?php echo $success_message;?></div>
 <?php }?> 
  <?php if(isset($error_message) && !empty($error_message))
 {?>
		<div class="error"><?php echo $error_message;?></div>
 <?php }?> 
<?php 
	  	 if(isset($this->validationErrors) && !empty($this->validationErrors))
			  { ?>			
			  	  
				  <div align="left" class="validation">
				    <?php foreach($this->validationErrors as $key=>$field_error){					
						foreach($field_error as $field_name=>$error){				 
					   e($error);
					   e("<br>");				  
					     }
					   }?>					
				   </div> 
				 
			<?php  } ?>
	  &nbsp;</td>   
  </tr>
  
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Release Name');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo $this->data['ReleaseMode']['release_name'];?></td>
  </tr>
  <tr class="add_row1">
    <td class="left_condent"><?php echo __('status');?></td>
    <td class="center_condent">:</td>
    <td class="right_condent_view"><?php echo  ($this->data['ReleaseMode']['status']==1?'Active':'Inactive'); ?></td>
  </tr>
  <tr class="add_row0">
     <td class="left_condent">&nbsp;</td> 
    <td class="center_condent">&nbsp; </td>
    <td class="right_condent"><input type="button" value="Close" class="close-btn"  onClick="javascript:hide_entry_form();"></td>
  </tr>
</table>
<?php echo $form->end();?> 
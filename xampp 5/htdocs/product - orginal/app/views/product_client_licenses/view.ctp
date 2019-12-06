   <?php echo $form->create('ProductClientLicense', array('action' => 'view'));?>
<table width="99%"  align="center" border="1" cellspacing="1" cellpadding="1"  class="table_add"> 

<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('View Licenses');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
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
    <td width="40%" class="left_condent"><?php echo __('Client Name');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo $this->data['Client']['client_name'];?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Product Name');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo $this->data['Product']['product_name'];?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('License Type');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['license_type'])=='create'?'New':'Renewal'; ?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Created Date');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['created_date'])==''?'-':date('Y-m-d',strtotime($this->data['ProductClientLicense']['created_date'])); ?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Expire Date');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['expire_date'])==''?'-':date('Y-m-d',strtotime($this->data['ProductClientLicense']['expire_date'])); ?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Product ID');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['product_ids'])==''?'-':$this->data['ProductClientLicense']['product_ids']; ?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Product Key');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['product_key'])==''?'-':$this->data['ProductClientLicense']['product_key']; ?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Product Key File');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view">
	<?php
	if(isset($this->data['ProductClientLicense']['product_key_file_url']))
	   {
	   e($html->link('Download Product Key',array('controller' => $this->viewPath, 'action' =>'product_key_file_download', $this->data['ProductClientLicense']['id']),array('title'=>'Download Product Key', 'style'=>'text-decoration:none')));
	   }
	   else
	   {
	   echo "-";
	   }
	?>
	</td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('License Key');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['license_key'])==''?'-':$this->data['ProductClientLicense']['license_key']; ?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('License Key File');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view">
	<?php
	if(isset($this->data['ProductClientLicense']['license_key_file_url']))
	   {
	   e($html->link('Download License Key',array('controller' => $this->viewPath, 'action' =>'license_key_file_download', $this->data['ProductClientLicense']['id']),array('title'=>'Download License Key', 'style'=>'text-decoration:none')));
	   }
	   else
	   {
	   echo "-";
	   }
	?>
	</td>
  </tr>
  <!--
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Last Expire Date');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['last_expiry_date'])==''?'-':date('Y-m-d',strtotime($this->data['ProductClientLicense']['last_expiry_date'])); ?></td>
  </tr>
  
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Next Renewal Date');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['next_renewal_date'])==''?'-':date('Y-m-d',strtotime($this->data['ProductClientLicense']['next_renewal_date'])); ?></td>
  </tr>
  -->
  <tr class="add_row1">
    <td class="left_condent"><?php echo __('status');?></td>
    <td class="center_condent">:</td>
    <td class="right_condent_view"><?php echo ($this->data['ProductClientLicense']['status']==1?'Active':'Inactive'); ?></td>
  </tr>
  <tr class="add_row0">
     <td class="left_condent">&nbsp;</td> 
    <td class="center_condent">&nbsp; </td>
    <td class="right_condent"><input type="button" value="Close" class="close-btn"  onClick="javascript:hide_entry_form();"></td>
  </tr>
</table>
<?php echo $form->end();?> 
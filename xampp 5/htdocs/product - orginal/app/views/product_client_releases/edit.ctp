   <?php echo $form->create('ProductClientRelease', array('action' => 'edit'));?>
<table width="99%"  align="center" border="1" cellspacing="1" cellpadding="1"  class="table_add"> 
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('Edit Release');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
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
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Client Name');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->select('client_id',$clients_list,null,array('id'=>'client_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false, 'empty'=>'--Select--','onchange'=>'getProductLists(this.id);'));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Product Name');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><div id="load_products"><?php echo $form->select('product_id',$products_list,null,array('id'=>'product_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false, 'empty'=>'--Select--'));?></div></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Release Mode');?></td>
    <td width="1%" class="center_condent">:</td>
	<td width="59%" class="right_condent"><div id="load_releases"><?php echo $form->select('release_location',$releases_list,null,array('id'=>'release_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false, 'empty'=>'--Select--'));?></div></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Release No');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('release_no',array('error'=>false,'div'=>false,'class'=>'text_input_100','label'=>false));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Release Date');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('release_date',array('id'=>'release_date','type'=>'text','readonly'=>true,'error'=>false,'class'=>'text_input_100','label'=>false));?>
	<script type="text/javascript">
		jQuery(function($){
			$('#release_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
			});
	</script>
	</td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Release Version');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('release_version',array('type'=>'text', 'error'=>false,'div'=>false,'class'=>'text_input_100','label'=>false));?></td>
  </tr>
  
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Approved Date');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('approved_date',array('id'=>'approved_date','type'=>'text','readonly'=>true,'error'=>false,'class'=>'text_input_100','label'=>false));?>
	<script type="text/javascript">
		jQuery(function($){
			$('#approved_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
			});
	</script>
	</td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Approved By');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('approved_by',array('type'=>'text', 'class'=>'text_input_100', 'error'=>false,'div'=>false, 'label'=>false));?></td>
  </tr>
  <tr class="add_row1">
    <td class="left_condent"><?php echo __('status');?></td>
    <td class="center_condent">:</td>
    <td class="right_condent"><?php echo  $form->checkbox('status'); ?></td>
  </tr>
  <tr class="add_row0">
  	<td class="left_condent"><input type="button"  value="Close" class="close-btn"  onClick="javascript:hide_entry_form();"></td>
	<td class="center_condent">&nbsp; </td>
     <td class="right_condent"><?php echo $ajax->submit('Update', array('div' => false, 'type'=>'submit','class'=>'update-btn' , 'url' => array('controller'=> 'ProductClientReleases', 'action' => 'edit',$this->data['ProductClientRelease']['id']), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'ProductClientReleases', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?></td>
  </tr>
</table>
<?php echo $form->end();?>

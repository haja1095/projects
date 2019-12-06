   <?php echo $form->create('Product', array('action' => 'edit'));?>
<table width="99%"  align="center" border="1" cellspacing="1" cellpadding="1"  class="table_add"> 
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('EditProduct');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
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
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Product Name');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('product_name',array('error'=>false,'div'=>false,'class'=>'text_input_100','label'=>false));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Product Version');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('product_version',array('error'=>false,'div'=>false,'class'=>'text_input_100','label'=>false));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Product Description');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->textarea('product_desc',array('error'=>false,'div'=>false,'class'=>'text_input_100','rows'=>'3','cols'=>'20','label'=>false));?></td>
  </tr>
  <tr class="add_row1">
    <td class="left_condent"><?php echo __('status');?></td>
    <td class="center_condent">:</td>
    <td class="right_condent"><?php echo  $form->checkbox('status'); ?></td>
  </tr>
  <tr class="add_row0">
  	<td class="left_condent"><input type="button"  value="Close" class="close-btn"  onClick="javascript:hide_entry_form();"></td>
	<td class="center_condent">&nbsp; </td>
     <td class="right_condent"><?php echo $ajax->submit('Update', array('div' => false, 'type'=>'submit','class'=>'update-btn' , 'url' => array('controller'=> 'products', 'action' => 'edit',$this->data['Product']['id']), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'Products', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?></td>
  </tr>
</table>
<?php echo $form->end();?>
   <?php echo $form->create('Client', array('action' => 'edit'));?>
<table width="99%"  align="center" border="1" cellspacing="1" cellpadding="1"  class="table_add"> 
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('Edit Client');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
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
    <td width="59%" class="right_condent"><?php echo $form->input('client_name',array('error'=>false,'div'=>false,'class'=>'text_input_100','label'=>false,'onload'=>'getSelectedProducts(this.id);'));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Client Mobile');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->input('client_mobile',array('type'=>'text','error'=>false,'div'=>false,'class'=>'text_input_100','label'=>false, 'onkeypress'=>'return ValidateNumber(event);','maxlength'=>10));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Client Address');?></td>
    <td width="1%" class="center_condent">:</td>
    <td width="59%" class="right_condent"><?php echo $form->textarea('client_address',array('error'=>false,'div'=>false,'class'=>'text_input_100','rows'=>'3','cols'=>'20','label'=>false));?></td>
  </tr>
  <tr  class="add_row0">
				<td  width="40%" class="left_condent" align="right"><?php echo __('Select Product');?></td> <!-- Multiple checkboxes select here-->
				<td width="1%" class="center_condent">:</td>
				<td  width="59%" class="right_condent" colspan="10">
				<!--
				<tr>
				<td colspan="6" style="border:none;">
						<div id='product_list_edit'>
							<table width="65%" align="right">
								<?php 
								$count=0;
								foreach ($product_list as $product_list) {
								 $id = $product_list['Product']['id'];
								 $product_name = $product_list['Product']['product_name'];
								if ($count%6 == 0){
								echo "<tr>";
								}$count+=1;
								
								echo "<td>";
								//echo $form->input('product_list.'.$id, array('name'=>'data[client][product]['.$id.']', 'type' => 'checkbox', 'id'=>'products_lists[]', 'div'=>false,'label'=>false,'error'=>false));
								echo $form->checkbox('product_list.'.$id,array('name'=>'[client][product]['.$id.']'));
								echo $product_name."</td>";
								
								if ($count%6 == 0){
								echo "</tr>";
								}
								}?>
							</table>
						</div>
					</td>
				</tr>
				-->
				<div id="load_products">
				<?php
				// in view file
				//pr($selected_products); exit;
				foreach ($selected_products as $key=>$selected_product) {
					 //$id = $selected_product['id'];
					 //$product_name = $selected_product['product_name'];
				echo $form->input('product_list.'.$key, array('type' => 'checkbox', 'id'=>'products_lists[]', 'checked'=>'checked', 'div'=>false,'error'=>false, 'label' => $selected_product));
				echo "<br>";
				}
				?>
				</div>
				
				</td>
			</tr>
  <tr class="add_row1">
    <td class="left_condent"><?php echo __('status');?></td>
    <td class="center_condent">:</td>
    <td class="right_condent"><?php echo  $form->checkbox('status'); ?></td>
  </tr>
  <tr class="add_row0">
  	<td class="left_condent"><input type="button"  value="Close" class="close-btn"  onClick="javascript:hide_entry_form();"></td>
	<td class="center_condent">&nbsp; </td>
     <td class="right_condent"><?php echo $ajax->submit('Update', array('div' => false, 'type'=>'submit','class'=>'update-btn' , 'url' => array('controller'=> 'clients', 'action' => 'edit',$this->data['Client']['id']), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'Clients', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?></td>
  </tr>
</table>
<?php echo $form->end();?>
<script>
jQuery(function($) {
	$(document).ready(function(){
	var id=document.getElementById('ClientEditForm').text;
	//getSelectedProducts(id);
	});
});
function validate1()
	{
		var myDiv = 'product_list_edit';
		var z = 0;
		var output = 0;
		var divElement= $(myDiv).getElementsByTagName('*');	 
		for(z=0; z<divElement.length;z++){
			if(divElement[z].type == 'checkbox'){			 
				if (divElement[z].checked){
					output = 1;
				}
			}
		}
}
</script>

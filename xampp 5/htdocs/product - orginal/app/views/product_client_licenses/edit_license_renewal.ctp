<script>jQuery.noConflict();</script>
   <?php echo $form->create('ProductClientLicense', array('action' => 'edit_license_renewal', 'type'=>'file'));?>
   <fieldset class="form_start_fieldset">
<table width="99%"  align="center" border="1" cellspacing="1" cellpadding="1"  class="table_add"> 
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('Edit License Renewal');?></div><div style="float:right">
<?php  //e($html->link('Close',array('controller' => 'ProductClientLicenses', 'action' =>'index'),array('class'=>'form-close-btn', 'title'=>'','escape' => false))); ?>
</div></td></tr>
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
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Client Name : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->select('client_id',$clients_list,null,array('id'=>'client_id','class'=>'text_select_100', 'div'=>false,'error'=>false, 'label' => false,'empty'=>' -Select- ','onchange'=>'getProductLists(this.id);'));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('Product Name : ');?></td>
    <td width="59%" class="right_condent"><div id="load_products"><?php echo $form->select('product_id',$products_list,null,array('id'=>'product_id','class'=>'text_select_100', 'readonly'=>true, 'div'=>false,'error'=>false, 'label' => false,'empty'=>' -Select- ', 'onChange'=>'return getLicenseType(this.value);'));?></div></td>
  </tr>
  <!--
   <tr class="add_row0">
	<td width="40%" class="left_condent"><font color="#F41B0F">*</font><?php echo __('License Type : ');?></td>
	<td>
	<?php $arrCategory=array('create'=>"New",'renewal'=>"Renewal"); ?>
	<?php //echo $form->input('license_type', array('class'=>'text_select_100', 'type'=>'text', 'label'=>false )); ?>
	<?php echo $form->select('license_type',$arrCategory,null, array('class'=>'text_select_100','empty'=>'--Select--', 'onChange'=>'return getLicenseType(this.value);' )); ?>
	</td>
  </tr>
  --> 
  <tr class="add_row0" id="renewal_category">
  <!--
  	<td width="40%" class="left_condent"><?php echo __('Last Expire Date : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('expire_date',array('id'=>'last_expiry_date', 'type'=>'text', 'readonly'=>true,'error'=>false,'class'=>'text_input_100', 'label'=>false));?>
	<script type="text/javascript">
		jQuery(function($){
			$('#last_expiry_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true, minDate: -100000, maxDate: +0});
			});
	</script>
	</td>
	-->
  </tr>
  <tr class="add_row0" id="create_category1">
  <!--
    <td width="40%" class="left_condent"><?php echo __('Product Key File : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->label('product_key_file_url',array('id'=>'product_key_file_url', 'type'=>'file',  'error'=>false,'class'=>'text_input_100','label'=>false));?>
	</td>
	-->
  </tr>
	<!--
  <tr class="add_row0" id="create_category">
    <td width="40%" class="left_condent"><?php echo __('Created Date : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('created_date',array('id'=>'created_date','type'=>'text', 'error'=>false,'class'=>'text_input_100','label'=>false));?>
	<script type="text/javascript">
		jQuery(function($){
			$('#created_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true, minDate: -100000, maxDate: +0});
			});
	</script>
	</td>
  </tr>
  -->
  <tr class="add_row0" id="create_category4">
  <!--
    <td width="40%" class="left_condent"><?php echo __('Product Key File URL : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('product_key_file_url_get',array('id'=>'product_key_file_url_get','type'=>'text', 'error'=>false,'class'=>'text_input_100','label'=>false));?>
	<script type="text/javascript">
		jQuery(function($){
			$('#last_expiry_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true, minDate: -100000, maxDate: +0});
			});
	</script>
	</td>
	-->
  </tr>
  <tr class="add_row0"  id="renewal_category1">
    <td width="40%" class="left_condent"><?php echo __('Renewal Date : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('next_renewal_date',array('id'=>'next_renewal_date','type'=>'text','readonly'=>true,'error'=>false,'class'=>'text_input_100','label'=>false));?>
	<script type="text/javascript">
		jQuery(function($){
			$('#next_renewal_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
			});
	</script>
	</td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('Expire Date : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('expire_date',array('id'=>'expire_date','type'=>'text', 'error'=>false,'class'=>'text_input_100','label'=>false));?>
	<script type="text/javascript">
		jQuery(function($){
			$('#expire_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
			});
	</script>
	</td>
  </tr>
  <!--
  <tr class="add_row0" id="create_category3">
    <td width="40%" class="left_condent"><?php echo __('Product ID : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('product_ids',array('id'=>'product_ids','type'=>'text', 'error'=>false,'class'=>'text_input_100','label'=>false));?>
	</td>
  </tr>
    <tr class="add_row0" id="create_category2">
    <td width="40%" class="left_condent"><?php echo __('Product Key : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('product_key',array('id'=>'product_key','type'=>'text', 'error'=>false,'class'=>'text_input_100','label'=>false));?>
	</td>
  </tr>
   </tr>
  -->
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('License Key : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->input('license_key',array('error'=>false,'div'=>false,'class'=>'text_input_100','label'=>false));?></td>
  </tr>
  <tr class="add_row0">
    <td width="40%" class="left_condent"><?php echo __('License Key File : ');?></td>
    <td width="59%" class="right_condent"><?php echo $form->file('license_key_file_url',array('id'=>'license_key_file_url', 'type'=>'file',  'error'=>false,'class'=>'text_input_100','label'=>false));?>
	</td>
  </tr>
  <tr class="add_row1">
    <td class="left_condent"><?php echo __('status : ');?></td>
    <td class="right_condent"><?php echo  $form->checkbox('status'); ?></td>
  </tr>
  <tr class="add_row0">
    <td class="left_condent"><?php  e($html->link('Close',array('controller' => 'ProductClientLicenses', 'action' =>'index'),array('class'=>'close-btn', 'title'=>'','escape' => false))); ?></td>
	<td class="right_condent"><?php //echo $ajax->submit('Update', array('div' => false, 'type'=>'submit','class'=>'update-btn' , 'url' => array('controller'=> 'ProductClientLicenses', 'action' => 'edit',$this->data['ProductClientLicense']['id']), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'ProductClientLicenses', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?>
	<?php  echo $form->submit('Save', array('div' => false, 'type'=>'submit','class'=>'save-btn' , 'url' => array('controller'=> 'ProductClientLicenses', 'action' => 'edit_license_renewal',$this->data['ProductClientLicense']['id']), 'loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form', 'loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'ProductClientLicenses', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?>
	</td>
  </tr>
</table>
</fieldset>
<?php echo $form->end();?>
 <script type="text/javascript">
function getProductLists(obj) {
	//alert(obj);
	var client_id=document.getElementById(obj).value;
	//clear_message();
	var url='?client_id='+client_id;
	//alert(data);
	new Ajax.Updater('load_products',root_base+'/Products/product_based_clients1/ProductClientLicense', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);},   onComplete:function(r){onloading_indicator(false);}, parameters:url, requestHeaders:['X-Update', 'load_products']});
}

function getLicenseType(type) {
/*
	if(type=='create')
	{
		document.getElementById('create_category').show();
		document.getElementById('create_category1').show();
		document.getElementById('create_category2').show();
		document.getElementById('create_category3').show();
		document.getElementById('create_category4').hide();
	}
	else 
	{
		$('create_category').style.display='none';
		$('create_category1').style.display='none';
		$('create_category2').style.display='none';
		$('create_category3').style.display='none';
	}
	if(type=='renewal')
	{
		document.getElementById('create_category4').show();
		document.getElementById('renewal_category').show();
		document.getElementById('renewal_category1').show();
	*/
		var client_ids=document.getElementById('client_id').value;
		var product_ids=document.getElementById('product_id').value;
	
	//alert(client_ids);
	var url='?client_id='+client_ids+'&product_id='+product_ids;
	new Ajax.Updater('renewal_category',root_base+'/ProductClientLicenses/client_product_based_expire_date/ProductClientLicense', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);},   onComplete:function(r){onloading_indicator(false);}, parameters:url, requestHeaders:['X-Update', 'renewal_category']});
	new Ajax.Updater('create_category4',root_base+'/ProductClientLicenses/client_product_based_product_key/ProductClientLicense', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);},   onComplete:function(r){onloading_indicator(false);}, parameters:url, requestHeaders:['X-Update', 'create_category4']});
	/*
	}
	else 
	{
		//$('create_category1').style.display='none';
		$('create_category4').style.display='none';
		$('renewal_category').style.display='none';
		$('renewal_category1').style.display='none';
	}
	*/
}
function getLicenseEdit(type) 
{
	if(type=='renewal')
	{
		
	}
}

</script>
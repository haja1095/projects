<script>jQuery.noConflict();</script>
  <?php echo $form->create('ProductClientLicense', array('action' => 'license_renewal','type' => 'file'));?>
  <fieldset class="form_start_fieldset">
<table class="table_add table_add1_tr"  border="0" cellspacing="1" cellpadding="1" style="width:100%;padding:5px; margin:10px auto; clear:both; " align="right">
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('License Renewal');?></div></td></tr>
			<tr class="add_row1">
				<td class="right_condent" colspan="3">
				<div id='message_block'> 
					<?php echo $this->element('message'); ?>  
				  </div></td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Client Name :');?></td>
				<td><?php echo $form->select('client_id',$clients_list,null,array('id'=>'client_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--','onchange'=>'getProductLists(this.id);'));?></td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Product Name :');?></td>
				<td><div id="load_products"><?php echo $form->select('product_id','',null,array('id'=>'product_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--', 'onChange'=>'return getLicenseType(this.value);'));?></div>
				<?php //echo $ajax->observeField('renewal_category',array('url'=>array('controller'=>'ProductClientLicense','action'=>'client_product_based_expire_date'),'before'=>"clear_message(); ",'loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update'=>'renewal_category'));?>
				</td>
			</tr>
			<!--
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('License Type :');?></td>
				<td>
				<?php $arrCategory=array('create'=>"New",'renewal'=>"Renewal"); ?>
				<?php echo $form->select('license_type',$arrCategory,null, array('class'=>'text_select_100','empty'=>'--Select--', 'onChange'=>'return getLicenseType(this.value);' )); ?>
				<?php //echo $ajax->observeField('renewal_category',array('url'=>array('controller'=>'ProductClientLicense','action'=>'client_product_based_expire_date'),'before'=>"clear_message(); ",'loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update'=>'renewal_category'));?>
			</td>
			</tr>
			-->
			<tr id="renewal_category">
			<!--
				<td align="right"><?php echo __('Last Expire Date :');?></td>
				<td>
				<div id="renewal_category">
				<?php echo $form->input('last_expiry_date',array('id'=>'last_expiry_date','type'=>'text','class'=>'text_input_100','readonly'=>true,'div'=>false,'error'=>false, 'label' => false)); ?>
				</div>
			</td>
			-->
			</tr>
			<!--
			<tr id="create_category">
				<td align="right"><?php echo __('Created Date :');?></td>
				<td><?php echo $form->input('created_date',array('type'=>'text','id'=>'created_date','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?>
				<script type="text/javascript">
					jQuery(function($){
						$('#created_date').datepicker({dateFormat:'dd-mm-yy', changeMonth: true, changeYear: true, minDate: -10000, maxDate: +0});
					});
		         </script>
				</td>
			</tr>
			-->
			<tr id="create_category4">
			<!--
				<td align="right"><?php echo __('Product Key File URL:');?></td>
				<td>
				<?php echo $form->input('product_key_file_url_get',array('id'=>'product_key_file_url_get', 'class'=>'text_ajax_100','readonly'=>true,'div'=>false,'error'=>false, 'label'=>false));?>
			</td>
			-->
			</tr>
			<tr id="renewal_category1">
			<!--
				<td align="right"><?php echo __('Renewal Date :');?></td>
				<td>
				<?php echo $form->input('next_renewal_date',array('id'=>'next_renewal_date','type'=>'text','class'=>'text_input_100','readonly'=>true,'div'=>false,'error'=>false, 'label' => false, 'onChange'=>'return getExpiretoRenewal(this.value);' )); ?>
			<script type="text/javascript">
					jQuery(function($){
						$('#next_renewal_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
					});
		    </script>
			</td>
			-->
			</tr>
			<tr>
				<td align="right"><?php echo __('Expire Date :');?></td>
				<td>
				<?php echo $form->input('expire_date',array('id'=>'expire_date','type'=>'text','class'=>'text_input_100','readonly'=>true,'div'=>false,'error'=>false, 'label' => false)); ?>
			<script type="text/javascript">
					jQuery(function($){
						$('#expire_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
					});
		    </script>
			</td>
			</tr>
			<!--
			<tr id="create_category3">
				<td align="right"><?php echo __('Product ID :');?></td>
				<td>
				<?php echo $form->input('product_ids',array('id'=>'product_ids','type'=>'text','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false)); ?>
			</td>
			</tr>
			<tr id="create_category2">
				<td align="right"><?php echo __('Product Key :');?></td>
				<td>
				<?php echo $form->input('product_key',array('id'=>'product_key','type'=>'text','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false)); ?>
			</td>
			</tr>
			<tr id="create_category1">
				<td align="right"><?php echo __('Product Key File:');?></td>
				<td>
				<?php echo $form->file('product_key_file_url',array('id'=>'product_key_file_url', 'type'=>'file'));?>
			</td>
			</tr>
			-->			
			<tr>
				<td align="right"><?php echo __('License Key :');?></td>
				<td><?php echo $form->input('license_key',array('id'=>'license_key','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr>
				<td align="right"><?php echo __('License Key File:');?></td>
				<td>
				<?php echo $form->file('license_key_file_url',array('id'=>'product_key', 'type'=>'file'));?>
			</td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td align="right">
				<?php  e($html->link('Close',array('controller' => 'ProductClientLicenses', 'action' =>'index'),array('class'=>'close-btn', 'title'=>'','escape' => false))); ?>
				</td>
				<td><?php //echo $ajax->submit('Save', array('div' => false, 'type'=>'submit','class'=>'save-btn' , 'url' => array('controller'=> 'ProductClientLicenses', 'action' => 'add_license'), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'ProductClientLicenses', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?>
				<?php  echo $form->submit('Save', array('div' => false, 'type'=>'submit','class'=>'save-btn' , 'url' => array('controller'=> 'ProductClientLicenses', 'action' => 'license_renewal'), 'loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'indexpagging', 'loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'ProductClientLicenses', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?>
				</td>
			</tr>
  
</table>
</fieldset>
<?php echo $form->end(); ?>

 <script>
 /*
 jQuery(function($) {
	$(document).ready(function(){
		$('#create_category').hide();
		$('#create_category1').hide();
		$('#renewal_category').hide();
		$('#renewal_category1').hide();
	});
});
*/	

 </script>
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
	new Ajax.Updater('renewal_category1',root_base+'/ProductClientLicenses/client_product_based_renewal_date/ProductClientLicense', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);},   onComplete:function(r){onloading_indicator(false);}, parameters:url, requestHeaders:['X-Update', 'renewal_category1']});
	/*
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
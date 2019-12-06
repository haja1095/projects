<script>jQuery.noConflict();</script>
<div class="main_condent"  align="right">

	<fieldset class="form_start_fieldset">
	<legend>Products Clients Licenses</legend>
	<table width="100%"  border="0" cellspacing="1" cellpadding="1" class="form_heading_table"  style="clear:both;" align="right">
	<?php
		echo $html->link('New License', array('action'=>'add_license'),array('title'=>'Add New Licese','update'=>'div_entry_form','class'=>'add_product_link')); echo "|";
		echo $html->link('License Renewal', array('action'=>'license_renewal'),array('title'=>'License Renewal','update'=>'div_entry_form','class'=>'add_product_link')); echo "|";
		//e($ajax->link('Add New',array('controller' => 'ProductClientLicenses', 'action' =>'add_license'),array('title'=>'Add New','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'class'=>'add_product_link','update' => 'div_entry_form','escape' => false))); echo "|";
	?>
		<a href="#" onClick="javascript:ShowHide('div_search_form');FormReset('div_search_form','<?php echo $model_name;?>IndexForm')"; title="Search" class="add_product_link">Search</a>
		<?php echo "|";
		e($ajax->link(' Reload',array('controller' => $this->viewPath, 'action' =>'index'),array('title'=>'Reload','before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'class'=>'add_product_link','update' => 'indexpagging','escape' => false)));																		        ?>
		<div align="center" id="busy_indicator" style="display:none;"><div><?php echo $this->Html->image('loading_32.gif', array('id' => 'busy_bg')); ?></div><div class="bg"></div></div>
	</table>
	<?php echo $ajax->div('div_entry_form'); ?>
	 <!--    ADD ,EDIT,View Form  -->
	 <?php echo $ajax->divEnd('div_entry_form'); ?>
	
		<div id="div_search_form" style="clear: both; display:none " >
	
	 <!-- Search Condent -->
		<?php echo $form->create('ProductClientLicense', array('controller'=> 'ProductClientLicenses','action'=>'index'));  ?>
		 <table width="100%"  border="1" cellspacing="1" cellpadding="1" class="table_filter" >
		 	<tr>
				<td width="20%" height="20" class="left_condent">Client Name </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php echo $form->select('client_name',$clients_list,null,array('id'=>'client_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--')); ?></td>
			</tr>
			<tr>
				<td width="20%" height="20" class="left_condent">Product Name </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php echo $form->select('product_name',$products_list,null,array('id'=>'product_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--'));?></td>
			</tr>
			<tr>
				<?php $arrCategory=array('create'=>"New",'renewal'=>"Renewal"); ?>
				<td width="20%" height="20" class="left_condent">License Type </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php //echo $form->input('license_type',array('error'=>false,'div'=>false,'label'=>false,'autocomplete'=>'off','class'=>'text_input_100'));?>
				<?php echo $form->select('license_type',$arrCategory,null, array('class'=>'text_select_100','empty'=>'--Select--' )); ?>
				</td>
			</tr>
			<tr>
				<td width="20%" height="20" class="left_condent">License Key </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php echo $form->input('license_key',array('error'=>false,'div'=>false,'label'=>false,'autocomplete'=>'off','class'=>'text_input_100'));?></td>
			</tr>
			<tr>
				<td width="14%" class="left_condent">Status</td>
				<td width="2%" class="center_condent">:</td>
				<td width="17%" class="right_condent"><?php echo $form->select('status',$statuses,null,array('class'=>'select_box_100','empty'=>'ALL'));?></td>
			</tr>
			<tr>
				<td width="22%"  class="center_condent" colspan="3"><?php echo $ajax->submit('Search', array('div' => false, 'class'=>'search-btn' , 'url' => array('controller'=> 'ProductClientLicenses', 'action' => 'index'), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update'=> 'indexpagging')); ?></td>
			</tr> 
		</table>
		<?php echo $form->end();?>
	<!-- Search Condent End -->
	</div> 
	
<?php echo $ajax->div('indexpagging',array('style'=>'clear:both;')); ?> 
 		 <!-- Pagination Condent -->		 
		<?php echo $this->element('product_client_licenses/index_pagging'); ?>
		<!-- Pagination Condent  End-->
	 	
<?php echo $ajax->divEnd('div_entry_form'); ?> 
 <!-- Grid Condent End --> 
 </fieldset>
	<?php $form->end(); ?>
	</div>

<script type="text/javascript">
function getProductLists(obj) {
	//alert(obj);
	var client_name=document.getElementById(obj).value;
	//clear_message();
	var url='?client_id='+client_name;
	//alert(data);
	new Ajax.Updater('load_products',root_base+'/Products/product_based_clients/ProductClientRelease', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);},   onComplete:function(r){onloading_indicator(false);}, parameters:url, requestHeaders:['X-Update', 'load_products']});
getSelectedReleaseLists();
}
</script>
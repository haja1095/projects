<script>jQuery.noConflict();</script>
<div class="main_condent"  align="right">

	<fieldset class="form_start_fieldset">
	<legend>Products Clients Releases</legend>
	<table width="100%"  border="0" cellspacing="1" cellpadding="1" class="form_heading_table"  style="clear:both;" align="right">
	<?php
		//echo $html->link('Add New(+)', array('action'=>'add_product'),array('title'=>'Add New Product','update'=>'div_entry_form','class'=>'link_add'));
		echo($ajax->link('Add New',array('controller' => $this->viewPath, 'action' =>'add_release'),array('title'=>'Add New','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'class'=>'add_product_link','update' => 'div_entry_form','escape' => false))); echo "|";
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
		<?php echo $form->create('ProductClientRelease', array('controller'=> 'ProductClientReleases','action'=>'add_release'));  ?>
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
				<td width="20%" height="20" class="left_condent">Release No </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php echo $form->input('release_no',array('error'=>false,'div'=>false,'label'=>false,'autocomplete'=>'off','class'=>'text_input_100' ));?></td>
			</tr>
			<tr>
				<td width="20%" height="20" class="left_condent">Release Version </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php echo $form->input('release_version',array('type'=>'text','error'=>false,'div'=>false,'label'=>false,'autocomplete'=>'off','class'=>'text_input_100'));?></td>
			</tr>
			<tr>
				<?php $last_releases=array('last_release'=>"Last Release",'last_month_releases'=>"Last Month Release", 'last_ten_releases'=>'Last 10 Releases', 'last_six_month_releases'=>'Last 6 Month Releases', 'custom'=>'Custom'); ?>
				<td width="20%" height="20" class="left_condent">Last Releases </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php echo $form->select('last_releases', $last_releases ,null,array('id'=>'last_releases','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--','onchange'=>'getCustomRelease(this.id);')); ?></td>
			</tr>
			<tr>
				<td width="20%" height="20" class="left_condent">Release From </td>
				<td width="2%" class="center_condent">:</td>
				<td width="23%" class="right_condent"><?php echo $form->input('release_date',array('type'=>'text','id'=>'release_date', 'disabled'=>true, 'error'=>false,'div'=>false,'label'=>false,'autocomplete'=>'off','class'=>'date_input'));?>
		 			<script type="text/javascript">
						jQuery(function($){
						$('#release_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true, minDate: -10000, maxDate: +365});
						});
					</script>  To  
					<?php echo $form->input('release_end_date',array('type'=>'text','id'=>'release_end_date','disabled'=>true,'error'=>false,'div'=>false, 'label'=>false, 'autocomplete'=>'off', 'class'=>'date_input', 'onchange'=>'getDateValidate(this.id);'));?>
			 		<script type="text/javascript">
						jQuery(function($){
						$('#release_end_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true, minDate: -10000, maxDate: +365});
						});
					</script>
				</td>
			</tr>
			<tr>
				<td width="14%" class="left_condent">Status</td>
				<td width="2%" class="center_condent">:</td>
				<td width="17%" class="right_condent"><?php echo $form->select('status',$statuses,null,array('class'=>'select_box_100','empty'=>'ALL'));?></td>
			</tr>
			<tr>
				<td width="22%"  class="center_condent" colspan="3"><?php echo $ajax->submit('Search', array('div' => false, 'class'=>'search-btn' , 'url' => array('controller'=> 'ProductClientReleases', 'action' => 'index'), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update'=> 'indexpagging')); 
				echo $form->submit('Reset', array('type'=>'reset', 'class'=>'search-btn', 'id'=>'reset_btn', 'div'=>false)); ?></td>
			</tr> 
		</table>
		<?php echo $form->end();?>
	<!-- Search Condent End -->
	</div> 
	
<?php echo $ajax->div('indexpagging',array('style'=>'clear:both;')); ?> 
 		 <!-- Pagination Condent -->		 
		<?php echo $this->element('product_client_releases/index_pagging'); ?>
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
/*
jQuery(function($) {
	$(document).ready(function(){
		$('#last_releases').onChange(function(){
			alert('hi');
		});
	});
});
*/
function getCustomRelease(obj) {
	var customRelease=document.getElementById(obj).value;
	if(customRelease=='custom') {
	document.getElementById('release_date').disabled = false;
	document.getElementById('release_end_date').disabled = false;
	}
	else {
	document.getElementById('release_date').disabled = true;
	document.getElementById('release_end_date').disabled = true;
	document.getElementById('release_date').value = '';
	document.getElementById('release_end_date').value = '';
	}
}
function getDateValidate(obj) {
	var StartDate = document.getElementById('release_date').value;
	var EndDate = document.getElementById(obj).value;

	if(StartDate>EndDate)
	{
		alert('Start Date Should be greater than End Date!');
		document.getElementById('release_date').value = '';
		document.getElementById('release_end_date').value = '';
		document.getElementById('release_date').focus;
	}
}
</script>

<script type="text/javascript">
function getSelectedReleaseLists(obj) {
	//alert(obj);
	var client_id=document.getElementById(obj).value;
	//clear_message();
	var url='?client_id='+client_id;
	//alert(product_id);
	new Ajax.Updater('load_releases',root_base+'/Products/product_based_clients/ProductClientRelease', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);},   onComplete:function(r){onloading_indicator(false);}, parameters:url, requestHeaders:['X-Update', 'load_releases']});
	
}

/*
function getLastReleases(obj) {
	var release_name = document.getElementById(obj).value;
	var url='?release_name='+release_name;
	new Ajax.Updater('last_releases',root_base+'/ProductClientReleases/product_client_releases/ProductClientRelease', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);},   onComplete:function(r){onloading_indicator(false);}, parameters:url, requestHeaders:['X-Update', 'last_releases']});
}
*/
</script>
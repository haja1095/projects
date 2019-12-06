<script>jQuery.noConflict();</script>
<div class="main_condent"  align="right">

	<fieldset class="form_start_fieldset">
	<legend>Product Client View</legend>
	
		<div id="div_search_form" style="clear: both; " >
<style>
.table_filter tr td
{
	width:70px;
}
</style>
	 <!-- Search Condent -->
		<?php echo $form->create('ProductClientView', array('controller'=> 'product_client_views','action'=>'product_client_report'));  ?>
		 <table width="100%"  border="1" cellspacing="1" cellpadding="1" class="table_filter" >
			 <tr>
				<td width="20%" height="35" class="left_condent">Select Products </td>
				<td width="2%" class="center_condent">:</td>
				
					<?php 
						$count=0;
						//pr($products_list); exit;
						foreach ($products_list as $product_id => $product_name) {
						 $id = $product_id;
						 $product_name = $product_name;
						 if ($count%5 == 0)
						 {
							//echo "<tr>";
						 }
						$count+=1;
						 echo "<td style='width:70px;'>";
						// echo $form->checkbox('product_list.'.$id,array('name'=>'[client][product]['.$id.']'));
						 echo $form->input('product_list.'.$id, array('type' => 'checkbox', 'id'=>'products_lists[]', 'checked'=>'false', 'div'=>false,'error'=>false, 'label' => $product_name));
						 echo "</td>";
						 if ($count%5 == 0)
						 {
							//echo "</tr>";
						 }
						}
					?>
				
			</tr>
			<tr>
				<td width="22%"  class="center_condent" colspan="3"><?php echo $form->submit('Report', array('div' => false,'onclick'=>'formblank()', 'class'=>'search-btn')); ?></td>
			</tr> 
		</table>
		<?php echo $form->end();?>
	<!-- Search Condent End -->
	</div> 
 <!-- Grid Condent End --> 
 </fieldset>
	<?php $form->end(); ?>
	</div>
<script type="text/javascript">
function formblank()
{
	 var formelements = document.getElementById("ProductClientViewProductClientReportForm");
	 formelements.setAttribute("action","product_client_views/product_client_report");
	 formelements.setAttribute("target","Report");
	 exportwindow = window.open("", "Report", "width=800,height=600,resizable=yes");
	
	 formelements.submit();
	 //window.open(this.href);
	//document.getElementById("ProductClientViewProductClientReportForm").submit();
	//document.getElementById("ProductClientViewProductClientReportForm").action='product_client_report';
	//document.getElementById("ProductClientViewProductClientReportForm").target='_blank';
}
</script>
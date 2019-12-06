<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
	<?php echo $this->Html->charset(); ?>
	
	<?php
			Configure::load('ecampus_config');
			Configure::write('Config.language', Configure::read('Site.locale')); 	
			 $Site = Configure::read('Site');?>
	<title>
		Products Test 
	</title>
	<?php
		echo $this->Html->css('style.css');
		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('default.js');
	 ?>
</head>
<body oncontextmenu="return false;" ondragstart="return false;" ondrop="return false;">
	
<!-- Header -->
<div id="header"  style="clear:both;">
	<!-- Shell -->
	<div class="shell">
		<!-- Logo -->
		
		<!-- end Navigation -->
		<div class="cl">&nbsp;</div>
	</div>
	<!-- end Shell -->		
</div>
<div id="sub_header_shell">&nbsp;</div>
<!-- end Header -->	

<?php
if(empty($clients)): //checks whether the fetched data's contains values or not by $tasks variable.
?>
	There are no tasks available.<br>
<?php
	echo $html->link('Add New Client', array('action'=>'add'), array('style'=>'text-decoration:none;'));
else: //if data exists, then display all the data..
	?>
	<div class="main_condent" style="clear:both;">
	<div id="navigate_pane">
	<ul>
		<li class="navigate_pane_heading">Navigate Panel</li>
		<li><?php echo $html->link('Products Entry',array('controller'=>'products','action'=>'index')); ?></li>
		<li><?php echo $html->link('Clients Entry',array('controller'=>'clients','action'=>'index')); ?></li>
		<li><?php echo $html->link('Products Report',array('controller'=>'products','action'=>'index')); ?></li>
		<li><?php echo $html->link('Clients Report',array('controller'=>'clients','action'=>'index')); ?></li>
	</ul>
	</div>
	<?php
		echo $form->create('Client', array('action'=>'index')); 
	?>
	<fieldset class="form_start_fieldset">
	<legend>Clients</legend>
	<table width="100%"  border="0" cellspacing="1" cellpadding="1" class="form_heading_table"  style="clear:both;">
	<?php
		//echo $html->link('Add New(+)', array('action'=>'add_product'),array('title'=>'Add New Product','update'=>'div_entry_form','class'=>'link_add'));//HTML form link to index pages
	?>
	</table>
	<div id="div_entry_form" style="clear: both;">
		<table class="form_entry_product"  border="0" cellspacing="1" cellpadding="1">
			<tr>
				<td><?php echo __('Client Name');?></td>
				<td><?php echo $form->input('client_name',array('id'=>'client_name','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr>
				<td><?php echo __('Client Address');?></td>
				<td><?php echo $form->input('client_address',array('id'=>'client_address','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr>
				<td><?php echo __('Client Mobile');?></td>
				<td><?php echo $form->input('client_mobile',array('id'=>'client_mobile','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr>
				<td align="right"><?php echo $form->submit('Save',array('class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
				<td><?php echo $form->submit('Reset',array('class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false,'url' => array('controller'=>'clients', 'action'=>'add_product'))); ?></td>
			</tr>
		</table>
	</div>
	<table width="100%"  border="0" cellspacing="1" cellpadding="1" class="form_heading_table"  style="clear:both;">
	<tr>
	<th><?php __('Product Name') ?></th>
	<th><?php __('Product Description') ?></th>
	<th><?php __('Client Mobile') ?></th>
	<th><?php __('Created Date') ?></th>
	<th><?php __('Created By') ?></th>
	<th>Action</th>
	</tr>
	<?php echo $form->end(); ?>
<?php foreach($clients as $client): ?>
	<tr id="<?php echo $client['Client']['id'] ?>">
	<td><?php echo $client['Client']['client_name'] ?></td>
	<td><?php echo $client['Client']['client_address'] ?></td>
	<td><?php echo $client['Client']['client_mobile'] ?></td>
	<td><?php echo $client['Client']['created_date'] ?></td>
	<td><?php echo $client['Client']['created_by'] ?></td>
	<td><?php echo $html->link('View', array('action'=>'view',  $client['Client']['id']), array('style'=>'text-decoration:none;')); ?> |
		<?php echo $html->link('Edit', array('action'=>'edit',  $client['Client']['id']), array('style'=>'text-decoration:none;')); ?> | <?php echo $html->link('Delete', array('action'=>'delete',  $client['Client']['id']), array('style'=>'text-decoration:none;','confirm'=>'Are you sure')); ?>
	</td>
	</tr>
<?php endforeach; ?>
	</table>
	</fieldset>
	<?php $form->end(); ?>
	</div>
<?php
endif;
?>
<!-- Footer -->
<div id="footer">	
 
	<!-- Shell -->
	<div class="shell">
	<p align="center">
	 Designed and Developed by ecampus-KGfSL-2015.
	</p>
	</div>
	<!-- end Shell -->
</div>

<!-- end Footer -->
</body>
<script>
$(document).ready(function(){
	$('.link_add').click(function(){
		//alert('hi');
		
	});
});
</script>
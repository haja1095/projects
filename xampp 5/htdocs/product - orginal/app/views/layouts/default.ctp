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
 <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
 	<?php
	/*
	if($session->check('MstStudentUser'))
	{
	echo "<script>top.location = '".$this->base."/mst_users/logout"."'</script>";
	}
	Configure::load('ecampus_config');
	Configure::write('Config.language', Configure::read('Site.locale')); 	
	$Site = Configure::read('Site');?>
	*/
	?>
	<title>
	Products
	<?php echo ' - '.$title_for_layout; ?>
	</title>
	<link rel="icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" /> 
	<?php
	/* defauly layout stylesheet*/
	echo $this->Html->css('/css/layout.css');
	/* defauly layout stylesheet*/
	echo $this->Html->Script('/js/jQuery.js');
	echo $this->Html->Script('/js/jquery.min.js');
	echo $this->Html->Script('/js/jquery-1.7.2.min.js');
	echo $this->Html->Script('/js/prototype.js');
	echo $this->Html->Script('/js/common.js');
	/* Datepicker helpers */
	echo $this->Html->css('/css/calender/smoothness/jquery-ui-1.8.5.custom.css'); 		
	echo $this->Html->Script('/js/calender/jquery-1.4.2.min.js');
	echo $this->Html->Script('/js/calender/jquery-ui-1.8.5.custom.min.js');
	/* Datepicker helpers */
	//echo $this->Html->Script('/js/jquery-migrate-1.2.1.js');
	
	//echo $this->Html->Script('/js/jquery-1.9.0.js');
	//echo $this->Html->Script('/js/jQuery11.js');
	//echo $this->Html->Script('/js/jquery-UI.js');
	
	//echo $this->Html->Script('/jquery_library/jquery-1.4.4.js');
	//echo $this->Html->Script('/jquery_library/jquery-ui-1.8.12.custom/js/jquery-ui-1.8.12.custom.min.js');
	
	?>
<script type="text/javascript">
	var root_base='<?php echo $this->base;?>';
</script>
</head>
<body> 
<!-- Header -->
<div id="header"  style="clear:both;">

<div id="product_manager"><p>PRODUCT MANAGER</p></div>
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
<div id="navigate_pane">
	<ul>
		<li class="navigate_pane_heading">Navigate Panel</li>
		<li><?php echo $html->link('Products',array('controller'=>'products','action'=>'index'), array('onclick'=>'navigate_pane_active(this)')); ?></li>
		<li><?php echo $html->link('Clients',array('controller'=>'clients','action'=>'index')); ?></li>
		<li><?php echo $html->link('Release Mode',array('controller'=>'release_modes','action'=>'index')); ?></li>
		<li><?php echo $html->link('Release Entry',array('controller'=>'product_client_releases','action'=>'index')); ?></li>
		<li><?php echo $html->link('License Renewal',array('controller'=>'product_client_licenses','action'=>'index')); ?></li>
		<li><?php echo $html->link('Product Client View',array('controller'=>'product_client_views','action'=>'index')); ?></li>
	</ul>
	</div>
	 <?php echo $content_for_layout;?>
	 
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
</html>
<script type="text/javascript">
  function navigate_pane_active(elem) {
    var a = document.getElementsByTagName('a')
    for (i = 0; i < a.length; i++) {
        a[i].classList.remove('navigate_pane_selected');
    }
    elem.classList.add('navigate_pane_selected');
}
/*
$(function(){
$('#navigate_pane ul li a').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    });
});
*/
</script>
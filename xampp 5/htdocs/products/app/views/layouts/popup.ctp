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
	<?php echo $this->Html->charset(); ?>
	
	<?php
			Configure::load('ecampus_config');
			Configure::write('Config.language', Configure::read('Site.locale')); 	
			$Site = Configure::read('Site');?>
	<title>
		<?php __('site_name'); ?>
		<?php echo $Site['version']; ?>
		<?php echo ' - '.$title_for_layout; ?>
	</title>
	<?php
	 
		echo $this->Html->meta('icon');
		//  echo $this->Html->script('jquery');
		echo $this->Javascript->link('/js/prototype.js');
		
		/* included for form */
		echo $this->Javascript->link('/js/common.js');

	?>
	<script type="text/javascript">
	var root_base='<?php echo $this->base;?>';
	 
	</script>
</head>
<body>
<div id="body-page">  
		<!-- Condent for Layout start -->				 
    
        <fieldset  id='condent_layout' style=" height:auto; overflow-x:scroll;  width:92%; float:left"> 
		
		  <?php echo $content_for_layout;?>
		 
        </fieldset>	 
		<!-- Condent for Layout edn --> 
		
  </div>
  <!-- end main condent -->	
 
</body>
</html>
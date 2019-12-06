<?php
/**
 * Missing SimpleTest error page.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/1.3/en/The-Manual/Common-Tasks-With-CakePHP/Testing.html>
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/1.3/en/The-Manual/Common-Tasks-With-CakePHP/Testing.html CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.cake.tests.libs
 * @since         CakePHP(tm) v 1.2.0.4433
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
?>
<?php include dirname(__FILE__) . DS . 'header.php'; ?>
<div id="content">
	<h2>SimpleTest is not installed</h2>
	<p>You must install SimpleTest to use the CakePHP(tm) Test Suite.</p>
	<p>SimpleTest can be placed in one of the following directories.</p>
	<ul>
		<li><?php echo CAKE; ?>vendors </li>
		<li><?php echo APP_DIR . DS; ?>vendors</li>
	</ul>
	<p>Changes made in SimpleTest v1.1 are incompatible with CakePHP. Please ensure you download SimpleTest v1.0.x</p>
	<p><a href="http://simpletest.org/en/download.html" target="_blank">Download SimpleTest</a></p>
</div>
<?php include dirname(__FILE__) . DS . 'footer.php'; ?>

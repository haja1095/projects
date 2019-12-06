<?php echo $form->create('ProductClientLicense');?>
<tr id="create_category4">
				<td align="right" height="30"><?php echo __('Product Key File : ');?></td>
				<td>
				<?php
				if(isset($client_product_product_key) && !empty($client_product_product_key)) {
				foreach($client_product_product_key as $key_file) {
				//$product_key_file = explode('/', $key_file);
				//$key_file=date('Y-m-d',strtotime($key_file));
				
				}
				$product_key_file = explode('/', $key_file);
				 echo $form->label('product_key_file',isset($product_key_file[1])?$product_key_file[1]:'-',array('name'=>'product_key_file'.$key_file,'class'=>'text_ajax_100','readonly'=>true,'div'=>false,'error'=>false));
				}
				
				?>
			</td>
</tr>
<?php echo $form->end();?>

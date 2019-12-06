<?php echo $form->create('ProductClientLicense');?>
<tr id="renewal_category">
				<td align="right" height="22"><?php echo __('Last Expire Date : ');?></td>
				<td>
				<?php
				if(isset($client_product_expire) && !empty($client_product_expire)) {
				foreach($client_product_expire as $expdate) {
				$expire_date=date('Y-m-d',strtotime($expdate));
				 echo $form->label('last_expiry_date',$expire_date,array('name'=>'last_expiry_date'.$expire_date,'class'=>'text_ajax_100','readonly'=>true,'div'=>false,'error'=>false));
				}
				}
				else {
				echo $form->label('last_expiry_date','-',array('class'=>'text_ajax_100','readonly'=>true,'div'=>false,'error'=>false));
				}
				?>
			</td>
</tr>
<?php echo $form->end();?>

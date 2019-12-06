<?php echo $form->create('ProductClientLicense');?>
<tr id="renewal_category1">
				<td align="right" height="22"><?php echo __('Renewal Date : ');?></td>
				<td>
				<?php
				if(isset($client_product_renewal) && !empty($client_product_renewal)) {
				foreach($client_product_renewal as $renew_date) {
				$date = strtotime($renew_date);
				$renewal_date = strtotime("+1 day", $date);
				$renewal_date = date('Y-m-d', $renewal_date);
				 echo $form->input('next_renewal_date', array('id'=>'renewal_date','type'=>'text', 'class'=>'text_input_100','readonly'=>true,'div'=>false,'error'=>false, 'label'=>false, 'value'=>$renewal_date));
				}
				?>
				<script type="text/javascript">
					jQuery(function($){
						$('#renewal_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
					});
		    	</script>
				<?php
				}
				else {
				echo $form->label('next_renewal_date','-',array('class'=>'text_input_100','readonly'=>true,'div'=>false,'error'=>false));
				}
				?>
			</td>
</tr>
<?php echo $form->end();?>

  <?php echo $form->create('ProductClientRelease', array('action' => 'add_release'));?>
<table class="table_add"  border="0" cellspacing="1" cellpadding="1" style="width:90%;padding:5px; margin:10px auto; clear:both; " align="center">
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('New Release');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
			<tr class="add_row1">
				<td class="right_condent" colspan="3">
				<div id='message_block'> 
					<?php echo $this->element('message'); ?>  
				  </div></td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Client Name :');?></td>
				<td><?php echo $form->select('client_id',$clients_list,null,array('id'=>'client_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--','onchange'=>'getProductLists(this.id);')); ?>
				<?php //echo $ajax->observeField('ProductClientId',array('url'=>array('controller'=>'ProductClientReleases','action'=>'product_based_client',$model_name),'before'=>"clear_message();",'loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update'=>'load_products'));?>
				</td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Product Name :');?></td>
				<td><div id="load_products"><?php echo $form->select('product_id',$products_list,null,array('id'=>'product_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--'));?></div>
				</td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Release Mode :');?></td>
				<td><div id="load_release"><?php echo $form->select('release_location',$releases_list,null,array('id'=>'release_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--'));?></div>
				</td>
			</tr>
			<tr>
				<td align="right"><?php echo __('Release No :');?></td>
				<td><?php echo $form->input('release_no',array('id'=>'release_no','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Release Date :');?></td>
				<td>
				<?php echo $form->input('release_date',array('id'=>'release_date','type'=>'text','class'=>'text_input_100','readonly'=>true,'error'=>false,'label' => false )); ?>
				 <script type="text/javascript">
						jQuery(function($){
							$('#release_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
							});
				</script>
				</td>
			</tr>
			
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Release Version :');?></td>
				<td><?php echo $form->input('release_version',array('type'=>'text','id'=>'release_version','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Approved Date :');?></td>
				<td><?php echo $form->input('approved_date',array('id'=>'approved_date','type'=>'text','class'=>'text_input_100','readonly'=>true,'error'=>false, 'label' => false )); ?>
				<script type="text/javascript">
					jQuery(function($){
						$('#approved_date').datepicker({dateFormat:'yy-mm-dd', changeMonth: true, changeYear: true});
						});
				</script>
				</td>
			</tr>
			<tr>
				<td align="right"><?php echo __('Approved By :');?></td>
				<td><?php echo $form->input('approved_by',array('id'=>'approved_by','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td align="right"><input type="button" value="Close" class="close-btn" onClick="javascript:hide_entry_form();"></td>
				<td class="right_condent"><?php echo $ajax->submit('Save', array('div' => false, 'type'=>'submit','class'=>'save-btn' , 'url' => array('controller'=> 'ProductClientReleases', 'action' => 'add_release'), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'ProductClientReleases', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?></td>
			</tr>
  
</table>
<?php echo $form->end();?>
 
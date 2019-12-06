  <?php
  echo $form->create('Client', array('action' => 'add_client'));?>
<table class="table_add"  border="0" cellspacing="1" cellpadding="1" style="width:90%;padding:5px; margin:10px auto; clear:both; " align="center">
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('New Client');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
			<tr class="add_row1">
				<td class="right_condent" colspan="3">
				<div id='message_block'> 
					<?php echo $this->element('message'); ?>  
				  </div></td>   
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Client Name :');?></td>
				<td><?php echo $form->input('client_name',array('id'=>'client_name','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr>
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Client Mobile :');?></td>
				<td><?php echo $form->input('client_mobile',array('type'=>'text','id'=>'client_mobile','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false,'onkeypress'=>'return ValidateNumber(event);','maxlength'=>10 )); ?></td>
			</tr>
			<tr>
				<td align="right"><?php echo __('Client Address :');?></td>
				<td><?php echo $form->textarea('client_address',array('id'=>'client_address','class'=>'text_input_100','rows'=>'3','cols'=>'20','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td align="right" rowspan="1"><?php echo __('Select Product :');?></td> <!-- Multiple checkboxes select here-->
				<td>
				<tr>
				<td colspan="10">
						<div id='product_list'>
							<table width="65%" align="right">
								<?php 
								$count=0;
								foreach ($product_list as $product_list) {
								 $id = $product_list['Product']['id'];
								 $product_name = $product_list['Product']['product_name'];
								if ($count%6 == 0){
								echo "<tr>";
								}$count+=1;
								
								echo "<td>";
								echo $form->input('product_list.'.$id, array('type' => 'checkbox', 'id'=>'products_lists[]', 'div'=>false,'label'=>false,'error'=>false));
								echo $product_name."</td>";
								
								if ($count%6 == 0){
								echo "</tr>";
								}
								}?>
							</table>
						</div>
					</td>
				</tr>
				<?php
				// in view file
				
				
				?>
				</td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td align="right"><input type="button" value="Close" class="close-btn" onClick="javascript:hide_entry_form();"></td>
				<td class="right_condent"><?php echo $ajax->submit('Save', array('div' => false, 'type'=>'submit','class'=>'save-btn' , 'url' => array('controller'=> 'clients', 'action' => 'add_client'), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'clients', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?></td>
			</tr>
  
</table>
<?php echo $form->end();?>
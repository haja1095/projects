  <?php echo $form->create('ReleaseMode', array('action' => 'add_release'));?>
<table class="table_add"  border="0" cellspacing="1" cellpadding="1" style="width:90%;padding:5px; margin:10px auto; clear:both; " align="center">
<tr class='sub_form_heading' ><td colspan="3" ><div style="clear:both; float:left"><?php __('New Release Mode');?></div><div style="float:right"><input type="button" value=" &nbsp;" class="form-close-btn" onClick="javascript:hide_entry_form();"></div></td></tr>
			<tr class="add_row1">
				<td class="right_condent" colspan="3">
				<div id='message_block'> 
					<?php echo $this->element('message'); ?>  
				  </div></td>   
			</tr> 
			<tr>	
				<td align="right"><font color="#F41B0F">*</font><?php echo __('Release Name :');?></td>
				<td><?php echo $form->input('release_name',array('id'=>'release_name','class'=>'text_input_100','div'=>false,'error'=>false, 'label' => false )); ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td align="right"><input type="button" value="Close" class="close-btn" onClick="javascript:hide_entry_form();"></td>
				<td class="right_condent"><?php echo $ajax->submit('Save', array('div' => false, 'type'=>'submit','class'=>'save-btn' , 'url' => array('controller'=> 'release_modes', 'action' => 'add_release'), 'before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);", 'update'=> 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'release_modes', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))) )); ?></td>
			</tr>
  
</table>
<?php echo $form->end();?>
 
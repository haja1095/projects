<?php
$this->Paginator->options(array(
    'update' => 'indexpagging',
	'url'=>array('controller'=>'release_modes', 'action'=>'index'), 
    'evalScripts' => true,
	'before'=>"javascript:onloading_indicator(true);",
	 'complete'=>"javascript:onloading_indicator(false);",
   // 'loading' => $this->Js->get('#busy-indicator')->effect('fadeIn', array('buffer' => false)),
  //  'complete' => $this->Js->get('#busy-indicator')->effect('fadeOut', array('buffer' => false)),
)); ?>
		<div id='message_block'> 
		<?php echo $this->element('message'); ?>
		</div>
	   <div>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_list" align="right">
            <tr class="row_head" >
              <td width="9%"   class="sno_field"><?php echo __('SNo');?></td>
              <td width="20%"  class="text_field"><?php echo $paginator->sort( __('Release Name',true) ,'release_name');?></td>
			  <td width="15%"  class="text_field"><?php  __('Status'); ?></td>
              <td colspan="10"  class="action_field"><?php echo __('Action');?></td>
            </tr>
			<?php
			  $params=$paginator->params();
			 if(isset($ReleaseModes) && !empty($ReleaseModes))
			  { 
			   $sno=(($paginator->counter())*$params['defaults']['limit'])-($params['defaults']['limit']-1);
			   $row_no=1;
  					foreach ($ReleaseModes as $ReleaseMode):
						if($row_no%2 == 0)
							echo "<tr class=row0>";
						else
							echo "<tr class=row1>";							
			   ?>
              <td class="sno_field"><?php echo $sno;?> </td>
              <td class="text_field"><?php echo $ReleaseMode['ReleaseMode']['release_name'];?></td>
              <td class="text_field"><?php echo ($ReleaseMode['ReleaseMode']['status']==1?'Active':'Inactive');?></td>        
              <td class="action_field"  width="3%">
			   <div class="link_edit"><?php e($ajax->link( 'View',array('controller' => 'release_modes', 'action' =>'view', $ReleaseMode['ReleaseMode']['id']),array('title'=>'View','before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update' => 'div_entry_form','escape' => false))); ?></div>						
			    </td>
			  <td class="action_field"  width="3%">
			    <div class="link_view"><?php e($ajax->link( 'Edit',array('controller' => 'release_modes', 'action' =>'edit', $ReleaseMode['ReleaseMode']['id']),array('title'=>'Edit','before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update' => 'div_entry_form','escape' => false))); ?></div>						
			    </td>
			    <td class="action_field"  width="3%">
			   <div class="link_delete"> <?php e($ajax->link('Delete',array('controller'=> 'release_modes', 'action' =>'delete', $ReleaseMode['ReleaseMode']['id']),array('title'=>'Delete','before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update' => 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'release_modes', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))),'escape' => false),'Do you want to Delete This Record?')); ?></div>						
			
			    </td>             
            </tr>
			  <?php $row_no++;  $sno++;
			    endforeach;  
			}
			else
			{ ?>
			  <tr class='norecord_found'><td colspan="10"><?php __('no records found');?></td></tr>
			<?php }
			?>
           
        </table>
		</div> 
	<div class="grid_footer" >
 		<table width="100%"  border="0" cellspacing="1" cellpadding="1" class="paginator_table">
			 <?php if($params['pageCount']>1)
			 { ?>
			  <tr>
				<td width="30%">Page <?php echo $paginator->counter();echo "  | Total Records : ".$params['count']?> </td>
				<td width="70%"><div align="right"><?php echo $paginator->first($this->Html->image('pagination_1_first.png',array('class'=>'pag_first')),array('escape'=>false)); ?>&nbsp;
				<?php echo $paginator->prev($this->Html->image('pagination_1_previous.png',array('class'=>'pag_prev')),array('escape'=>false)); ?>&nbsp; 
				<?php echo $paginator->numbers(array('separator'=>' | ')); ?>&nbsp;
	    		  <?php echo $paginator->next($this->Html->image('pagination_1_next.png',array('class'=>'pag_next')),array('escape'=>false)); ?>&nbsp;
				 <?php echo $paginator->last($this->Html->image('pagination_1_last.png',array('class'=>'pag_last')),array('escape'=>false)); ?> 			
				 </div></td>
			  </tr>
			  <?php }else {?>
			  <tr><td>&nbsp;</td></tr>
			  <?php }?>
 	 	</table> 	  
	 </div>
	  <?php echo $js->writeBuffer(); ?>
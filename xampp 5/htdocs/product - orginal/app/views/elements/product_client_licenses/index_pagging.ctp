<?php
$this->Paginator->options(array(
    'update' => 'indexpagging',
	'url'=>array('controller'=>'ProductClientLicenses', 'action'=>'index'), 
    'evalScripts' => true,
	'before'=>"javascript:onloading_indicator(true);",
	 'complete'=>"javascript:onloading_indicator(false);",
)); ?>
		<div id='message_block'> 
		<?php echo $this->element('message'); ?>
		</div>
	   <div>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_list" align="right">
            <tr class="row_head" >
              <td width="9%"   class="sno_field"><?php echo __('SNo');?></td>
			  <td width="10%"  class="text_field"><?php echo $paginator->sort( __('Client Name') ,'ProductClientLicense.client_id');?></td>
			  <td width="12%"  class="text_field"><?php echo $paginator->sort( __('Product Name') ,'ProductClientLicense.product_id');?></td>
			  <td width="7%"  class="text_field"><?php echo $paginator->sort( __('Type') ,'ProductClientLicense.license_type');?></td>
              <td width="11%"  class="text_field"><?php echo $paginator->sort( __('License Key') ,'ProductClientLicense.license_key');?></td>
			  <td width="10%"  class="text_field"><?php  echo __('Product Key File');?></td>
			  <td width="10%"  class="text_field"><?php  echo __('License Key File');?></td>
			  <td width="5%"  class="text_field"><?php  __('Status'); ?></td>
              <td colspan="10"  class="action_field"><?php echo __('Action');?></td>
            </tr>
			<?php
			  $params=$paginator->params();
			 if(isset($ProductClientLicenses) && !empty($ProductClientLicenses))
			  { 
			   $sno=(($paginator->counter())*$params['defaults']['limit'])-($params['defaults']['limit']-1);
			   $row_no=1;
  					foreach ($ProductClientLicenses as $ProductClientLicense):
					$client_id = $ProductClientLicense['ProductClientLicense']['client_id'];
					$product_id = $ProductClientLicense['ProductClientLicense']['product_id'];
						if($row_no%2 == 0)
							echo "<tr class=row0>";
						else
							echo "<tr class=row1>";							
			   ?>
              <td class="sno_field"><?php echo $sno;?> </td>
			  <td class="text_field"><?php echo $ProductClientLicense['Client']['client_name'];?></td>
			  <td class="text_field"><?php echo $ProductClientLicense['Product']['product_name']; ?></td>
			  <td class="text_field"><?php echo ($ProductClientLicense['ProductClientLicense']['license_type'])=='create'?'New':'Renewal'; ?></td>
              <td class="text_field"><?php echo ($ProductClientLicense['ProductClientLicense']['license_key'])==''?'-':$ProductClientLicense['ProductClientLicense']['license_key']; ?></td>
			  <?php //echo ($ProductClientLicense['ProductClientLicense']['created_date'])==''?'-':date('Y-m-d',strtotime($ProductClientLicense['ProductClientLicense']['created_date'])); ?>
			  <?php //echo ($ProductClientLicense['ProductClientLicense']['expire_date'])==''?'-':date('Y-m-d',strtotime($ProductClientLicense['ProductClientLicense']['expire_date'])); ?>
			  <td class="action_field"  width="5%">
			   <?php
			   if(isset($ProductClientLicense['ProductClientLicense']['product_key_file_url']))
			   {
			   ?>
			   <div class="download_btn">
			   <?php e($html->link('&nbsp;',array('controller' => $this->viewPath, 'action' =>'product_key_file_download', $ProductClientLicense['ProductClientLicense']['id']),array('title'=>'Download Product Key','escape'=>false))); ?>
			   </div>
			   <?php } else { echo "-"; } ?>
			  </td>
			  <td class="action_field" width="5%">
			   <?php
			   if(isset($ProductClientLicense['ProductClientLicense']['license_key_file_url']))
			   {
			   ?>
			   <div class="download_btn">
			   <?php e($html->link('&nbsp;',array('controller' => $this->viewPath, 'action' =>'license_key_file_download', $ProductClientLicense['ProductClientLicense']['id']),array('title'=>'Download License Key','escape'=>false))); ?>
			   </div>
			   <?php } else { echo "-"; } ?>
			  </td>
			  <td class="text_field"><?php echo ($ProductClientLicense['ProductClientLicense']['status']==1?'Active':'Inactive');?></td>
              <td class="action_field"  width="3%">
			  <div class="link_view"><?php e($ajax->link( 'View',array('controller' => 'ProductClientLicenses', 'action' =>'view', $ProductClientLicense['ProductClientLicense']['id']),array('title'=>'View','before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update' => 'div_entry_form','escape' => false))); ?>
			  </div>
			    </td>
			  <td class="action_field"  width="3%">
			    <div class="link_edit">
				<?php 
				if($ProductClientLicense['ProductClientLicense']['license_type']=='create') {
				echo $html->link('Edit', array('action'=>'edit_license', $ProductClientLicense['ProductClientLicense']['id']),array('title'=>'Edit New License','update'=>'div_entry_form','class'=>'add_product_link','escape'=>false));
				}
				else {
				echo $html->link('Edit', array('action'=>'edit_license_renewal', $ProductClientLicense['ProductClientLicense']['id']),array('title'=>'Edit License Renewal','update'=>'div_entry_form','class'=>'add_product_link','escape'=>false));
				}

				//e($ajax->link( 'Edit',array('controller' => 'ProductClientLicenses', 'action' =>'edit', $ProductClientLicense['ProductClientLicense']['id']),array('title'=>'Edit','before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update' => 'div_entry_form','escape' => false))); ?></div>						
			    </td>
			    <td class="action_field"  width="3%">
				<?php if($ProductClientLicense['ProductClientLicense']['is_deletable'] == '1') { ?>
			   <div class="link_delete"> <?php e($ajax->link('Delete',array('controller'=> 'ProductClientLicenses', 'action' =>'delete', $ProductClientLicense['ProductClientLicense']['id']),array('title'=>'Delete','before'=>'clear_message();','loading'=>"javascript:onloading_indicator(true);",'complete'=>"javascript:onloading_indicator(false);",'update' => 'div_entry_form','loaded'=>( $ajax-> remoteFunction(array('url' => array('controller' => 'ProductClientLicenses', 'action' =>'index'), 'update' => 'indexpagging', 'frequency' => 5))),'escape' => false),'Do you want to Delete This Record?')); ?></div>
			<?php } ?>
			    </td>             
            </tr>
			  <?php $row_no++;  $sno++;
			    endforeach;  
			}
			else
			{ ?>
			  <tr class='norecord_found'><td colspan="10"><?php __('No records found');?></td></tr>
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
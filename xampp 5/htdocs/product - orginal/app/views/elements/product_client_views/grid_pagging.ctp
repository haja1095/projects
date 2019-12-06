<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_list" align="left" style="padding:20px 20px;">
            <tr class="row_head">
              <td width="10%"   class="sno_field"><?php echo __('SNo');?></td>
              <td width="25%"  class="text_field"><?php echo __('Client Name',true);?></td>
			  <td width="25%"  class="text_field"><?php echo __('Product Name',true);?></td>
			  <td width="20%"  class="text_field"><?php  echo __('Last Release Date',true);?></td>
			  <td width="20%"  class="text_field"><?php  echo __('Last Release Version',true);?></td>
            </tr>
			<?php
			 if(isset($result) && !empty($result))
			  { 
			  $sno=1;
			   $row_no=1;
  					foreach ($result as $value):
					foreach ($value as $product_details):
						if($row_no%2 == 0)
							echo "<tr class=row0>";
						else
							echo "<tr class=row1>";							
			   ?>
              <td class="sno_field" align="center"><?php echo $sno;?> </td>
              <td class="text_field"><?php echo $product_details['client_name'];?></td>
			  <td class="text_field"><?php echo $product_details['product_name'];?></td>
			  <td class="text_field" align="center"><?php echo date('d F Y', strtotime($product_details['release_date'])); ?></td>
              <td class="text_field"><?php echo $product_details['release_version'];?></td>  
            </tr>
			  <?php $row_no++;  $sno++;
			    endforeach;  
			endforeach;
			}
			else
			{ ?>
			  <tr class='norecord_found'><td colspan="10"><?php __('No records found');?></td></tr>
			<?php }
			?>
           
        </table>
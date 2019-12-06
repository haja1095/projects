 <?php if(isset($info_message) && !empty($info_message))
 {?>
		<div class="info"><?php echo $info_message;?></div>
 <?php } else if($session->check('info_message'))
 { ?>
    <div class="info"><?php echo $session->read('info_message');?></div>
<?php
    $session->delete('info_message');
   }?>
 <?php if(isset($warning_message) && !empty($warning_message))
 {?>
		<div class="warning"><?php echo $warning_message;?></div>
 <?php }else if($session->check('warning_message'))
 { ?>
    <div class="warning"><?php echo $session->read('warning_message');?></div>
<?php
    $session->delete('warning_message');
   }?>
 
 <?php if(isset($success_message) && !empty($success_message))
 {?>
		<div class="success"><?php echo $success_message;?></div>
 <?php }else if($session->check('success_message'))
 { ?>
    <div class="success"><?php echo $session->read('success_message');?></div>
<?php
    $session->delete('success_message');
   }?>
  <?php if(isset($error_message) && !empty($error_message))
 {?>
		<div class="error"><?php echo $error_message;?></div>
 <?php }else if($session->check('error_message'))
 { ?>
    <div class="error"><?php echo $session->read('error_message');?></div>
<?php
    $session->delete('error_message');
   }?> 
<?php 
	  	 if(isset($this->validationErrors) && !empty($this->validationErrors))
			  { ?>			
			  	  
				  <div align="left" class="validation">
				    <?php foreach($this->validationErrors as $key=>$field_error){					
						foreach($field_error as $field_name=>$error){				 
					   e($error);
					   e("<br>");				  
					     }
					   }?>					
				   </div> 
		 
	<?php  }  
		 if(isset($error) && !empty($error) && is_array($error))
	  { 
	    
	  ?>	
		  
		  <div align="left" class="validation">
			<?php foreach($error as $e){				
				echo '*'.$e;
				 echo "<br>"; 		 
			   }?>					
		   </div> 		 
	<?php  } else {
	    if($session->check('error'))
		{  $error=$session->read('error');
		   if(isset($error) && !empty($error)  && is_array($error))
		  { ?>	
			  
			  <div align="left" class="validation">
				<?php foreach($error as $e){				
					echo '*'.$e;
					 echo "<br>"; 		 
				   }?>					
			   </div> 		
	<?php } $session->delete('error');
	  }}?> 
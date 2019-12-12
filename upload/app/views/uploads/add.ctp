<?php echo $this->Form->create('Upload', array('type' => 'file'));
    
 ?>
  <fieldset>
     <legend><?php __('Add Upload'); ?></legend>
  <?php
  echo $this->Form->input('title');
  echo $this->Form->input('description');
  echo $this->Form->input('file', array('type' => 'file'));
  ?>
  </fieldset>
<?php echo $this->Form->end(__('Submit', true));
?>
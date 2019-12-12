<div class="users form">
<?php
echo $this->Form->create('User');
echo $this->Form->inputs(array('id','name', 'email','username','password' ,'dob', 'phoneno', 'age', 'sex'));
echo $this->Form->end('Edit');
?>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('List Of Users', 
array('action' => 'index'));?></li>
    </ul>
</div>
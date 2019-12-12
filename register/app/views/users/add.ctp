<div class="users form">
<?php
echo $this->Form->create('User');
echo $this->Form->inputs(array('name', 'email','username','password','dob', 'phoneno', 'age', 'sex'));
echo $this->Form->end('Add');
?>
</div>

<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('List of User', array('action' => 'index'));?></li>
    </ul>
</div>
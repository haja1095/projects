<div class="users view">
 <h2>User</h2>
    <dl>
        <dt>Name</dt>
        <dd><?php echo $user['User']['name']; ?></dd>
        <dt>Email</dt>
        <dd><?php echo $user['User']['email']; ?></dd>
        <dt>UserName</dt>
        <dd><?php echo $user['User']['username']; ?></dd>
        <dt>Password</dt>
        <dd><?php echo $user['User']['password']; ?></dd>
        <dt>Date of birth</dt>
        <dd><?php echo $user['User']['dob']; ?></dd>
        <dt>Phone No</dt>
        <dd><?php echo $user['User']['phoneno']; ?></dd>
        <dt>Age</dt>
        <dd><?php echo $user['User']['age']; ?></dd>
        <dt>Sex</dt>
        <dd><?php echo $user['User']['sex']; ?></dd>
        <dt>Created</dt>
        <dd><?php echo $user['User']['created']; ?></dd>
        <dt>Modified</dt>
        <dd><?php echo $user['User']['modified']; ?></dd>
    </dl>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link
('Edit User', array('action' => 'edit', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('Delete User', array('action' => 'delete', $user['User']['id']),
null, sprintf('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('List Of User', array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link
('New User', array('action' => 'add')); ?> </li>
    </ul>
</div>
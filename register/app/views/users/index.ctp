<div class="users index">
    <h2>User</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Date Of Birth</th>
            <th>Phone No</th>
            <th>Age</th>
            <th>Sex</th>
            <th class="actions">Actions</th>
        </tr>
    <?php foreach ($users as $User): ?>
       <tr>
        <td><?php echo $User['User']['name']; ?> </td>
        <td><?php echo $User['User']['email']; ?> </td>
        <td><?php echo $User['User']['username']; ?> </td>
        <td><?php echo $User['User']['password']; ?> </td>
        <td><?php echo $User['User']['dob']; ?> </td>
        <td><?php echo $User['User']['phoneno']; ?> </td>
        <td><?php echo $User['User']['age']; ?> </td>
        <td><?php echo $User['User']['sex']; ?> </td>
        <td class="actions">
            <?php echo $this->Html->link('View',
array('action' => 'view', $User['User']['id'])); ?>
            <?php echo $this->Html->link('Edit',
array('action' => 'edit', $User['User']['id'])); ?>
            <?php echo $this->Html->link('Delete',
array('action' => 'delete', $User['User']['id']), 
null, sprintf('Are you sure you want to delete %s?', $User['User']['name'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('New User', array('action' => 'add')); ?></li>
    </ul>
</div>


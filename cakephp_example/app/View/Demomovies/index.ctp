<div class="movies index">
    <h2>Movies</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Format</th>
            <th>Length</th>
            <th class="actions">Actions</th>
        </tr>
    <?php 	
	foreach ($demomovies as $movie): ?>
    <tr>
        <td><?php echo $movie['Demomovie']['title']; ?> </td>
        <td><?php echo $movie['Demomovie']['genre']; ?> </td>
        <td><?php echo $movie['Demomovie']['rating']; ?> </td>
        <td><?php echo $movie['Demomovie']['format']; ?> </td>
        <td><?php echo $movie['Demomovie']['length']; ?> </td>
        <td class="actions">
            <?php echo $this->Html->link('View',
array('action' => 'view', $movie['Demomovie']['id'])); ?>
            <?php echo $this->Html->link('Edit',
array('action' => 'edit', $movie['Demomovie']['id'])); ?>
            <?php echo $this->Html->link('Delete',
array('action' => 'delete', $movie['Demomovie']['id']), 
null, sprintf('Are you sure you want to delete %s?', $movie['Demomovie']['title'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('New Movie', array('action' => 'add')); ?></li>
    </ul>
</div>
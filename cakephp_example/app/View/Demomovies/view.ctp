<div class="movies view">
<h2>Movie</h2>
    <dl>
        <dt>Title</dt>
        <dd><?php echo $movie['Demomovie']['title']; ?></dd>
        <dt>Genre</dt>
        <dd><?php echo $movie['Demomovie']['genre']; ?></dd>
        <dt>Rating</dt>
        <dd><?php echo $movie['Demomovie']['rating']; ?></dd>
        <dt>Format</dt>
        <dd><?php echo $movie['Demomovie']['format']; ?></dd>
        <dt>Length</dt>
        <dd><?php echo $movie['Demomovie']['length']; ?></dd>
        <dt>Created</dt>
        <dd><?php echo $movie['Demomovie']['created']; ?></dd>
        <dt>Modified</dt>
        <dd><?php echo $movie['Demomovie']['modified']; ?></dd>
    </dl>
</div>


<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link
('Edit Movie', array('action' => 'edit', $movie['Demomovie']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('Delete Movie', array('action' => 'delete', $movie['Demomovie']['id']),
null, sprintf('Are you sure you want to delete # %s?', $movie['Demomovie']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('List Movies', array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link
('New Movie', array('action' => 'add')); ?> </li>
    </ul>
</div>
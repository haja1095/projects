<h2><?php __('Upload'); ?></h2>
<table cellpadding="0" cellspacing="0">
    <tr>
        <th><?php __('id'); ?></th>
        <th><?php __('title'); ?></th>
        <th><?php __('download'); ?></th>
    </tr>
    <?php foreach ($uploads as $uploads): ?>
        <tr>
            <td><?php echo $uploads['Upload']['id']; ?>&nbsp;</td>
            <td><?php echo $uploads['Upload']['title']; ?>&nbsp;</td>
            <td>
                <?php
                echo $this->Html->link(__('Download', true), array(
                    'action' => 'download', $uploads['Upload']['id']));
                ?>&nbsp;</td>
        </tr>
    <?php endforeach; ?>
</table>
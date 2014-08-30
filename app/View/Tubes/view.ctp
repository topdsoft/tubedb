<div class="tubes view">
<h2><?php echo __('Tube'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tube['Tube']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tube['Tube']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tube['Tube']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tube['Tube']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Testable'); ?></dt>
		<dd>
			<?php echo h($tube['Tube']['testable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tube'), array('action' => 'edit', $tube['Tube']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tube'), array('action' => 'delete', $tube['Tube']['id']), array(), __('Are you sure you want to delete # %s?', $tube['Tube']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tubes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tube'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mtbs'), array('controller' => 'mtbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mtb'), array('controller' => 'mtbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mtbs'); ?></h3>
	<?php if (!empty($tube['Mtb'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Manufacturer Id'); ?></th>
		<th><?php echo __('Box Id'); ?></th>
		<th><?php echo __('Tube Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tube['Mtb'] as $mtb): ?>
		<tr>
			<td><?php echo $mtb['id']; ?></td>
			<td><?php echo $mtb['manufacturer_id']; ?></td>
			<td><?php echo $mtb['box_id']; ?></td>
			<td><?php echo $mtb['tube_id']; ?></td>
			<td><?php echo $mtb['qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mtbs', 'action' => 'view', $mtb['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mtbs', 'action' => 'edit', $mtb['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mtbs', 'action' => 'delete', $mtb['id']), array(), __('Are you sure you want to delete # %s?', $mtb['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mtb'), array('controller' => 'mtbs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Boxes'); ?></h3>
	<?php if (!empty($tube['Box'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tube['Box'] as $box): ?>
		<tr>
			<td><?php echo $box['id']; ?></td>
			<td><?php echo $box['created']; ?></td>
			<td><?php echo $box['modified']; ?></td>
			<td><?php echo $box['name']; ?></td>
			<td><?php echo $box['location_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'boxes', 'action' => 'view', $box['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'boxes', 'action' => 'edit', $box['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'boxes', 'action' => 'delete', $box['id']), array(), __('Are you sure you want to delete # %s?', $box['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($tube['Tag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tube['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id']; ?></td>
			<td><?php echo $tag['created']; ?></td>
			<td><?php echo $tag['modified']; ?></td>
			<td><?php echo $tag['name']; ?></td>
			<td><?php echo $tag['details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), array(), __('Are you sure you want to delete # %s?', $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="boxes view">
<h2><?php echo __('Box'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($box['Box']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($box['Box']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($box['Box']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($box['Box']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($box['Location']['name'], array('controller' => 'locations', 'action' => 'view', $box['Location']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Box'), array('action' => 'edit', $box['Box']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Box'), array('action' => 'delete', $box['Box']['id']), array(), __('Are you sure you want to delete # %s?', $box['Box']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mtbs'), array('controller' => 'mtbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mtb'), array('controller' => 'mtbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tubes'), array('controller' => 'tubes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tube'), array('controller' => 'tubes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mtbs'); ?></h3>
	<?php if (!empty($box['Mtb'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Manufacturer Id'); ?></th>
		<th><?php echo __('Box Id'); ?></th>
		<th><?php echo __('Tube Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($box['Mtb'] as $mtb): ?>
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
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($box['Tag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($box['Tag'] as $tag): ?>
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
<div class="related">
	<h3><?php echo __('Related Tubes'); ?></h3>
	<?php if (!empty($box['Tube'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Testable'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($box['Tube'] as $tube): ?>
		<tr>
			<td><?php echo $tube['id']; ?></td>
			<td><?php echo $tube['created']; ?></td>
			<td><?php echo $tube['modified']; ?></td>
			<td><?php echo $tube['name']; ?></td>
			<td><?php echo $tube['testable']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tubes', 'action' => 'view', $tube['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tubes', 'action' => 'edit', $tube['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tubes', 'action' => 'delete', $tube['id']), array(), __('Are you sure you want to delete # %s?', $tube['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tube'), array('controller' => 'tubes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

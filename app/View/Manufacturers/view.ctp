<div class="manufacturers view">
<h2><?php echo __('Manufacturer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manufacturer'), array('action' => 'edit', $manufacturer['Manufacturer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manufacturer'), array('action' => 'delete', $manufacturer['Manufacturer']['id']), array(), __('Are you sure you want to delete # %s?', $manufacturer['Manufacturer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mtbs'), array('controller' => 'mtbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mtb'), array('controller' => 'mtbs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mtbs'); ?></h3>
	<?php if (!empty($manufacturer['Mtb'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Manufacturer Id'); ?></th>
		<th><?php echo __('Box Id'); ?></th>
		<th><?php echo __('Tube Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($manufacturer['Mtb'] as $mtb): ?>
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

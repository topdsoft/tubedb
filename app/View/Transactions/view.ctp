<div class="transactions view">
<h2><?php echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tube'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Tube']['name'], array('controller' => 'tubes', 'action' => 'view', $transaction['Tube']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Box']['name'], array('controller' => 'boxes', 'action' => 'view', $transaction['Box']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $transaction['Manufacturer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NewQty'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['newQty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsedQty'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['usedQty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UnknownQty'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['unknownQty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['id']), array(), __('Are you sure you want to delete # %s?', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tubes'), array('controller' => 'tubes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tube'), array('controller' => 'tubes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
	</ul>
</div>

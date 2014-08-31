<div class="tubes view">
<?php echo $this->Form->create('Tube',array('enctype'=>'multipart/form-data'));?>
<h2><?php echo __('Tube'); ?></h2>
<?php
		echo '	<fieldset><legend>Upload a *.csv File</legend>';

		echo $this->Form->input('upload',array('type'=>'file','label'=>'Select a CSV File of 50KB or smaller to be uploaded:'));
		echo ' 	</fieldset>';
		echo $this->Form->end(__('Submit', true));
		echo $this->Form->input('submitted',array('type'=>'hidden','value'=>'true'));
?>

</div>

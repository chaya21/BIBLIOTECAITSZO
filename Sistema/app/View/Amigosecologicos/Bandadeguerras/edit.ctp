<div class="bandadeguerras form">
<?php echo $this->Form->create('Bandadeguerra'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bandadeguerra'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('No_Control');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Sexo');
		echo $this->Form->input('Semestre_y_Carrera');
		echo $this->Form->input('Modified');
		echo $this->Form->input('Created');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bandadeguerra.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Bandadeguerra.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bandadeguerras'), array('action' => 'index')); ?></li>
	</ul>
</div>

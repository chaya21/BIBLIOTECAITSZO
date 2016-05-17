<div class="basquetbols form">
<?php echo $this->Form->create('Basquetbol'); ?>
	<fieldset>
		<legend><?php echo __('Editar Basquetbol'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Matricula');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Ap_Paterno');
		echo $this->Form->input('Ap_Materno');
		echo $this->Form->input('Sexo');
		echo $this->Form->input('Semestre');
		echo $this->Form->input('Carrera');
		echo $this->Form->input('created');
		echo $this->Form->input('Modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Basquetbol.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Basquetbol.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Basquetbols'), array('action' => 'index')); ?></li>
	</ul>
</div>

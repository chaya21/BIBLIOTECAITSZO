<div class="basquetbols view">
<h2><?php echo __('Basquetbol'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Semestre']); ?>
			&nbsp;
		</dd>
	<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Carrera']); ?>
			&nbsp;
		</dd>
	<dt><?php echo __('Create'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Create']); ?>
			&nbsp;
		</dd>
	</dl>
	<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($basquetbol['Basquetbol']['Modofied']); ?>
			&nbsp;
		</dd>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Basquetbol'), array('action' => 'edit', $basquetbol['Basquetbol']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Basquetbol'), array('action' => 'delete', $basquetbol['Basquetbol']['id']), array(), __('Are you sure you want to delete # %s?', $basquetbol['Basquetbol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Basquetbols'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Basquetbol'), array('action' => 'add')); ?> </li>
	</ul>
</div>

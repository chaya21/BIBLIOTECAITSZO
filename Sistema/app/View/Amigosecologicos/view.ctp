<div class="amigosecologicos view">
<h2><?php echo __('Amigosecologico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Ap_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($amigosecologico['Amigosecologico']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Amigosecologico'), array('action' => 'edit', $amigosecologico['Amigosecologico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Amigosecologico'), array('action' => 'delete', $amigosecologico['Amigosecologico']['id']), array(), __('Are you sure you want to delete # %s?', $amigosecologico['Amigosecologico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Amigosecologicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Amigosecologico'), array('action' => 'add')); ?> </li>
	</ul>
</div>

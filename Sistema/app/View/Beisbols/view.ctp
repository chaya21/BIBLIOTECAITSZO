<div class="beisbols view">
<h2><?php echo __('Beisbol'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($beisbol['Beisbol']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Beisbol'), array('action' => 'edit', $beisbol['Beisbol']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Beisbol'), array('action' => 'delete', $beisbol['Beisbol']['id']), array(), __('Are you sure you want to delete # %s?', $beisbol['Beisbol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Beisbols'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Beisbol'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="bajastemporalesdealumnos view">
<h2><?php echo __('Bajastemporalesdealumno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bajastemporalesdealumno['Bajastemporalesdealumno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Control'); ?></dt>
		<dd>
			<?php echo h($bajastemporalesdealumno['Bajastemporalesdealumno']['No_Control']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($bajastemporalesdealumno['Bajastemporalesdealumno']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($bajastemporalesdealumno['Bajastemporalesdealumno']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre Y Carrera'); ?></dt>
		<dd>
			<?php echo h($bajastemporalesdealumno['Bajastemporalesdealumno']['Semestre_y_Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bajastemporalesdealumno['Bajastemporalesdealumno']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bajastemporalesdealumno['Bajastemporalesdealumno']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bajastemporalesdealumno'), array('action' => 'edit', $bajastemporalesdealumno['Bajastemporalesdealumno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bajastemporalesdealumno'), array('action' => 'delete', $bajastemporalesdealumno['Bajastemporalesdealumno']['id']), array(), __('Are you sure you want to delete # %s?', $bajastemporalesdealumno['Bajastemporalesdealumno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bajastemporalesdealumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bajastemporalesdealumno'), array('action' => 'add')); ?> </li>
	</ul>
</div>

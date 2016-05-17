<div class="bandadeguerras view">
<h2><?php echo __('Bandadeguerra'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bandadeguerra['Bandadeguerra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Control'); ?></dt>
		<dd>
			<?php echo h($bandadeguerra['Bandadeguerra']['No_Control']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($bandadeguerra['Bandadeguerra']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($bandadeguerra['Bandadeguerra']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre Y Carrera'); ?></dt>
		<dd>
			<?php echo h($bandadeguerra['Bandadeguerra']['Semestre_y_Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bandadeguerra['Bandadeguerra']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bandadeguerra['Bandadeguerra']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bandadeguerra'), array('action' => 'edit', $bandadeguerra['Bandadeguerra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bandadeguerra'), array('action' => 'delete', $bandadeguerra['Bandadeguerra']['id']), array(), __('Are you sure you want to delete # %s?', $bandadeguerra['Bandadeguerra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bandadeguerras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bandadeguerra'), array('action' => 'add')); ?> </li>
	</ul>
</div>

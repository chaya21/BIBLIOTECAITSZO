<div class="page-header">
	<h2><?php echo __('Banda de Guerra'); ?></h2>
</div>



 <div class="col-md-16">

	<table class="table table-striped"
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('No_Control'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('Semestre); ?></th>
			<th><?php echo $this->Paginator->sort('Carrera'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th><?php echo $this->Paginator->sort('Created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bandadeguerras as $bandadeguerra): ?>
	<tr>
		<td><?php echo h($bandadeguerra['Bandadeguerra']['id']); ?>&nbsp;</td>
		<td><?php echo h($bandadeguerra['Bandadeguerra']['No_Control']); ?>&nbsp;</td>
		<td><?php echo h($bandadeguerra['Bandadeguerra']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($bandadeguerra['Bandadeguerra']['Sexo']); ?>&nbsp;</td>
		<td><?php echo h($bandadeguerra['Bandadeguerra']['Semestre_y_Carrera']); ?>&nbsp;</td>
		<td><?php echo h($bandadeguerra['Bandadeguerra']['Modified']); ?>&nbsp;</td>
		<td><?php echo h($bandadeguerra['Bandadeguerra']['Created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $bandadeguerra['Bandadeguerra']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $bandadeguerra['Bandadeguerra']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $bandadeguerra['Bandadeguerra']['id']), array('class'=>' btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $bandadeguerra['Bandadeguerra']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Banda de Guerra'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>

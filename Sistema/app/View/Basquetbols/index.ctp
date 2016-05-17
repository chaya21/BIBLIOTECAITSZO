<div class="page-header">
	<h2><?php echo __('Edecanes'); ?></h2>
</div>



 <div class="col-md-16">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Ap_Paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('Ap_Materno'); ?></th>
			<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('Semestre'); ?></th>
			<th><?php echo $this->Paginator->sort('Carrera'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th><?php echo $this->Paginator->sort('Created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($basquetbols as $basquetbol): ?>
	<tr>
		<td><?php echo h($basquetbol['Basquetbol']['id']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Matricula']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Ap_Paterno']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Ap_Materno']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Sexo']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Semestre']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Carrera']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Created']); ?>&nbsp;</td>
		<td><?php echo h($basquetbol['Basquetbol']['Modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $basquetbol['Basquetbol']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $basquetbol['Basquetbol']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $basquetbol['Basquetbol']['id']), array('class'=>' btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $basquetbol['Basquetbol']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Basquetbol'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>

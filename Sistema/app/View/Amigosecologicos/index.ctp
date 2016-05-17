	<div class="page-header">
	<h2><?php echo __('Amigos Ecologicos'); ?></h2>
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
	<?php foreach ($amigosecologicos as $amigosecologico): ?>
	<tr>
		<td><?php echo h($amigosecologico['Amigosecologico']['id']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Matricula']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Ap_paterno']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Ap_Materno']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Sexo']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Semestre']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Carrera']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Modified']); ?>&nbsp;</td>
		<td><?php echo h($amigosecologico['Amigosecologico']['Created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $amigosecologico['Amigosecologico']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $amigosecologico['Amigosecologico']['id']), array('class'=>' btn btn-success ')); ?>
			
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $amigosecologico['Amigosecologico']['id']), array('class'=>' btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $amigosecologico['Amigosecologico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Amigo Ecologico'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
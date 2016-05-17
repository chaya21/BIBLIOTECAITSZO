<div class="page-header">
	<h2><?php echo __('beisbol'); ?></h2>
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
	<?php foreach ($beisbols as $beisbol): ?>
	<tr>
		<td><?php echo h($beisbol['Beisbol']['id']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Matricula']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Ap_Paterno']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Ap_Materno']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Sexo']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Semestre']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Carrera']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Modified']); ?>&nbsp;</td>
		<td><?php echo h($beisbol['Beisbol']['Created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $beisbol['Beisbol']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $beisbol['Beisbol']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $beisbol['Beisbol']['id']), array(), __('Are you sure you want to delete # %s?', $beisbol['Beisbol']['id'])); ?>
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
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Beisbol'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>

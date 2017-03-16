<?php
/* @var $this AsuntosPendientesAnterioresController */
/* @var $model AsuntoPendienteAnterior */

$this->breadcrumbs=array(
	'Asunto Pendiente Anteriors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AsuntoPendienteAnterior', 'url'=>array('index')),
	array('label'=>'Crear Asunto Pendiente Anterior', 'url'=>array('create')),
	array('label'=>'Actualizar Asunto Pendiente Anterior', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Asunto Pendiente Anterior', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Asunto Pendiente Anterior', 'url'=>array('admin')),
);
?>

<h1>View AsuntoPendienteAnterior #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'acta_id',
		'concepto_id',
		'observacion',
	),
)); ?>

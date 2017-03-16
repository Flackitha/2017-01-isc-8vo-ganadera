<?php
/* @var $this ActasController */
/* @var $model Acta */

$this->breadcrumbs=array(
	'Actas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Acta', 'url'=>array('index')),
	array('label'=>'Crear Acta', 'url'=>array('create')),
	array('label'=>'Modificar Acta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Acta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Acta', 'url'=>array('admin')),
);
?>

<h1>View Acta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'c1',
		'c2',
		'c3',
		'c4',
		'c5',
		'c6',
		'c7',
		'c8',
		'c9',
		'c10',
		'fecha',
		'numero',
		'año',
	),
)); ?>

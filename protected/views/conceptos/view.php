<?php
/* @var $this ConceptosController */
/* @var $model Concepto */

$this->breadcrumbs=array(
	'Conceptos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Concepto', 'url'=>array('index')),
	array('label'=>'Crear Concepto', 'url'=>array('create')),
	array('label'=>'Actualizar Concepto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Concepto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Concepto', 'url'=>array('admin')),
);
?>

<h1>View Concepto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_concepto',
	),
)); ?>

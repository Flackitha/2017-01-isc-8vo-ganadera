<?php
/* @var $this ConceptosActaController */
/* @var $model ConceptoActa */

$this->breadcrumbs=array(
	'Concepto Actas'=>array('Inicio'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de ConceptoActa', 'url'=>array('Inicio')),
	array('label'=>'Crear ConceptoActa', 'url'=>array('Crear')),
	array('label'=>'Actualizar ConceptoActa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar ConceptoActa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('Eliminar','id'=>$model->id),'Confirmar'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ConceptoActa', 'url'=>array('Administrar')),
);
?>

<h1>View ConceptoActa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'acta_id',
		'concepto_id',
		'checkbox',
		'observaciones',
	),
)); ?>

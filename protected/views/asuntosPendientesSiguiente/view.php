<?php
/* @var $this AsuntosPendientesSiguienteController */
/* @var $model AsuntoPendienteSiguiente */

$this->breadcrumbs=array(
	'Asunto Pendiente Siguientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AsuntoPendienteSiguiente', 'url'=>array('index')),
	array('label'=>'Create AsuntoPendienteSiguiente', 'url'=>array('Crear')),
	array('label'=>'Update AsuntoPendienteSiguiente', 'url'=>array('Actualizar', 'id'=>$model->id)),
	array('label'=>'Delete AsuntoPendienteSiguiente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('Eliminar','id'=>$model->id),'Confirmar'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AsuntoPendienteSiguiente', 'url'=>array('Administrar')),
);
?>

<h1>View AsuntoPendienteSiguiente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'acta_id',
		'concepto_id',
		'observacion',
	),
)); ?>

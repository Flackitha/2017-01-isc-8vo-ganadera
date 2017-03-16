<?php
/* @var $this AsuntosPendientesSiguienteController */
/* @var $model AsuntoPendienteSiguiente */

$this->breadcrumbs=array(
	'Asunto Pendiente Siguientes'=>array('index'),
	$model->id=>array('Ver','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List AsuntoPendienteSiguiente', 'url'=>array('index')),
	array('label'=>'Create AsuntoPendienteSiguiente', 'url'=>array('Crear')),
	array('label'=>'View AsuntoPendienteSiguiente', 'url'=>array('Ver', 'id'=>$model->id)),
	array('label'=>'Manage AsuntoPendienteSiguiente', 'url'=>array('Administrar')),
);
?>

<h1>Update AsuntoPendienteSiguiente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
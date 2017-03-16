<?php
/* @var $this AsuntosPendientesAnterioresController */
/* @var $model AsuntoPendienteAnterior */

$this->breadcrumbs=array(
	'Asunto Pendiente Anterior'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AsuntoPendienteAnterior', 'url'=>array('index')),
	array('label'=>'Crear Asunto Pendiente Anterior', 'url'=>array('create')),
	array('label'=>'Ver Asunto Pendiente Anterior', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar AsuntoPendienteAnterior', 'url'=>array('admin')),
);
?>

<h1>Update AsuntoPendienteAnterior <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this AsuntosPendientesAnterioresController */
/* @var $model AsuntoPendienteAnterior */

$this->breadcrumbs=array(
	'Asunto Pendiente Anterior'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Asuntos Pendientes Anteriores', 'url'=>array('index')),
	array('label'=>'Administrar Asuntos Pendientes Anteriores', 'url'=>array('admin')),
);
?>

<h1>Crear Asunto Pendiente Anterior</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this AsuntosPendientesSiguienteController */
/* @var $model AsuntoPendienteSiguiente */

$this->breadcrumbs=array(
	'Asunto Pendiente Siguientes'=>array('Inicio'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de AsuntoPendienteSiguiente', 'url'=>array('Inicio')),
	array('label'=>'Administrar AsuntoPendienteSiguiente', 'url'=>array('Administrar')),
);
?>

<h1>Create AsuntoPendienteSiguiente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
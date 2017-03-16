<?php
/* @var $this MiembrosSociedadController */
/* @var $model MiembroSociedad */

$this->breadcrumbs=array(
	'Miembro Sociedad'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Miembros de la Sociedad', 'url'=>array('index')),
	array('label'=>'Administrar Miembros de la Sociedad', 'url'=>array('admin')),
);
?>

<h1>Crear Miembros de la Sociedad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
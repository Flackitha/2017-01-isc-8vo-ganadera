<?php
/* @var $this SociosPersonaFisicaController */
/* @var $model SocioPersonaFisica */

$this->breadcrumbs=array(
	'Socio Persona Fisicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Personas Fisicas', 'url'=>array('index')),
	array('label'=>'Administrar Personas Fisicas', 'url'=>array('admin')),
);
?>

<h1>Crear Socio Persona Fisica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
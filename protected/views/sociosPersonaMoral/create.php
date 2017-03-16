<?php
/* @var $this SociosPersonaMoralController */
/* @var $model SocioPersonaMoral */

$this->breadcrumbs=array(
	'Socio Persona Morals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Consultar SocioPersonaMoral', 'url'=>array('index')),
	array('label'=>'Administrar SocioPersonaMoral', 'url'=>array('admin')),
);
?>

<h1>Create SocioPersonaMoral</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
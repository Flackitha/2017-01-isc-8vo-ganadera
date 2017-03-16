<?php
/* @var $this ActasController */
/* @var $model Acta */

$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Consultar Acta', 'url'=>array('index')),
	array('label'=>'Administrar Acta', 'url'=>array('admin')),
);
?>

<h1>Create Acta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
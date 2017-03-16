<?php
/* @var $this ConceptosController */
/* @var $model Concepto */

$this->breadcrumbs=array(
	'Conceptos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Concepto', 'url'=>array('index')),
	array('label'=>'Administrar Concepto', 'url'=>array('admin')),
);
?>

<h1>Create Concepto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
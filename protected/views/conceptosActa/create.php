<?php
/* @var $this ConceptosActaController */
/* @var $model ConceptoActa */

$this->breadcrumbs=array(
	'Concepto Actas'=>array('Inicio'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de ConceptoActa', 'url'=>array('Inicio')),
	array('label'=>'Administrar ConceptoActa', 'url'=>array('Administrar')),
);
?>

<h1>Create ConceptoActa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
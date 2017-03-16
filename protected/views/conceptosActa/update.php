<?php
/* @var $this ConceptosActaController */
/* @var $model ConceptoActa */

$this->breadcrumbs=array(
	'Concepto Actas'=>array('Inicio'),
	$model->id=>array('Ver','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConceptoActa', 'url'=>array('Inicio')),
	array('label'=>'Create ConceptoActa', 'url'=>array('Crear')),
	array('label'=>'View ConceptoActa', 'url'=>array('Ver', 'id'=>$model->id)),
	array('label'=>'Manage ConceptoActa', 'url'=>array('Administrar')),
);
?>

<h1>Update ConceptoActa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
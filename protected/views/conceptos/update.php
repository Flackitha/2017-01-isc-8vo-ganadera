<?php
/* @var $this ConceptosController */
/* @var $model Concepto */

$this->breadcrumbs=array(
	'Conceptos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Concepto', 'url'=>array('index')),
	array('label'=>'Creaar Concepto', 'url'=>array('create')),
	array('label'=>'Ver Concepto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Concepto', 'url'=>array('admin')),
);
?>

<h1>Update Concepto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
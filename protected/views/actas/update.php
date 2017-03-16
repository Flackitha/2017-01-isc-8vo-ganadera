<?php
/* @var $this ActasController */
/* @var $model Acta */

$this->breadcrumbs=array(
	'Actas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Acta', 'url'=>array('index')),
	array('label'=>'Create Acta', 'url'=>array('create')),
	array('label'=>'View Acta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Acta', 'url'=>array('admin')),
);
?>

<h1>Update Acta <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this MiembrosSociedadController */
/* @var $model MiembroSociedad */

$this->breadcrumbs=array(
	'Miembro Sociedads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Miembros de la Sociedad', 'url'=>array('index')),
	array('label'=>'Crear Miembros de la Sociedad', 'url'=>array('create')),
	array('label'=>'Ver Miembros de la Sociedad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Miembros de la Sociedad', 'url'=>array('admin')),
);
?>

<h1>Update MiembroSociedad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
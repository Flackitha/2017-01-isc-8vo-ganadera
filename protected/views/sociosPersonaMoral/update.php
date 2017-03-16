<?php
/* @var $this SociosPersonaMoralController */
/* @var $model SocioPersonaMoral */

$this->breadcrumbs=array(
	'Socio Persona Morals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista SocioPersonaMoral', 'url'=>array('index')),
	array('label'=>'Crear SocioPersonaMoral', 'url'=>array('create')),
	array('label'=>'Consultar SocioPersonaMoral', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar SocioPersonaMoral', 'url'=>array('admin')),
);
?>

<h1>Update SocioPersonaMoral <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
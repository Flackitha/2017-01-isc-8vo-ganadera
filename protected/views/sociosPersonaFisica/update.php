<?php
/* @var $this SociosPersonaFisicaController */
/* @var $model SocioPersonaFisica */

$this->breadcrumbs=array(
	'Socio Persona Fisicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Personas Fisicas', 'url'=>array('index')),
	array('label'=>'Crear SocioPersonas Fisicas', 'url'=>array('create')),
	array('label'=>'Ver Personas Fisicas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Personas Fisicas', 'url'=>array('admin')),
);
?>

<h1>Update SocioPersonaFisica <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
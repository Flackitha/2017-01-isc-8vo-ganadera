<?php
/* @var $this MiembrosSociedadController */
/* @var $model MiembroSociedad */

$this->breadcrumbs=array(
	'Miembro Sociedad'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Miembros de la Sociedad', 'url'=>array('index')),
	array('label'=>'Crear Miembros de la Sociedad', 'url'=>array('create')),
	array('label'=>'Modificar Miembros de la Sociedad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Miembros de la Sociedad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Miembros de la Sociedad', 'url'=>array('admin')),
);
?>

<h1>View MiembroSociedad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sociedad_id',
		'nombre',
		'domicilio',
		'curp',
	),
)); ?>

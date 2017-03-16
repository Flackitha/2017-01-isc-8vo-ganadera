<?php
/* @var $this ConsejoSociedadController */
/* @var $model ConsejoSociedad */

$this->breadcrumbs=array(
	'Consejo Sociedads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ConsejoSociedad', 'url'=>array('index')),
	array('label'=>'Crear ConsejoSociedad', 'url'=>array('create')),
	array('label'=>'Actualizar ConsejoSociedad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar ConsejoSociedad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ConsejoSociedad', 'url'=>array('admin')),
);
?>

<h1>View ConsejoSociedad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sociedad_id',
		'nombre',
		'domicilio',
	),
)); ?>

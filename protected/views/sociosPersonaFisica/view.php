<?php
/* @var $this SociosPersonaFisicaController */
/* @var $model SocioPersonaFisica */

$this->breadcrumbs=array(
	'Socio Persona Fisicas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Personas Fisicas', 'url'=>array('index')),
	array('label'=>'Crear Personas Fisicas', 'url'=>array('create')),
	array('label'=>'Modificar Personas Fisicas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Imprimir Acta', 'url'=>array('printer', 'id'=>$model->id)),
	array('label'=>'Borrar Personas Fisicas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Personas Fisicas', 'url'=>array('admin')),
);
?>

<h1>Ver Socios Personas Fisicas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'domicilio',
		'curp',
		'rfc',
		'actividades',
		'ubicacion',
		'ciclos',
		'fondos',
		'fecha_inicio',
		'fecha_vigencia',
		'fecha_registro',
		'ciudad',
		'estado',
		'documentacion_rfc',
		'documentacion_curp',
		'documentacion_identificacion',
		'documentacion_constancia_fondo',
		'documentacion_acta_asamblea',
		'documentacion_estudio_viabilidad',
	),
)); ?>

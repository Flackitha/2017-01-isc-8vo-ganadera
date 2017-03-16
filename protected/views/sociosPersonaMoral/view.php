<?php
/* @var $this SociosPersonaMoralController */
/* @var $model SocioPersonaMoral */

$this->breadcrumbs=array(
	'Socio Persona Morals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar SocioPersonaMoral', 'url'=>array('index')),
	array('label'=>'Crear SocioPersonaMoral', 'url'=>array('create')),
	array('label'=>'Actualizar SocioPersonaMoral', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar SocioPersonaMoral', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar SocioPersonaMoral', 'url'=>array('admin')),
);
?>

<h1>View SocioPersonaMoral #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'razonsocial',
		'domicilio',
		'rfc',
		'actividades',
		'ubicacion',
		'ciclos',
		'fondos',
		'gerente_nombre',
		'gerente_domicilio',
		'representante_nombre',
		'representante_domicilio',
		'fecha_inicio',
		'fecha_vigencia',
		'fecha_registro',
		'ciudad',
		'estado',
		'documentacion_rfc',
		'documentacion_identificacion',
		'documentacion_escri_constitucion',
		'documentacion_escri_nombra_consejo',
		'documentacion_escri_nombra_gerente',
		'documentacion_escri_nombra_apoderado',
		'documentacion_acta_asamblea_aproba',
		'documentacion_constancia_fondo',
		'documentacion_acta_asamblea',
		'documentacion_estudio_viabilidad',
	),
)); ?>

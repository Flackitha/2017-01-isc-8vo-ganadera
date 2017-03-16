<?php
/* @var $this SociosPersonaMoralController */
/* @var $model SocioPersonaMoral */

$this->breadcrumbs=array(
	'Socio Persona Morals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar SocioPersonaMoral', 'url'=>array('index')),
	array('label'=>'Crear SocioPersonaMoral', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#socio-persona-moral-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Socio Persona Morals</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'socio-persona-moral-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'razonsocial',
		'domicilio',
		'rfc',
		'actividades',
		'ubicacion',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

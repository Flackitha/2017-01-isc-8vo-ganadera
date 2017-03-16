<?php
/* @var $this SociosPersonaFisicaController */
/* @var $model SocioPersonaFisica */

$this->breadcrumbs=array(
	'Socio Persona Fisicas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Personas Fisicas', 'url'=>array('index')),
	array('label'=>'Crear Personas Fisicas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#socio-persona-fisica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Socio Persona Fisicas</h1>

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
	'id'=>'socio-persona-fisica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'domicilio',
		'curp',
		'rfc',
		'actividades',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

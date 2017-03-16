<?php
/* @var $this AsuntosPendientesSiguienteController */
/* @var $model AsuntoPendienteSiguiente */

$this->breadcrumbs=array(
	'Asunto Pendiente Siguientes'=>array('Inicio'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de AsuntoPendienteSiguiente', 'url'=>array('Inico')),
	array('label'=>'Crear AsuntoPendienteSiguiente', 'url'=>array('Crear')),
);

Yii::app()->clientScript->registerScript('Buscar', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#asunto-pendiente-siguiente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Asunto Pendiente Siguientes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_Buscar',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'asunto-pendiente-siguiente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'acta_id',
		'concepto_id',
		'observacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

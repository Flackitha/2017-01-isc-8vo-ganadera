<?php
/* @var $this AsuntosPendientesAnterioresController */
/* @var $model AsuntoPendienteAnterior */

$this->breadcrumbs=array(
	'Asunto Pendiente Anteriors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AsuntoPendienteAnterior', 'url'=>array('index')),
	array('label'=>'Crear Asunto Pendiente Anterior', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#asunto-pendiente-anterior-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Asunto Pendiente Anterior</h1>

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
	'id'=>'asunto-pendiente-anterior-grid',
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

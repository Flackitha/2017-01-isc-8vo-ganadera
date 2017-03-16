<?php
/* @var $this ActasController */
/* @var $model Acta */

$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Culsultar Acta', 'url'=>array('index')),
	array('label'=>'Crear Acta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#acta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Actas</h1>

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
	'id'=>'acta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'c1',
		'c2',
		'c3',
		'c4',
		'c5',
		/*
		'c6',
		'c7',
		'c8',
		'c9',
		'c10',
		'fecha',
		'numero',
		'año',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

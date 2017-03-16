<?php
/* @var $this ConceptosActaController */
/* @var $model ConceptoActa */

$this->breadcrumbs=array(
	'Concepto Actas'=>array('Inicio'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de ConceptoActa', 'url'=>array('Inicio')),
	array('label'=>'Crear ConceptoActa', 'url'=>array('Crear')),
);

Yii::app()->clientScript->registerScript('Buscar', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#concepto-acta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Concepto Actas</h1>

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
	'id'=>'concepto-acta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'acta_id',
		'concepto_id',
		'checkbox',
		'observaciones',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

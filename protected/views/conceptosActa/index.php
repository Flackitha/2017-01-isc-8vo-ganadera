<?php
/* @var $this ConceptosActaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Concepto Actas',
);

$this->menu=array(
	array('label'=>'Crear ConceptoActa', 'url'=>array('Crear')),
	array('label'=>'Administrar ConceptoActa', 'url'=>array('Administrar')),
);
?>

<h1>Concepto Actas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

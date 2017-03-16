<?php
/* @var $this ActasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actas',
);

$this->menu=array(
	array('label'=>'Agregar Acta', 'url'=>array('create')),
	array('label'=>'Administrar Acta', 'url'=>array('admin')),
);
?>

<h1>Actas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

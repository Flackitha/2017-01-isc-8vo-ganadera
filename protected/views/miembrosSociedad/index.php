<?php
/* @var $this MiembrosSociedadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Miembro Sociedad',
);

$this->menu=array(
	array('label'=>'Crear de Miembros de la Sociedad', 'url'=>array('create')),
	array('label'=>'Administrar Miembros de la Sociedad', 'url'=>array('admin')),
);
?>

<h1>Miembro Sociedad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this SociosPersonaMoralController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Socios Persona Morales',
);

$this->menu=array(
	array('label'=>'Crear SocioPersonaMoral', 'url'=>array('create')),
	array('label'=>'Administrar SocioPersonaMoral', 'url'=>array('admin')),
);
?>

<h1>Socios Personas Morales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

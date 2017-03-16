<?php
/* @var $this AsuntosPendientesSiguienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asunto Pendiente Siguientes',
);

$this->menu=array(
	array('label'=>'Crear AsuntoPendienteSiguiente', 'url'=>array('Crear')),
	array('label'=>'Administrar AsuntoPendienteSiguiente', 'url'=>array('Administrar')),
);
?>

<h1>Asunto Pendiente Siguientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

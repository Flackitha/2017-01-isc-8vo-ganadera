<?php
/* @var $this AsuntosPendientesAnterioresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asunto Pendiente Anterior',
);

$this->menu=array(
	array('label'=>'Agregar Asunto Pendiente Anterior', 'url'=>array('create')),
	array('label'=>'Administrar Asuntos Pendientes Anteriores', 'url'=>array('admin')),
);
?>

<h1>Asunto Pendiente Anterior</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

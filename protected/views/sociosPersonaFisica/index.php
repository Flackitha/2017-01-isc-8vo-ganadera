<?php
/* @var $this SociosPersonaFisicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Socio Persona Fisicas',
);

$this->menu=array(
	array('label'=>'Crear Persona Fisica', 'url'=>array('create')),
	array('label'=>'Administrar Persona Fisica', 'url'=>array('admin')),
);
?>

<h1>Socio Persona Fisicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

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

<?php $this->widget('zii.widgets.jui.CJuiAccordion',
array(
	'panels'=>array(
		'2014'=>$this->renderPartial('_partial',array('anio'=>2014),true),
		'2015'=>$this->renderPartial('_partial',array('anio'=>2015),true),
		'2016'=>$this->renderPartial('_partial',array('anio'=>2016),true),
	),
));
?>
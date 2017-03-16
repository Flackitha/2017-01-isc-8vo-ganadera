<?php
/* @var $this ConsejoSociedadController */
/* @var $model ConsejoSociedad */

$this->breadcrumbs=array(
	'Consejo Sociedads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ConsejoSociedad', 'url'=>array('index')),
	array('label'=>'Administrar ConsejoSociedad', 'url'=>array('admin')),
);
?>

<h1>Create ConsejoSociedad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this ConsejoSociedadController */
/* @var $model ConsejoSociedad */

$this->breadcrumbs=array(
	'Consejo Sociedads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ConsejoSociedad', 'url'=>array('index')),
	array('label'=>'Crear ConsejoSociedad', 'url'=>array('create')),
	array('label'=>'Consultar ConsejoSociedad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ConsejoSociedad', 'url'=>array('admin')),
);
?>

<h1>Update ConsejoSociedad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
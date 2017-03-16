<?php
/* @var $this ConsejoSociedadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consejo Sociedads',
);

$this->menu=array(
	array('label'=>'Create ConsejoSociedad', 'url'=>array('create')),
	array('label'=>'Manage ConsejoSociedad', 'url'=>array('admin')),
);
?>

<h1>Consejo Sociedads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

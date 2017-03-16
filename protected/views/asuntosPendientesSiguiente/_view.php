<?php
/* @var $this AsuntosPendientesSiguienteController */
/* @var $data AsuntoPendienteSiguiente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acta_id')); ?>:</b>
	<?php echo CHtml::encode($data->acta_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('concepto_id')); ?>:</b>
	<?php echo CHtml::encode($data->concepto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />


</div>
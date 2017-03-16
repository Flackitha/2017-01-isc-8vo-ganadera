<?php
/* @var $this ConceptosActaController */
/* @var $data ConceptoActa */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('checkbox')); ?>:</b>
	<?php echo CHtml::encode($data->checkbox); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>
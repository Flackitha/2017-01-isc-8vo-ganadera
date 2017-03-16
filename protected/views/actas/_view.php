<?php
/* @var $this ActasController */
/* @var $data Acta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c1')); ?>:</b>
	<?php echo CHtml::encode($data->c1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c2')); ?>:</b>
	<?php echo CHtml::encode($data->c2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c3')); ?>:</b>
	<?php echo CHtml::encode($data->c3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c4')); ?>:</b>
	<?php echo CHtml::encode($data->c4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c5')); ?>:</b>
	<?php echo CHtml::encode($data->c5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c6')); ?>:</b>
	<?php echo CHtml::encode($data->c6); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('c7')); ?>:</b>
	<?php echo CHtml::encode($data->c7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c8')); ?>:</b>
	<?php echo CHtml::encode($data->c8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c9')); ?>:</b>
	<?php echo CHtml::encode($data->c9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c10')); ?>:</b>
	<?php echo CHtml::encode($data->c10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('año')); ?>:</b>
	<?php echo CHtml::encode($data->año); ?>
	<br />

	*/ ?>

</div>
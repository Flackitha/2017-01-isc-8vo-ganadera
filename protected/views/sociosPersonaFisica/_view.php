<?php
/* @var $this SociosPersonaFisicaController */
/* @var $data SocioPersonaFisica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->domicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curp')); ?>:</b>
	<?php echo CHtml::encode($data->curp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfc')); ?>:</b>
	<?php echo CHtml::encode($data->rfc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividades')); ?>:</b>
	<?php echo CHtml::encode($data->actividades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ciclos')); ?>:</b>
	<?php echo CHtml::encode($data->ciclos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fondos')); ?>:</b>
	<?php echo CHtml::encode($data->fondos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_vigencia')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_vigencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_registro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_rfc')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_rfc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_curp')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_curp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_constancia_fondo')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_constancia_fondo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_acta_asamblea')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_acta_asamblea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_estudio_viabilidad')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_estudio_viabilidad); ?>
	<br />

	*/ ?>

</div>
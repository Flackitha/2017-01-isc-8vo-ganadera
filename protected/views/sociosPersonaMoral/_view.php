<?php
/* @var $this SociosPersonaMoralController */
/* @var $data SocioPersonaMoral */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonsocial')); ?>:</b>
	<?php echo CHtml::encode($data->razonsocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->domicilio); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciclos')); ?>:</b>
	<?php echo CHtml::encode($data->ciclos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fondos')); ?>:</b>
	<?php echo CHtml::encode($data->fondos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gerente_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->gerente_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gerente_domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->gerente_domicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representante_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->representante_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representante_domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->representante_domicilio); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_escri_constitucion')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_escri_constitucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_escri_nombra_consejo')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_escri_nombra_consejo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_escri_nombra_gerente')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_escri_nombra_gerente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_escri_nombra_apoderado')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_escri_nombra_apoderado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentacion_acta_asamblea_aproba')); ?>:</b>
	<?php echo CHtml::encode($data->documentacion_acta_asamblea_aproba); ?>
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
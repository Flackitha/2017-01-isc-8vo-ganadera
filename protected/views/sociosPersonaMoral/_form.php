<?php
/* @var $this SociosPersonaMoralController */
/* @var $model SocioPersonaMoral */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'socio-persona-moral-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'razonsocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'domicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rfc'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actividades'); ?>
		<?php echo $form->textField($model,'actividades',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'actividades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciclos'); ?>
		<?php echo $form->textField($model,'ciclos',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'ciclos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fondos'); ?>
		<?php echo $form->textField($model,'fondos',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'fondos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gerente_nombre'); ?>
		<?php echo $form->textField($model,'gerente_nombre',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'gerente_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gerente_domicilio'); ?>
		<?php echo $form->textField($model,'gerente_domicilio',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'gerente_domicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'representante_nombre'); ?>
		<?php echo $form->textField($model,'representante_nombre',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'representante_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'representante_domicilio'); ?>
		<?php echo $form->textField($model,'representante_domicilio',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'representante_domicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_vigencia'); ?>
		<?php echo $form->textField($model,'fecha_vigencia'); ?>
		<?php echo $form->error($model,'fecha_vigencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_registro'); ?>
		<?php echo $form->textField($model,'fecha_registro'); ?>
		<?php echo $form->error($model,'fecha_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad'); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_rfc'); ?>
		<?php echo $form->textField($model,'documentacion_rfc'); ?>
		<?php echo $form->error($model,'documentacion_rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_identificacion'); ?>
		<?php echo $form->textField($model,'documentacion_identificacion'); ?>
		<?php echo $form->error($model,'documentacion_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_escri_constitucion'); ?>
		<?php echo $form->textField($model,'documentacion_escri_constitucion'); ?>
		<?php echo $form->error($model,'documentacion_escri_constitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_escri_nombra_consejo'); ?>
		<?php echo $form->textField($model,'documentacion_escri_nombra_consejo'); ?>
		<?php echo $form->error($model,'documentacion_escri_nombra_consejo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_escri_nombra_gerente'); ?>
		<?php echo $form->textField($model,'documentacion_escri_nombra_gerente'); ?>
		<?php echo $form->error($model,'documentacion_escri_nombra_gerente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_escri_nombra_apoderado'); ?>
		<?php echo $form->textField($model,'documentacion_escri_nombra_apoderado'); ?>
		<?php echo $form->error($model,'documentacion_escri_nombra_apoderado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_acta_asamblea_aproba'); ?>
		<?php echo $form->textField($model,'documentacion_acta_asamblea_aproba'); ?>
		<?php echo $form->error($model,'documentacion_acta_asamblea_aproba'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_constancia_fondo'); ?>
		<?php echo $form->textField($model,'documentacion_constancia_fondo'); ?>
		<?php echo $form->error($model,'documentacion_constancia_fondo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_acta_asamblea'); ?>
		<?php echo $form->textField($model,'documentacion_acta_asamblea'); ?>
		<?php echo $form->error($model,'documentacion_acta_asamblea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_estudio_viabilidad'); ?>
		<?php echo $form->textField($model,'documentacion_estudio_viabilidad'); ?>
		<?php echo $form->error($model,'documentacion_estudio_viabilidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
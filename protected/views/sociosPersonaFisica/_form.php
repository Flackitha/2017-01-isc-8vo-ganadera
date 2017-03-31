<?php
/* @var $this SociosPersonaFisicaController */
/* @var $model SocioPersonaFisica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'socio-persona-fisica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'apellidopaterno'); ?>
		<?php echo $form->textField($model,'apellidopaterno',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'apellidopaterno'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'domicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curp'); ?>
		<?php echo $form->textField($model,'curp',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'curp'); ?>
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
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_rfc'); ?>
		<?php echo $form->checkBox($model,'documentacion_rfc'); ?>
		<?php echo $form->error($model,'documentacion_rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_curp'); ?>
		<?php echo $form->checkBox($model,'documentacion_curp'); ?>
		<?php echo $form->error($model,'documentacion_curp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_identificacion'); ?>
		<?php echo $form->checkBox($model,'documentacion_identificacion'); ?>
		<?php echo $form->error($model,'documentacion_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_constancia_fondo'); ?>
		<?php echo $form->checkBox($model,'documentacion_constancia_fondo'); ?>
		<?php echo $form->error($model,'documentacion_constancia_fondo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_acta_asamblea'); ?>
		<?php echo $form->checkBox($model,'documentacion_acta_asamblea'); ?>
		<?php echo $form->error($model,'documentacion_acta_asamblea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentacion_estudio_viabilidad'); ?>
		<?php echo $form->checkBox($model,'documentacion_estudio_viabilidad'); ?>
		<?php echo $form->error($model,'documentacion_estudio_viabilidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
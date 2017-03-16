<?php
/* @var $this SociosPersonaFisicaController */
/* @var $model SocioPersonaFisica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curp'); ?>
		<?php echo $form->textField($model,'curp',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rfc'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividades'); ?>
		<?php echo $form->textField($model,'actividades',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciclos'); ?>
		<?php echo $form->textField($model,'ciclos',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fondos'); ?>
		<?php echo $form->textField($model,'fondos',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_vigencia'); ?>
		<?php echo $form->textField($model,'fecha_vigencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_registro'); ?>
		<?php echo $form->textField($model,'fecha_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_rfc'); ?>
		<?php echo $form->textField($model,'documentacion_rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_curp'); ?>
		<?php echo $form->textField($model,'documentacion_curp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_identificacion'); ?>
		<?php echo $form->textField($model,'documentacion_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_constancia_fondo'); ?>
		<?php echo $form->textField($model,'documentacion_constancia_fondo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_acta_asamblea'); ?>
		<?php echo $form->textField($model,'documentacion_acta_asamblea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_estudio_viabilidad'); ?>
		<?php echo $form->textField($model,'documentacion_estudio_viabilidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this SociosPersonaMoralController */
/* @var $model SocioPersonaMoral */
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
		<?php echo $form->label($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>60,'maxlength'=>180)); ?>
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
		<?php echo $form->label($model,'gerente_nombre'); ?>
		<?php echo $form->textField($model,'gerente_nombre',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gerente_domicilio'); ?>
		<?php echo $form->textField($model,'gerente_domicilio',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'representante_nombre'); ?>
		<?php echo $form->textField($model,'representante_nombre',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'representante_domicilio'); ?>
		<?php echo $form->textField($model,'representante_domicilio',array('size'=>60,'maxlength'=>300)); ?>
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
		<?php echo $form->textField($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_rfc'); ?>
		<?php echo $form->textField($model,'documentacion_rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_identificacion'); ?>
		<?php echo $form->textField($model,'documentacion_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_escri_constitucion'); ?>
		<?php echo $form->textField($model,'documentacion_escri_constitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_escri_nombra_consejo'); ?>
		<?php echo $form->textField($model,'documentacion_escri_nombra_consejo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_escri_nombra_gerente'); ?>
		<?php echo $form->textField($model,'documentacion_escri_nombra_gerente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_escri_nombra_apoderado'); ?>
		<?php echo $form->textField($model,'documentacion_escri_nombra_apoderado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documentacion_acta_asamblea_aproba'); ?>
		<?php echo $form->textField($model,'documentacion_acta_asamblea_aproba'); ?>
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
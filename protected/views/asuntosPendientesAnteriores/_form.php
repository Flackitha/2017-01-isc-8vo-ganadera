<?php
/* @var $this AsuntosPendientesAnterioresController */
/* @var $model AsuntoPendienteAnterior */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asunto-pendiente-anterior-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'acta_id'); ?>
		<?php echo $form->textField($model,'acta_id'); ?>
		<?php echo $form->error($model,'acta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'concepto_id'); ?>
		<?php echo $form->textField($model,'concepto_id'); ?>
		<?php echo $form->error($model,'concepto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
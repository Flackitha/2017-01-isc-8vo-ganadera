<?php
/* @var $this ActasController */
/* @var $model Acta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'acta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> Son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'c1'); ?>
		<?php echo $form->textField($model,'c1'); ?>
		<?php echo $form->error($model,'c1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c2'); ?>
		<?php echo $form->textField($model,'c2'); ?>
		<?php echo $form->error($model,'c2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c3'); ?>
		<?php echo $form->textField($model,'c3'); ?>
		<?php echo $form->error($model,'c3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c4'); ?>
		<?php echo $form->textField($model,'c4'); ?>
		<?php echo $form->error($model,'c4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c5'); ?>
		<?php echo $form->textField($model,'c5'); ?>
		<?php echo $form->error($model,'c5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c6'); ?>
		<?php echo $form->textField($model,'c6'); ?>
		<?php echo $form->error($model,'c6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c7'); ?>
		<?php echo $form->textField($model,'c7'); ?>
		<?php echo $form->error($model,'c7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c8'); ?>
		<?php echo $form->textField($model,'c8'); ?>
		<?php echo $form->error($model,'c8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c9'); ?>
		<?php echo $form->textField($model,'c9'); ?>
		<?php echo $form->error($model,'c9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c10'); ?>
		<?php echo $form->textField($model,'c10'); ?>
		<?php echo $form->error($model,'c10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
		<?php echo $form->error($model,'año'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
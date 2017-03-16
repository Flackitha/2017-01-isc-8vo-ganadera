<?php
/* @var $this ActasController */
/* @var $model Acta */
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
		<?php echo $form->label($model,'c1'); ?>
		<?php echo $form->textField($model,'c1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c2'); ?>
		<?php echo $form->textField($model,'c2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c3'); ?>
		<?php echo $form->textField($model,'c3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c4'); ?>
		<?php echo $form->textField($model,'c4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c5'); ?>
		<?php echo $form->textField($model,'c5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c6'); ?>
		<?php echo $form->textField($model,'c6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c7'); ?>
		<?php echo $form->textField($model,'c7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c8'); ?>
		<?php echo $form->textField($model,'c8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c9'); ?>
		<?php echo $form->textField($model,'c9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c10'); ?>
		<?php echo $form->textField($model,'c10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
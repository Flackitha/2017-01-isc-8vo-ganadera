<?php
/* @var $this ConceptosActaController */
/* @var $model ConceptoActa */
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
		<?php echo $form->label($model,'acta_id'); ?>
		<?php echo $form->textField($model,'acta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'concepto_id'); ?>
		<?php echo $form->textField($model,'concepto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'checkbox'); ?>
		<?php echo $form->textField($model,'checkbox'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido al <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Este Sistema Web permitirá el registro y control de las Actas Emitidas en Asambleas
	de la Unión Ganadera Regional.</p>

<p>Para iniciar con el uso del Sistema, acceda a la seguridad del mismo en la opción 
	<?php echo CHtml::link('Acceso', array('/site/login')); ?></p>
<p>Las opciones implementadas en este momento son:</p>
<ul>
	<li><?php echo CHtml::link('Captura de Anexo 1-A (Alta de Personas Físicas)', array('/sociosPersonaFisica')); ?></li>
	<li><?php echo CHtml::link('Captura de Anexo 1-B (Alta de Personas Morales)', array('/sociosPersonaMoral')); ?></li>
	<li><?php echo CHtml::link('Captura de Conceptos de Actas', array('/conceptos')); ?></li>
	<li><?php echo CHtml::link('Captura de Actas', array('/actas')); ?></li>
</ul>








<?php echo $anio; ?>
<?php $this->widget('zii.widgets.jui.CJuiAccordion',
array(
	'panels'=>array(
		'Enero'  =>$this->renderPartial('_data',
							array('anio'=>$anio,'mes'=>1),true),
		'Febrero'=>$this->renderPartial('_data',
							array('anio'=>$anio,'mes'=>2),true),
		'Marzo'  =>$this->renderPartial('_data',
							array('anio'=>$anio,'mes'=>3),true),
	),
));
?>
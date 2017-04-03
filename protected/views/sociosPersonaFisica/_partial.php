




<?php echo $anio;?>
<?php $this->widget ('zii.widgets.jui.CJuiAccordion',
 array(
 'panels'=>array(
	'Enero' =>  $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>1), true),
	'Febrero' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>2), true),
	'Marzo' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>3), true),
	'Abril' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>4), true),
	'Mayo' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>5), true),
	'Junio' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>6), true),
	'Julio' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>7), true),
	'Agosto' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>8), true),
	'Septiembre' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>9), true),
	'Octubre' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>10), true),
	'Noviembre' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>11), true),
	'Diciembre' => $this->renderPartial('_data', array('anio'=>$anio, 'mes'=>12), true),
		),
));
?>
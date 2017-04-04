

<?php 	$dataProvider=new CActiveDataProvider('SocioPersonaFisica', 
		array('criteria'=>array('condition'=>'mes='.$mes.' and anio='.$anio)));	?>	
		
		



<?php $this->widget('zii.widgets.CListView', array(

	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>



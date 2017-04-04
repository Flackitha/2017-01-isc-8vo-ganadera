<?php
/* @var $this SociosPersonaFisicaController */
/* @var $model SocioPersonaFisica */
$pdf = Yii::createComponent('application.extensions.tcpdf.tcpdf', 
                            'P', 'cm', 'letter', true, 'UTF-8');
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("Nicola Asuni");
$pdf->SetTitle("TCPDF Example 002");
$pdf->SetSubject("TCPDF Tutorial");
$pdf->SetKeywords("TCPDF, PDF, example, test, guide");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(2.5,1.5,1.5);
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("helvetica", "BU", 12);
//$pdf->Cell(0,0,$model->nombre,0,1,'C');
//$pdf->Cell(anchura,altura,$model->nombre,0,0,'C');  
$pdf->Cell(0,0,"ANEXO-1A",0,1,'C');
$pdf->SetFont("helvetica", "B", 12);
$pdf->Cell(0,0,"FORMATO DE SOLICITUD PARA LA ADMISIÓN DE SOCIO PERSONA FÍSICA",0,1,'C');
$pdf->SetFont("helvetica", "U", 12);
$meses= array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$pdf->Cell(0,1.5,"Escarcega,Campeche, " .date("d",strtotime($model->fecha_registro))." de ".$meses[intval(date("m",strtotime($model->fecha_registro)))-1]." del ".date("Y",strtotime($model->fecha_registro)),0,1,'R');

$pdf->SetFont("helvetica", "", 12);
$pdf->Cell(0,1,"Asamlea General de Socios de Aseguramiento UGRCAMP",0,1,'L');

$pdf->SetFont("helvetica", "", 12);
$pdf->MultiCell(0,0,"Solicito mi admisión como socio de ese fondo de aseguraiento, para lo cual proporciona la informacion y adjunto la documentacion siguiente:",0,'L',0,1, "","",true);

$pdf->SetFont("helvetica", "B", 10);
$pdf->Cell(0,1,"I.      INFORMACION",0,1,'L');

$pdf->SetFont("helvetica", "", 10);
$pdf->Cell(0,0,"1.		Nombre: " .$model->nombre .$model->apellidopaterno . $model->apellidomaterno ,1,1,'L');
$pdf->Cell(0,0,"2.		Domicilio particular: " .$model->domicilio ,1,1,'L');
$pdf->Cell(0,0,"3.		Clave Única de Registro de Poblacion(CURP): " .$model->curp ,1,1,'L');
$pdf->Cell(0,0,"4.		Registro Federal de Contribuyentes(RFC): " .$model->rfc ,1,1,'L');
$pdf->Cell(0,0,"5.		Naturaleza de las actividades: " .$model->actividades ,1,1,'L');
$pdf->Cell(0,0,"6.		Ubicación de los predios o unidades de explotacion: " .$model->ubicacion ,1,1,'L');
$pdf->Cell(0,0,"7.		Numero de ciclos o ejercicio operados a la fecha: " .$model->ciclos ,1,1,'L');
$pdf->Cell(0,0,"8.		Fondo de aseguramiento o instituciones con los que he contratado seguros: " .$model->fondos ,1,1,'L');

$pdf->SetFont("helvetica", "", 10);
$pdf->Cell(0,0," ",0,1,'L');
$pdf->MultiCell(0,1,"9.      (OPCION 1) Bajo formal protesta de decir verdad manifiesto que no pertenezco a algún Fondo de Aseguramiento, por lo que no existeimpedimento establecido en la ley o en los estatuspara que pueda solicitar mi admisión y,en su caso, para que sea socio de ese fondo de aseguramiento",0,'L',0,1, "","",true);
$pdf->MultiCell(0,1,"9.     (OPCION 2) Bajo formal protesta de decir verdad manifiesto que actualmente soy socio del Fondo de Aseguramiento			, con domicilio en 			, y numero telefonico			, el cual no puede otorgarme los servicios de aseguramiento de: 					.",0,'L',0,1, "","",true);
$pdf->MultiCell(0,0,"10.     Declaro que conozco lo establecido en los estatutos y reglamento interno de ese Fondo de Aseguramiento, asi como en la Ley de Fondos de Aseguramiento Agropecuario y Rural y, en caso de que me admitan como socio, manifiesto mi conformidad con cumplir dichas disposiciones. ",0,'L',0,1, "","",true);

$pdf->SetFont("helvetica", "B", 10);
$pdf->Cell(0,1,"II.      DOCUMENTACIÓN",0,1,'L');

$pdf->SetFont("zapfdingbats", "", 10);
if ($model->documentacion_rfc==1)
	$pdf->Cell(0.5,0,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
else
	$pdf->Cell(0.5,0,TCPDF_FONTS::unichr(0),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,0,"Copia de la célula de identificacion fiscal (Registro Federal de Contribuyentes): ",1,'L',0,1, "","",true);

$pdf->SetFont("zapfdingbats", "", 10);
$pdf->Cell(0.5,0,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,0,"Constancia de la CURP: ",1,'L',0,1, "","",true);

$pdf->SetFont("zapfdingbats", "", 10);
$pdf->Cell(0.5,1,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,1,"Copia de identificacion oficial del solicitante persona fisica (de preferencia credencial de elector, pasaporte o cedula profecional)",1,'L',0,1, "","",true);

$pdf->SetFont("zapfdingbats", "", 10);
$pdf->Cell(0.5,2,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,2,"Original de la constancia expedida por el Fondo de Aseguramiento				en la que se describen los servicios de aseguraiento que no puede otorgarme y las razones de esa imposibilidad, en su caso. ",1,'L',0,1, "","",true);

$pdf->SetFont("zapfdingbats", "", 10);
$pdf->Cell(0.5,2,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,2,"Copia del acta de la Asamblea General del Fondo de Aseguramiento 			en la que se acordo mi separación como socio; o, en su defecto, el original del acuse de la solicitud de separación recibida por el Fondo de Aseguramiento				",1,'L',0,1, "","",true);

$pdf->SetFont("zapfdingbats", "", 10);
$pdf->Cell(0.5,2,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,2,"Estudio de viabilidad técnico-económico por cultivo o especies ganadera, en su caso, en el que se precisan los índices de indemnizaciones de los últimos cinco años, así como la información necesaria para determinar mi adquision como socio. ",1,'L',0,1, "","",true);

$pdf->SetFont("helvetica", "B", 12);
//$pdf->Cell(0,1,"	",0,1,'C');
$pdf->Cell(0,1,"Atentamente",0,1,'C');
$pdf->SetFont("helvetica", "BU", 12);
$pdf->Cell(0,0,"__________________",0,1,'C');
$pdf->SetFont("helvetica", "B", 12);
$pdf->Cell(0,0,"1.		Nombre: " .$model->nombre ,1,1,'L');

   
$pdf->Output("ANEXO_1A_" .$model->curp.".pdf", "D");
Yii::app()->end();


// $this->breadcrumbs=array(
	// 'Socio Persona Fisicas'=>array('index'),
	// 'Create',
// );

// $this->menu=array(
	// array('label'=>'Lista de Personas Fisicas', 'url'=>array('index')),
	// array('label'=>'Administrar Personas Fisicas', 'url'=>array('admin')),
// );
?>

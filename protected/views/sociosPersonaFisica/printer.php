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
$pdf->Cell(0,0,"1.		Nombre: " .$model->nombre ,1,1,'L');
$pdf->Cell(0,0,"2.		Domicilio particular: " .$model->domicilio ,1,1,'L');
$pdf->Cell(0,0,"3.		Clave Única de Registro de Poblacion(CURP): " .$model->curp ,1,1,'L');
$pdf->Cell(0,0,"4.		Registro Federal de Contribuyentes(RFC): " .$model->rfc ,1,1,'L');
$pdf->Cell(0,0,"5.		Naturaleza de las actividades: " .$model->actividades ,1,1,'L');
$pdf->Cell(0,0,"6.		Ubicación de los predios o unidades de explotacion: " .$model->ubicacion ,1,1,'L');
$pdf->Cell(0,0,"7.		Numero de ciclos o ejercicio operados a la fecha: " .$model->ciclos ,1,1,'L');
$pdf->Cell(0,0,"8.		Fondo de aseguramiento o instituciones con los que he contratado seguros: " .$model->fondos ,1,1,'L');

$pdf->SetFont("helvetica", "", 10);
$pdf->Cell(0,0," ",0,1,'L');
$pdf->MultiCell(0,1,"9.      (OPCION 1) Bajo formal protesta",0,'L',0,1, "","",true);
$pdf->MultiCell(0,1,"9.     (OPCION 2) ",0,'L',0,1, "","",true);
$pdf->MultiCell(0,0,"10.     Declaro ",0,'L',0,1, "","",true);

$pdf->SetFont("helvetica", "B", 10);
$pdf->Cell(0,1,"II.      DOCUMENTACIÓN",0,1,'L');

$pdf->SetFont("zapfdingbats", "", 10);
if ($model->documentacion_rfc==1)
	$pdf->Cell(0.5,0,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
else
	$pdf->Cell(0.5,0,TCPDF_FONTS::unichr(0),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,0,"1.		Nombre: ",1,'L',0,1, "","",true);

$pdf->SetFont("zapfdingbats", "", 10);
$pdf->Cell(0.5,0,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,0,"1.		Nombre: ",1,'L',0,1, "","",true);

$pdf->SetFont("zapfdingbats", "", 10);
$pdf->Cell(0.5,1,TCPDF_FONTS::unichr(52),1,0,'C', false,"",0,false,"T","M");
$pdf->SetFont("helvetica", "B", 10);
$pdf->MultiCell(0,1,"Copia de identificacion oficial del solicitante persona fisica (de preferencia credencial de elector, pasaporte o cedula profecional)",1,'L',0,1, "","",true);
   
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

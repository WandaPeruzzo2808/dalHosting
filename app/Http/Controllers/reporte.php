<?php

namespace App\Http\Controllers;

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// usamos los espacios de nombres para el paquete de PhpSpreadsheet 
 

 
class reporte extends Controller {
// Creamos nuestro constructor en este caso para cargar algún modelo
public function __construct() {
parent::__construct();
// $this->load->model('alumno_model');
}
 
public function index(){
$this->load->view('welcome_message');
}
 
// NUESTRO ARCHIVO EN PDF
public function pdf(){
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output('hola_mudo.pdf', 'I');
}
 
// NUESTRO ARCHIVO EN EXCEL
public function excel(){
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');
$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="hello world.xlsx"');
header('Cache-Control: max-age=0');
$writer->save('php://output');
}
 
// NUESTRO ARCHIVO EN WORD
public function word(){
$phpWord = new \PhpOffice\PhpWord\PhpWord();
 
$section = $phpWord->addSection();
 
$section->addText('"Learn from yesterday, live for today, hope for tomorrow. '
. 'The important thing is not to stop questioning." '
. '(Albert Einstein)');
 
$section->addText('Great achievement is usually born of great sacrifice, '
. 'and is never the result of selfishness. (Napoleon Hill)',
array('name' => 'Tahoma', 'size' => 10));
 
$fontStyleName = 'oneUserDefinedStyle';
$phpWord->addFontStyle($fontStyleName,
array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true));
         
$section->addText('"The greatest accomplishment is not in never falling, '
. 'but in rising again after you fall." '
. '(Vince Lombardi)',
$fontStyleName);
 
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(true);
$fontStyle->setName('Tahoma');
$fontStyle->setSize(13);
$myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
$myTextElement->setFontStyle($fontStyle);
 
$file = 'HelloWorld.docx';
header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');
$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
}
 
}
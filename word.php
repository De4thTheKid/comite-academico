<?php
require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

// 
$data = json_decode(file_get_contents('php://input'), true);
$numUnidades1 = 0;
foreach ($data['unidades'] as $index => $unidad) {
    $numUnidad = $index + 1;
    $numUnidades1 = $index + 1;
}
if ($numUnidades1 === 1) {
    $templatePath = 'plantilla.docx';
} else if ($numUnidades1 === 2) {
    $templatePath = 'plantilla2.docx';
} else if ($numUnidades1 === 3) {
    $templatePath = 'plantilla3.docx';
} else {
    $templatePath = 'plantilla.docx';
}
// $templatePath = 'plantilla.docx';


$templateProcessor = new TemplateProcessor($templatePath);


$templateProcessor->setValue('asignatura', $data['asignatura']);
$templateProcessor->setValue('profesor', $data['profesor']);
$templateProcessor->setValue('horas', $data['duracion']);
$templateProcessor->setValue('competencia', $data['competencia']);
$templateProcessor->setValue('objetivoga', $data['objetivoGeneral']);
$templateProcessor->setValue('cuatrimestre', $data['cuatrimestre']);
$templateProcessor->setValue('familia', $data['familia']);

$totalSemanas = 0;
$totalSaber = 0;
$totalHacer = 0;
$numUnidades = 0;

foreach ($data['unidades'] as $index => $unidad) {
    $numUnidad = $index + 1;
    $numUnidades = $index + 1;
    $templateProcessor->setValue("uaa{$numUnidad}", $unidad['unidadAprendizaje']);
    $templateProcessor->setValue("competenciaespua{$numUnidad}", $unidad['competenciaEspecifica']);
    $templateProcessor->setValue("semanas{$numUnidad}", $unidad['numeroSemanas']);
    $templateProcessor->setValue("resultado{$numUnidad}", $unidad['resultadoAprendizaje']);
    $templateProcessor->setValue("saber{$numUnidad}", $unidad['saber']);
    $templateProcessor->setValue("hacer{$numUnidad}", $unidad['hacerSer']);

    $totalSemanas += $unidad['numeroSemanas'];
    $totalSaber += $unidad['saber'];
    $totalHacer += $unidad['hacerSer'];
}

$templateProcessor->setValue('semanastotal', $totalSemanas);
$templateProcessor->setValue('sabertotal', $totalSaber);
$templateProcessor->setValue('hacertotal', $totalHacer);
// if($numUnidades === 1 ){
//     $outputFile = 'PlanEstudiosGenerado1.docx';
// }
// if($numUnidades === 2 ){
//     $outputFile = 'PlanEstudiosGenerado2.docx';
// }
// if($numUnidades === 3 ){
//     $outputFile = 'PlanEstudiosGenerado3.docx';
// }

// $templateProcessor->deleteBlock('uaa');




// $outputFile = 'PlanEstudiosGenerado.docx';
$outputFile = 'PlanEstudiosGenerado.docx';
$templateProcessor->saveAs($outputFile);



header("Content-Description: File Transfer");
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
header("Content-Disposition: attachment; filename=\"$outputFile\"");
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
header("Content-Length: " . filesize($outputFile)); 
readfile($outputFile);
exit;

<?php
require 'vendor/autoload.php'; // Incluye el autoloader de Composer

$objPHPExcel = new \PHPExcel();
$objPHPExcel->setActiveSheetIndex(0);
$sheet = $objPHPExcel->getActiveSheet();

$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Razón Social del Cliente');
$sheet->setCellValue('C1', 'Vehiculo Autorizado');
$sheet->setCellValue('D1', 'Carga');
$sheet->setCellValue('E1', 'Muelle');
$sheet->setCellValue('F1', 'Fecha y hora de Cita');
$sheet->setCellValue('G1', 'Hora de salida');

// Obtén datos de la base de datos
$data = mysqli_query($db, "SELECT * FROM citas");
$no = 2;

while ($citas = mysqli_fetch_array($data)) {
    $sheet->setCellValue('A' . $no, $no - 1);
    $sheet->setCellValue('B' . $no, $citas['cliente']);
    $sheet->setCellValue('C' . $no, $citas['vehiculo']);
    $sheet->setCellValue('D' . $no, $citas['carga']);
    $sheet->setCellValue('E' . $no, $citas['muelle']);
    $sheet->setCellValue('F' . $no, $citas['fecha']);
    $sheet->setCellValue('G' . $no, $citas['salida']);
    $no++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="citas_excel.xls"');
header('Cache-Control: max-age=0');

$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>

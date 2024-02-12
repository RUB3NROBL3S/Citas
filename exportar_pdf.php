<?php
require 'vendor/autoload.php'; // Incluye el autoloader de Composer

$pdf = new TCPDF();
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->AddPage();
$pdf->SetFont('dejavusans', '', 12);

// Obtén datos de la base de datos
$data = mysqli_query($db, "SELECT * FROM citas_virtual");
$no = 1;

$html = '<table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Razón Social del Cliente</th>
                    <th>Vehiculo Autorizado</th>
                    <th>Carga</th>
                    <th>Muelle</th>
                    <th>Fecha y hora de Cita</th>
                    <th>Hora de salida</th>
                </tr>
            </thead>
            <tbody>';

while ($citas = mysqli_fetch_array($data)) {
    $html .= "<tr>
                <td>{$no}</td>
                <td>{$citas['cliente']}</td>
                <td>{$citas['vehiculo']}</td>
                <td>{$citas['carga']}</td>
                <td>{$citas['muelle']}</td>
                <td>{$citas['fecha']}</td>
                <td>{$citas['salida']}</td>
            </tr>";
    $no++;
}

$html .= '</tbody></table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('citas_pdf.pdf', 'D');
?>

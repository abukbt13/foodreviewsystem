<?php
include '../connection.php';
if(isset($_POST['report'])){
    $from = date('Y-m-d', strtotime($_POST['from'])); // format 'from' date as yyyy-mm-dd
    $to = date('Y-m-d', strtotime($_POST['to'])); // format 'to' date as yyyy-mm-dd

}
$sql="SELECT * FROM orders WHERE date BETWEEN '$from' AND '$to'";
$sqlrun=mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($sqlrun, MYSQLI_ASSOC);

// reference the Dompdf namespace
require_once '../vendor/autoload.php';



use Dompdf\Dompdf;

$html = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>items on bid</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<style>
td,th{
border: 2px solid #ddd;
}
</style>
    <div style="background: #7C125; padding-left: 4rem;">
        <div class="tems">

        <h2 style="text-align: center;">Orders from '.date('d-m-Y', strtotime($from)).' to '.date('d-m-Y', strtotime($to)).'</h2>
        
        <table style="border-collapse: collapse; border: 2px solid #6AE512">
            <thead>
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
        ';


foreach ($rows as $row) {
    $html .= '<tr>
            <td>' . $row['name'] . '</td>
            <td>' . $row['price'] . '</td>
            <td>' . $row['date'] . '</td>
</tr>';
}
$html .= '</tbody>
        </table>
        </div>
    </div>
</body>
</html>';
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('orders.pdf', array('Attachment' => 0));




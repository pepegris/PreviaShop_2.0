<?php

require 'conexion.php';

		
		

		
$consulta="SELECT * FROM configuracion";
$empresa=sqlsrv_query($conn,$consulta);

$datos=sqlsrv_fetch_array($empresa);

    $empresa=$datos['empresa'];
    $rif=$datos['rif'];
    $razon_social=$datos['razon_social'];
    $numero=$datos['numero'];
    $direcion=$datos['direcion'];
    $iva=$datos['iva'];
    $tasa_dia=$datos['tasa_dia'];
    
    $tasa=number_format($tasa_dia, 2, ',', '.');
		



?>
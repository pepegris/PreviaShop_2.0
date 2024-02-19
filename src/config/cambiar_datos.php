<?php
  require '../includes/log.php';
include '../includes/loading.php';

if (isset($_POST)) {
    require '../includes/conexion.php';

  //  var_dump($_POST);
    $empresa=isset($_POST ['empresa']) ? sqlsrv_escape_string($conn,$_POST['empresa']):false ;
    $rif=isset($_POST ['rif']) ? sqlsrv_escape_string($conn,trim($_POST ['rif'])) :false;
    $razon_social=isset($_POST ['razon_social']) ? sqlsrv_escape_string($conn,$_POST ['razon_social']) : false;
    $numero=isset($_POST ['numero']) ? sqlsrv_escape_string($conn,$_POST ['numero']) :false;
    $direcion=isset($_POST ['direcion']) ? sqlsrv_escape_string($conn,$_POST ['direcion']) : false;

    
    if ($conn) {
        $sql= "UPDATE configuracion SET empresa='$empresa',rif='$rif',razon_social='$razon_social',numero='$numero',direcion='$direcion' WHERE ref =0 ";
 
        $guardar = sqlsrv_query($conn,$sql);

        if (!$guardar) {
           
          $error=sqlsrv_last_error($conn);
           echo "<br><center><h3>ERROR</h3></center>";
           echo "<h4>$error</h4>";
            echo "<a href='inicio.php' class='btn btn-danger'>Salir</a>";
           die();
           
            
            
        }else {
            header('refresh:2;url= inicio.php');
            exit;
        }

            
 
    }
  









}















?>
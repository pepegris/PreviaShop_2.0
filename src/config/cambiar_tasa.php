<?php
 require '../includes/log.php';
include '../includes/loading.php';

if (isset($_POST)) {
    require '../includes/conexion.php';



    
/*     $tasa=isset($_POST ['tasa_dia']) ? sqlsrv_escape_string($conn,trim($_POST ['tasa_dia'])) :false;
    $iva=isset($_POST ['iva']) ? sqlsrv_escape_string($conn,trim($_POST ['iva'])) :false; */
    $tasa=$_POST ['tasa_dia'];
    $iva=$_POST ['iva'];

    if ($conn) {







       if ($tasa ==true) {

                        $sql= "UPDATE configuracion SET tasa_dia=$tasa WHERE ref =0 ";
                
                        $guardar = sqlsrv_query($conn,$sql);

                        if (!$guardar) {
                            
                            $error= sqlsrv_errors($conn);
                            
                            echo "<br><center><h3>ERROR</h3></center>";
                            echo "<h4>$error</h4>";   
                            echo "<a href='inicio.php' class='btn btn-danger'>Salir</a>";
                            die();
                            
                        }else {
                            header('refresh:2;url= inicio.php');
                            exit;
                        }


       } elseif ($iva==true) {

                        $sql= "UPDATE configuracion SET iva=$iva WHERE ref =0 ";
                
                        $guardar = sqlsrv_query($conn,$sql);

                        if (!$guardar) {
                        
                            $error=sqlsrv_errors($conn);
                            echo "<br><center><h3>ERROR</h3></center>";
                            echo "<h4>$error</h4>";
                            echo "<a href='inicio.php' class='btn btn-danger'>Salir</a>";
                            die();
                            
                        }else {
                            header('refresh:2;url= inicio.php');
                            exit;
                        }

       }













            
 
    }else {
        
        header('refresh:1;url= inicio.php');
        exit;
    }
  









}else {
            header('refresh:1;url= inicio.php');
            exit;
        }















?>
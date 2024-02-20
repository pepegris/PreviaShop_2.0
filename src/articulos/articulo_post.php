
<?php

require '../includes/log.php';
include '../includes/loading.php';



if (isset($_FILES) && isset($_POST)) {
    require '../includes/conexion.php';

    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo_imagen   = $_FILES['imagen']['type'];
    $tam_imagen    = $_FILES['imagen']['size'];



    /*     $art_des=isset($_POST ['art_des']) ? sqlsrv_escape_string($conn,$_POST['art_des']):false ;
    $co_art_1=isset ($_POST ['co_art']) ? sqlsrv_escape_string($conn,$_POST ['co_art'] ): false ;
    $ref_art=isset($_POST ['ref_art']) ? sqlsrv_escape_string($conn,trim($_POST ['ref_art'])) : false;
    $stock=isset($_POST ['stock']) ? sqlsrv_escape_string($conn,trim($_POST ['stock'])) :false;
    $linea_des=isset($_POST ['linea_des']) ? sqlsrv_escape_string($conn,$_POST['linea_des']):false ; */

    $art_des = $_POST['art_des'];
    $co_art_1 = $_POST['co_art'];
    $ref_art = $_POST['ref_art'];
    $stock = $_POST['stock'];
    $linea_des = $_POST['linea_des'];

    //PONE EN MINUSCULA
    $co_art = mb_strtolower($co_art_1);

    if ($tam_imagen <= 10000000) {

        if ($tipo_imagen == "image/jpeg" or $tipo_imagen == "image/jsqlsrv" or $tipo_imagen == "image/png" or $tipo_imagen == "image/gif") {


            //almacenando nombre y direccion de la imagen

            $art_img = $co_art . '_' . $nombre_imagen;




            //insertando datos en la base de dato

            if ($conn) {



                $sql = "INSERT INTO art (co_art,linea_des,ref_art,prec_vta1,prec_vta2,stock,stock2,art_des,img1,img2,img3,img4,auditoria,fecha) 
                        VALUES ('$co_art','$linea_des',$ref_art,null,null,$stock,null,'$art_des','$art_img',null,null,null,'$cuenta_on',getdate())";

                $guardar = sqlsrv_query($conn, $sql);



                if (!$guardar) {


                    //mandando mensaje de error de la base de datos

                    $error = sqlsrv_errors($conn);
                    echo "<br><center><h3>ERROR</h3></center>";
                    echo "<h4>$error</h4>";


                    echo "<a href='articulos.php' class='btn btn-danger'>Salir</a>";
                    die();
                } else {

                    //ruta del destino del servidor
                    #$carpeta = $_SERVER['DOCUMENT_ROOT'] . '/php/PreviaShop_2.0/src/uploads/img/';
                    #$carpeta = $_SERVER['DOCUMENT_ROOT'] . '../uploads/img/';
                    //mover imagen a directorio temporal
                    #move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $art_img);
                    move_uploaded_file($_FILES['imagen']['tmp_name'], "../uploads/img/$art_img");
                    header('refresh:1;url= articulos.php');
                    exit;
                }
            } else {


                echo "<a href='articulos.php' class='btn btn-danger'>Salir</a>";
                die("La conexión ha fallado: " . sqlsrv_connect($conn));
            }
        } else {
            echo "<center><h3>Por favor suba una imagen valida /Jsqlsrv/JPEG/PNG/GIF: </h3> <p>$tipo_imagen</p></center>";
            echo "<a href='articulos.php' class='btn btn-danger'>Salir</a>";
            die();
        }
    } else {
        echo "<center><h3>Ingrese una imagen de un tamnaño inferior a 10MB: </h3> <p>$tam_imagen</p></center>";
        echo "<a href='articulos.php' class='btn btn-danger'>Salir</a>";
        die();
    }
} else {
    header('location: articulos.php');
    exit;
}

















?>














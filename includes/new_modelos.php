<h1>Nuevos Modelos</h1>

<div id="modelos">
    <?php
    $sql_art = "SELECT TOP 4 id,co_art,linea_des,ref_art,art_des,img1 FROM art ORDER BY fecha DESC   ";
    $consulta_art = sqlsrv_query($conn, $sql_art);
    $n = 1;
    while ($res = sqlsrv_fetch_array($consulta_art)) {

        $id = $res['id'];
        $co_art = $res['co_art'];
        $articulo = ucwords($co_art);
        $linea_des = $res['linea_des'];
        $ref_art = $res['ref_art'];
        $art_des = $res['art_des'];
        $img1 = $res['img1'];

        switch ($n) {
            case 1:
                $elemento = 'uno';
                break;
            case 2:
                $elemento = 'dos';
                break;
            case 3:
                $elemento = 'tres';
                break;
            case 4:
                $elemento = 'cuatro';
                break;

            default:
                # code...
                break;
        }

        $n++;
    ?>

        <div id="elemento" class="<?= $elemento ?>">
            <img src="src/uploads/img/<?= $img1 ?>" alt="">
            <h3><?= $co_art ?></h3>
            <p><?= $linea_des ?></p>
            <br>
            <a href="" target="blank" class="btn bg-primary">Observar</a>
        </div>

    <?php } ?>
    <!-- carousel --><!-- carousel -->
    <!-- carousel --><!-- carousel -->


    <div class="images-section">
        <?php
        $sql_art = "SELECT TOP 4 id,co_art,linea_des,ref_art,art_des,img1 FROM art ORDER BY fecha DESC   ";
        $consulta_art = sqlsrv_query($conn, $sql_art);
        $n = 1;
        while ($res = sqlsrv_fetch_array($consulta_art)) {

            $id = $res['id'];
            $co_art = $res['co_art'];
            $articulo = ucwords($co_art);
            $linea_des = $res['linea_des'];
            $ref_art = $res['ref_art'];
            $art_des = $res['art_des'];
            $img1 = $res['img1'];

        ?>
            <div class="item">
                <div class="imagen">
                    <img style="width: 150px; height: 150px; border-radius: 20px; margin-right: 20px;" src="src/uploads/img/<?= $img1 ?>">
                </div>
                <div class="info">
                    <h3><?= $co_art ?></h3>
                    <p><?= $linea_des ?></p>
                    <a href="" target="blank" class="btn bg-primary">Observar</a>

                </div>
            </div>

            <!-- carousel --><!-- carousel -->
            <!-- carousel --><!-- carousel -->

        <?php } ?>
    </div>
    <div class="arrows">
        <div class="fas fa-arrow-left"></div>
        <div class="fas fa-arrow-right"></div>
    </div>


</div>
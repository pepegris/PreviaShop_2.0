<h1>Nuevos Modelos</h1>

<div id="modelos">
<?php 
        $sql_art = "SELECT co_art,art_des,linea_des,ref_art,img1 FROM art ORDER BY fecha DESC LIMIT 9  ";
        $consulta_art = sqlsrv_query($conn,$sql_art);

        while ($res=sqlsrv_fetch_array($consulta_art)) {

                $id=$res['id'];
                $co_art=$res['co_art'];
                    $articulo=ucwords($co_art);
                $linea_des=$res['linea_des'];
                $ref_art=$res['ref_art'];
                $art_des=$res['art_des'];
                $img1=$res['img1'];

                if ($linea_des=='Punto de Venta') {
                    $linea_des='punto';
                }
?>

    <div id="elemento" class="uno">
        <img src="img/producto-01.jpg" alt="">
        <h3>Your Article Title Goes Here</h3>
        <p>Texto</p>
        <br>
        <a href="" target="blank" class="btn bg-primary">Observar</a>
    </div>



    <div id="elemento" class="dos">
        <img src="img/producto-02.jpg" alt="">
        <h3>Your Article Title Goes Here</h3>
        <p>Texto</p>
        <br>
        <a href="" target="blank" class="btn bg-primary">Observar</a>
    </div>


    <div id="elemento" class="tres">
        <img src="img/producto-03.jpg" alt="">
        <h3>Your Article Title Goes Here</h3>
        <p>Texto</p>
        <br>
        <a href="" target='blank' class="btn bg-primary">Observar</a>
    </div>



    <div id="elemento" class="cuatro">
        <img src="img/goma.jpg" alt="">
        <h3>Your Article Title Goes Here</h3>
        <p>Texto</p>
        <br>
        <a href="" target="blank" class="btn bg-primary">Observar</a>
    </div>
    <?php } ?>
    <!-- carousel --><!-- carousel -->
    <!-- carousel --><!-- carousel -->
    <div class="images-section">
        <div class="item">
            <div class="imagen">
                <img style="width: 150px; height: 150px; border-radius: 20px; margin-right: 20px;"
                    src="img/producto-01.jpg">
            </div>
            <div class="info">
                <h3>Your Article Title Goes Here</h3>
                <p>Texto</p>
                <a href="" target="blank" class="btn bg-primary">Observar</a>

            </div>
        </div>
        <div class="item">
            <div class="imagen">
                <img style="width: 150px; height: 150px; border-radius: 20px; margin-right: 20px;"
                    src="img/producto-02.jpg">
            </div>
            <div class="info">
                <h3>Your Article Title Goes Here</h3>
                <p>Texto</p>
                <a href="https://pepegris.github.io/cactus_0.5/" target="blank"
                    class="btn bg-primary">Observar</a>

            </div>
        </div>
        <div class="item">
            <div class="imagen">
                <img style="width: 150px; height: 150px; border-radius: 20px; margin-right: 20px;"
                    src="img/producto-03.jpg">
            </div>
            <div class="info">
                <h3>Your Article Title Goes Here</h3>
                <p>Texto</p>
                <a href="https://drcareautomotriz.com/" target='blank' class="btn bg-primary">Observar</a>

            </div>
        </div>
        <div class="item">
            <div class="imagen">
                <img style="width: 150px; height: 150px; border-radius: 20px; margin-right: 20px;"
                    src="img/goma.jpg">
            </div>
            <div class="info">
                <h3>Your Article Title Goes Here</h3>
                <p>Texto</p>
                <a href="https://pepegris.github.io/PreviaShop_2.0/" target="blank"
                    class="btn bg-primary">Observar</a>

            </div>
        </div>

        <!-- carousel --><!-- carousel -->
        <!-- carousel --><!-- carousel -->


    </div>
    <div class="arrows">
        <div class="fas fa-arrow-left"></div>
        <div class="fas fa-arrow-right"></div>
    </div>


</div>
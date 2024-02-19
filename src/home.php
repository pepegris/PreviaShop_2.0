<!DOCTYPE HTML>

<html>

<head>
    <title>Sistema Rocky</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel='shortcut icon' href='favicon.ico' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Estilos personal CSS -->
    <link rel="stylesheet" href="assets/css/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/login/animations.css">
    <link rel="stylesheet" href="assets/css/login/a_estilo.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>


</head>
<style>
    #celda {


        margin-left: 10px;
    }


    #celda2 {

        margin-left: 10px;
    }

    a:hover {
        border-bottom-color: transparent;
        color: #FFFF00 !important;
    }


    a:active {
        color: #FFFF00 !important;
    }

    #header .logo:hover strong {
        background-color: #AF0000;
    }

    #header .logo:active strong {
        background-color: #AF0000;
    }
</style>


<body class="is-preload">

    <!-- Wrapper -->


    <!-- Header -->
    <header id="header" class="alt">
        <a href="index.html" class="logo"><strong>Sistema</strong> <span>Rocky</span></a>

    </header>

    <!-- Menu -->


    <form class="slideUp" method="POST" action="auntenticando.php">
        <div id="login" class="z-depth-5">
            <div id="sistema">
                <h2>Rocky</h2>
                <div class="row" id="celda">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">

                                <input type="text" id="autocomplete-input" name="user" class="autocomplete">
                                <label for="autocomplete-input">Usuario</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="celda2">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">

                                <input type="password" name="pass" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Contraseña</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn ">Entrar</button>
                <br>

            </div>





        </div>
    </form>

    <!-- Scripts -->


    <script src="css/materialize/js/materialize.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
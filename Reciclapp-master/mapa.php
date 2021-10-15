<!DOCTYPE html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Reciclapp</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />

</head>

<body>

    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <div class="logo">
                <a href="index.html"><img src="images/logo.png"></img></a>
                </div>

                <ul class="nav-items">
                    <li>
                        <a href="#">Calculadora</a>
                    </li>
                    <li>
                        <a href="cadastrar.php">Cadastrar Empresa</a>
                    </li>
                    <li>
                        <a href="#">Explicações</a>
                    </li>
                    <li>
                        <a href="#">Materiais</a>
                    </li>
                    <li>
                        <a href="#">Cadastrar Catador</a>
                    </li>
                    <li>
                        <a href="mapa.php">Acessar GPS</a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>

    <div id="map">
        <script src="./index.js"></script>
    </div>
    <br><br>

    <a href="cadastrar.php">Cadastrar</a>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZQl37856wOY-9zFqtQJ5u2YLW8Y0et-I&callback=initMap&v=weekly&callback=initMap">
    </script>
</body>

</html>
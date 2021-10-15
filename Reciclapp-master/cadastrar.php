<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Cadastrar</title>
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

    <a href="mapa.php">Mapa</a><br><br>
    <?php
    //Se o cadastro for feito com sucesso, printar a mensagem na global e limpar global
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="processa_cad.php">
        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome da Empresa ou Filial"><br><br>

        <label>Endereço: </label>
        <input type="text" name="address" placeholder="Digite o número e o Logradouro"><br><br>

        <label>Latitude: </label>
        <input type="text" name="lat" placeholder="Digite a latitude"><br><br>

        <label>Longitude: </label>
        <input type="text" name="lng" placeholder="Digite a Longitude"><br><br>

        <label>Tipo da Empresa: </label>
        <input type="text" name="type" placeholder="Reciclagem de Plástico,..."><br><br>

        <input type="submit" value="Cadastrar"><br><br>
    </form>
</body>

</html>
<?php 
    session_start();
    ob_start(); // Limpa o buffer antes de redirecionar
    include_once("conexao.php");

    //Recebe os dados do form
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //FILTER DEFAULT converte tudo pra string

    //Salva os dados no bd
    $result_markers = "INSERT INTO markers (name, address, lat, lng, type)
                      VALUES
                      ('".$dados['name']."', '".$dados['address']."', '".$dados['lat']."', '".$dados['lng']."', '".$dados['type']."')";
    
    $execute_markers =  mysqli_query($conn, $result_markers);
    
    //Exibe as mensagens de cadastro (provisório)
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<span style='color: green';>Endereço cadastrado com sucesso!</span>";
        header("Location: cadastrar.php");
    }else{
        $_SESSION['msg'] = "<span style='color: red';>Erro: Endereço não foi cadastrado com sucesso!</span>";
        header("Location: cadastrar.php");	
    }

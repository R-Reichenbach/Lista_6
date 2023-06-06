<?php

    include("conexao.php");
    

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = date('d/m/y');

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado,
    telefone, celular, email, dt_cadastro)";

    $sql .= " VALUES ('".$nome."', '".$apelido."', '".$endereco."', '".$bairro."', 
    '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."',' " .$dt_cadastro."')";


    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";
?>
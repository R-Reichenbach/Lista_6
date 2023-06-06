<?php 
    include('conexao.php');
    
    $id_agenda = $_GET['id_agenda'];
    $sql = "select * from agenda where id_agenda = $id_agenda";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h1>Cadastro de Usuários - IFSP</h1>
    <form action="altera_agenda_exe.php" method="POST" enctype="multipart/form-data">
    <input name ="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
    
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div>
        <label for="apelido">Apelido</label>
        <input type="text" name="apelido" id="apelido">
    </div>

    <div>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco">
    </div>

    <div>
        <label for="bairro">Bairro</label>
        <input type="bairro" name="bairro" id="bairro">
    </div>
        
    <div>
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade">
    </div>

    <div>
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado">
    </div>

    <div>
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone" placeholder="Formato (18) 99999-8888"
        pattern="\([0-9]{2}\)([9]{1}))?[0-9]{4-5}-[0-9]{4}">
    </div>

    <div>
        <label for="celular">Celular</label>
        <input type="text" name="celular" id="celular">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>


    <button type="submit">Alterar</button>
</form>
</body>
</html>
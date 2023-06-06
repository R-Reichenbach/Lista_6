<?php 
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "delete from agenda where id_agenda = '$id_agenda'";

    echo "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados excluídos com sucesso!";
    else
    echo "Erro ao tentar excluir!";

?>
<br>
<a href="listar_agenda.php">Voltar</a>
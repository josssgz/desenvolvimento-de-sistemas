<?php 
    
    $idTarefa = $_GET['id'] ?? null;

    if(is_null($idTarefa)){
        header("Location: dashboard.php");
    }

    require "banco.php";

    $sql = "SELECT * FROM tarefas WHERE id=$idTarefa";
    $resp = $banco->query($sql);
    // var_dump($resp);

    $tarefa = $resp->fetch_object();
    var_dump($tarefa);

?>

<hr>
<form action="att-tarefa.php" method="post">
    Editar Tarefa <br> 
    <input type="text" value="<?=$tarefa->texto?>">
    <input type="submit" value="Atualizar">
</form>
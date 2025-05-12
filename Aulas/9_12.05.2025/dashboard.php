<?php
    session_start();
    $idUsuario = $_SESSION["id_usuario"] ?? null;
    $usuario = $_SESSION["usuario"] ?? null;

    if(is_null($idUsuario)){
        header("Location: login.php");
    }

    require "banco.php";

    $sql = "SELECT * FROM tarefas WHERE id_usuario='$idUsuario'"; 
    $resp = $banco->query($sql);
    // var_dump($resp);

    /*echo "<pre>";
    $tarefa = $resp->fetch_object();
    print_r($tarefa);
    echo "</pre>";*/

    echo "<h3>Tarefas de $usuario:</h3>";
    while($tarefa = $resp->fetch_object()){
        echo "<br> [ " . $tarefa->id . " ] - " . $tarefa->texto . " <a href='apagar-tarefa.php?id=" . $tarefa->id . "' onclick=\"return confirm('Tem certeza que deseja apagar esta tarefa?');\">[apagar]</a>";
        echo "[<a href='editar-tarefa.php?id=$tarefa->id'>editar</a>]";
    }

?>

<hr>
<form action="add-tarefa.php" method="post">
    Nova Tarefa <br>
    <input type="text" name="tarefa">
    <input type="submit" value="Adicionar">
</form>
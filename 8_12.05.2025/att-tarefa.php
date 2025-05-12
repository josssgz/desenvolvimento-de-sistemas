<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST"){

        require "banco.php";
        session_start();
        $idUsuario = $_SESSION["id_usuario"] ?? null;
        

    }
    
    // header("Location: dashboard.php");

?>

<hr>
<form action="att-tarefa.php" method="post">
    Atualizar Tarefa <br> 
    <input type="text" name="tarefaAtt">
    <input type="submit" value="Atualizar">
</form>
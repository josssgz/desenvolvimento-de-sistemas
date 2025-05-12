<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST"){

        require "banco.php";
        session_start();
        $idUsuario = $_SESSION["id_usuario"] ?? null;


            

    }

?>
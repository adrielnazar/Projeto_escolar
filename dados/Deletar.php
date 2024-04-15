<?php

    if(!empty($_GET['idDireção'])){
        include("../config.php");
        $id = $_GET['idDireção'];
        $sqlSelect = "SELECT * FROM direção WHERE idDireção=$id";
        $result = $conexao->query($sqlSelect);

        if ($result->num_rows > 0) {
            $sqlDelete = "DELETE FROM direção WHERE idDireção=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }

    }
    header('Location:../Pages/Direção/DadosDirecao.php');

?>
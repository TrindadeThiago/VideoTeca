<?php

    if(isset($_POST['btn'])) {

        if(!empty($_POST['titulo']) && !empty($_POST['duracao']) && !empty($_POST['genero']) && !empty($_POST['ano']) && !empty($_POST['estudio']) && !empty($_POST['pais']) && !empty($_POST['diretor']) && !empty($_POST['sinopse'])) {

            if(!is_numeric($_POST['titulo']) && !is_numeric($_POST['estudio']) && !is_numeric($_POST['diretor']) && !is_numeric($_POST['sinopse'])) {

                $titulo = $_POST['titulo'];
                $duracao = $_POST['duracao'];
                $genero = $_POST['genero'];
                $ano = $_POST['ano'];
                $estudio = $_POST['estudio'];
                $pais = $_POST['pais'];
                $diretor = $_POST['diretor'];
                $sinopse = $_POST['sinopse'];

            }else {
                echo "<script>window.alert('Preencha os campos corretamente!')</script>";
                echo "<script language='javascript'>";
                echo "location.href='../../cadastro.php'";
                echo "</script>";
            }

        }else {
            echo "<script>window.alert('Preencha todos os campos corretamente!')</script>";
            echo "<script language='javascript'>";
            echo "location.href='../../cadastro.php'";
            echo "</script>";
        }

    }

?>
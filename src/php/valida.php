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

                include("conexao.php");
                $query_diretor = "INSERT INTO diretor(diretor) VALUES ('$diretor')";

                $pegarDiretor = "SELECT id_diretor FROM diretor WHERE diretor = '$diretor'";
                $exe_diretor = mysqli_query($con, $pegarDiretor);
                $pegarDiretor = mysqli_fetch_assoc($exe_diretor);
                $pegarDiretor = $pegarDiretor['id_diretor'];

                $pegarEstudio = "SELECT id_estudio FROM estudio WHERE estudio = '$estudio'";
                $exe_pegarEstudio = mysqli_query($con, $pegarEstudio);
                $pegarEstudio = mysqli_fetch_assoc($exe_pegarEstudio);
                $pegarEstudio = $pegarEstudio['id_estudio'];

                $query_estudio = "INSERT INTO estudio(estudio) VALUES ('$estudio')";
                $exe_diretor = mysqli_query($con, $query_diretor);
                $exe_estudio = mysqli_query($con, $query_estudio);

                $query_filmes = "INSERT INTO filme(id_genero, id_pais, id_diretor, id_estudio, titulo, duracao, ano, sinopse) VALUES ('$genero', '$pais', '$pegarDiretor', '$pegarEstudio', '$titulo', '$duracao', '$ano', '$sinopse')";
                $exe_filmes = mysqli_query($con, $query_filmes);

                if ($exe_filmes) {

                  echo "<script>window.alert('Filme cadastrado com sucesso!')</script>";
                  echo "<script language='javascript'>";
                  echo "location.href='../../cadastro.php'";
                  echo "</script>";

                }else{

                  echo "Não cadastrado.";
                  echo "<pre>";
                    print_r($_POST);
                  echo "</pre>";

                }

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

<?php 
    $url = "database";
    $usuario = "root";
    $senha = "tiger";
    $base = "api";

    $conexao = mysqli_connect($url, $usuario, $senha, $base, "3306");

    mysqli_set_charset($conexao, "utf8");
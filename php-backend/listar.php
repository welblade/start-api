<?php
include_once("conexao.php");

$sql = "SELECT * FROM cursos";

$result = mysqli_query($conexao, $sql);

$cursos = [];

while($linha = mysqli_fetch_assoc($result)) {
    $cursos[] = $linha;
}

echo json_encode(["cursos" => $cursos]);
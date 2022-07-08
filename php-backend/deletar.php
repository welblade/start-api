<?php
include_once("conexao.php");

$request = file_get_contents("php://input");

$dados = json_decode($request);

$id = $dados->curso->id;

$updateSql = "DELETE FROM cursos WHERE id=?";

$stmt = mysqli_prepare($conexao, $updateSql);
$stmt->bind_param('d', $id);
$stmt->execute();
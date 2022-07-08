<?php
include_once("conexao.php");

$request = file_get_contents("php://input");

$dados = json_decode($request);

$id = $dados->curso->id;
$nome = $dados->curso->nome;
$valor = $dados->curso->valor;

$updateSql = "UPDATE cursos SET nome=?, valor=? WHERE id=?";

$stmt = mysqli_prepare($conexao, $updateSql);
$stmt->bind_param('sdd', $nome, $valor, $id);
$stmt->execute();

$curso = [ 
    'id' => $id,
    'nome' => $nome,
    'valor' => $valor
];

echo json_encode(["curso" => $curso]);

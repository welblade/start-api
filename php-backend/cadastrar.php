<?php
include_once("conexao.php");

$request = file_get_contents("php://input");

$dados = json_decode($request);

$nome = $dados->curso->nome;
$valor = $dados->curso->valor;

$insertSql = "INSERT INTO cursos (nome, valor) VALUES (?, ?)";

$stmt = mysqli_prepare($conexao, $insertSql);
$stmt->bind_param('sd', $nome, $valor);
$stmt->execute();

$curso = [ 
    'nome' => $nome,
    'valor' => $valor
];

echo json_encode(["cursos" => [$curso]]);

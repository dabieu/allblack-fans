<?php

require_once("Functions.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

if(isset($_POST['ativo'])) {
    $ativo = 1;
} else {
    $ativo = 0;
}

cadastrarTorcedorManual($nome, $telefone, $cpf, $email, $endereco, $bairro, $cidade, $uf, $cep, $ativo);

?>
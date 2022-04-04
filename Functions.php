<?php

require_once("Torcedor.php");

function CadastrarTorcedor(string $nome = null, string $documento = null, string $cep = null, string $endereco = null, string $bairro = null, string $cidade = null, string $uf = null, string $telefone = null, string $email = null, string $ativo = null) {
    $torcedor = new Torcedor($nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo);
}

?>
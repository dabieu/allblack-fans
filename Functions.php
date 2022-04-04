<?php

require_once("Banco.php");

function lerXML($name, $temp_name) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($name);
    

    if (move_uploaded_file($temp_name, $target_file)) {
        //echo "The file ". htmlspecialchars( basename( $name)). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $file = fopen("uploads/clientes.xml","r") or die("Unable to open file!");
    $xml = simplexml_load_string(fread($file, filesize("uploads/clientes.xml")));
    unlink($target_file);

    return $xml;
}

function cadastrarTorcedorXML($xml_torcedores) {
    foreach ($xml_torcedores as $torcedor) {
        $nome = $torcedor['nome'];
        $documento = $torcedor['documento'];
        $cep = $torcedor['cep'];
        $endereco = $torcedor['endereco'];
        $bairro = $torcedor['bairro'];
        $cidade = $torcedor['cidade'];
        $uf = $torcedor['uf'];
        $telefone = $torcedor['telefone'];
        $email = $torcedor['email'];

        if($torcedor['ativo'] != 1) {
            $ativo = 0;
        } else {
            $ativo = $torcedor['ativo'];
        }

        $conexao = new Banco();

        $sql = "INSERT INTO fans(nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo) VALUES (:nome, :documento, :cep, :endereco, :bairro, :cidade, :uf, :telefone, :email, :ativo)";

        $stmt = $conexao->conectar()->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':documento', $documento);
        $stmt->bindValue(':cep', $cep);
        $stmt->bindValue(':endereco', $endereco);
        $stmt->bindValue(':bairro', $bairro);
        $stmt->bindValue(':cidade', $cidade);
        $stmt->bindValue(':uf', $uf);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':ativo', $ativo);
        $stmt->execute();
        
        header('Location: index.php?xmlsuccess=1');
    }
}

function cadastrarTorcedorManual($nome, $telefone = null, $documento, $email = null, $endereco, $bairro, $cidade, $uf, $cep, $ativo = null) {
    $conexao = new Banco();
    $sql = "INSERT INTO fans(nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo) VALUES (:nome, :documento, :cep, :endereco, :bairro, :cidade, :uf, :telefone, :email, :ativo)";

    $stmt = $conexao->conectar()->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':documento', $documento);
    $stmt->bindValue(':cep', $cep);
    $stmt->bindValue(':endereco', $endereco);
    $stmt->bindValue(':bairro', $bairro);
    $stmt->bindValue(':cidade', $cidade);
    $stmt->bindValue(':uf', $uf);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':ativo', $ativo);
    $stmt->execute();
    
    header('Location: index.php?manualsuccess=1');

}


?>
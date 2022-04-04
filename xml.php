<?php
    require_once("Functions.php");

    //Leitura de arquivo xml
    $xml = lerXML($_FILES["xml"]["name"], $_FILES["xml"]["tmp_name"]);

    cadastrarTorcedorXML($xml);    
?>
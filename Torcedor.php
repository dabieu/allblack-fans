<?php
class Torcedor {
    public $nome;
    public $documento;
    public $cep;
    public $endereco;
    public $bairro;
    public $cidade;
    public $uf;
    public $telefone;
    public $email;
    public $ativo;

    public function __construct(string $nome = null, string $documento = null, string $cep = null, string $endereco = null, string $bairro = null, string $cidade = null, string $uf = null, string $telefone = null, string $email = null, string $ativo = null) {
        $this->nome = $nome;
        $this->documento = $documento;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->ativo = $ativo;

        echo "Objeto construído com sucesso :)";
    }

}
?>
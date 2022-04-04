<?php
    require_once("Functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de torcedor</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
  
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
  </svg>
    <div class="row mb-5">
        <h1 class="text-center">Sistema de Cadastro de Torcedores</h1>
    </div>

    <div class="row d-flex justify-content-center mb-3">
        <div class="col-6 bg-light rounded-3">
            <h2 class="text-center">Upload por XML</h2>
            <form action="xml.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3 text-center">
                <label for="xml" class="form-label">Selecione o arquivo XML a ser importado</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="90000">
                <input class="form-control" type="file" id="xml" name="xml">
                <input type="submit" class="btn btn-success mt-3 mb-3" value="Cadastrar">
                <?php
                if(isset($_GET['xmlsuccess']) && $_GET['xmlsuccess'] == 1) {
                  echo '<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">';
                  echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>';
                  echo '<div>';
                  echo 'Torcedores cadastrados com sucesso!';
                  echo '</div>';
                  echo '</div>';
                }
                ?>
              </div>
            </form>
        </div>
    </div>

    <h5 class="text-center">Ou</h5>

    <div class="row d-flex justify-content-center mt-3">
        <div class="col-6 bg-light rounded-3">
            <h2 class="text-center">Cadastro Manual</h2>
            <form action="cadastro_manual.php" method="POST" class="row g-3">
                <div class="col-md-4">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                </div>
                <div class="col-md-4">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00) 90000-0000">
                </div>
                <div class="col-md-4">
                  <label for="cpf" class="form-label">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                </div>
                <div class="col-4">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-8">
                  <label for="endereco" class="form-label">Endereço</label>
                  <input type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="col-md-4">
                  <label for="bairro" class="form-label">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
                <div class="col-md-4">
                  <label for="cidade" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
                <div class="col-md-2">
                  <label for="uf" class="form-label">Estado</label>
                  <select id="uf" name="uf" class="form-select">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
                </div>
                <div class="col-md-2">
                  <label for="cep" class="form-label">CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ativo" name="ativo">
                    <label class="form-check-label" for="ativo">
                      Torcedor ativo
                    </label>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
                  <?php
                  if(isset($_GET['manualsuccess']) && $_GET['manualsuccess'] == 1) {
                    echo '<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>';
                    echo '<div>';
                    echo 'Torcedor cadastrado com sucesso!';
                    echo '</div>';
                    echo '</div>';
                  }
                  ?>
                </div>
              </form>
        </div>
    </div>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src=”https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js“></script>
    <script>
      new Cleave('#cpf', {
      blocks: [3, 3, 3, 2],
      delimiters: ['.', '.', '-'],
      numericOnly: true
      });
    </script>
</body>
</html>
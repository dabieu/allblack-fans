<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once("Functions.php");
    require_once("Torcedor.php");
    //CadastrarTorcedor("Sra. Elizabeth Flores Franco Filho", "873.335.385-91", "52927-611", "Av. Quintana, 59571. Bloco C", "Evandro do Sul", "So Irene", "PR", "(41) 3529-4394", "dserna@terra.com.br", "1");
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

    <div class="row mb-5">
        <h1 class="text-center">Sistema de Cadastro de Torcedores</h1>
    </div>

    <div class="row d-flex justify-content-center mb-3">
        <div class="col-6 bg-light rounded-3"">
            <h2 class="text-center">Upload por XML</h2>
            <div class="mb-3 text-center">
                <label for="formFile" class="form-label">Selecione o arquivo XML a ser importado</label>
                <input class="form-control" type="file" id="formFile">
              </div>
        </div>
    </div>

    <h5 class="text-center">Ou</h5>

    <div class="row d-flex justify-content-center mt-3">
        <div class="col-6 bg-light rounded-3">
            <h2 class="text-center">Cadastro Manual</h2>
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>
        </div>
    </div>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
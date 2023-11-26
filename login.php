<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col">
            <div class="card text-dark bg-light d-flex justify-content-center mt-5 shadow">
                <div class="card-header text-center">
                    <h5>Bem-Vindo!</h5>
                </div>
                <div class="card-body">
                    <form action="?page=salvar" method="POST"> <!-- Método POST para não aparecer a senha que o usuário digitou -->
                        <input type="hidden" name="acao" value="cadastrar">  <!-- Acão "cadastrar" irá oculta, o usuário não irá ver a url -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-envelope-at-fill"></i>
                            </span>
                            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" required required size="10" maxlength="10">
                        </div>
                        <div class="text-center">
                            <button type="Submit" class="btn btn-success">Login</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>

<?php    

include("include/footer.html");

?>
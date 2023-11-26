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
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="assets/imgs/werewolf-5-svgrepo-com.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    </a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=contato">Contato</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários
          </a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="?page=cadastro">Cadastrar usuários</a></li>
            <li><a class="dropdown-item" href="?page=listar">Listar usuários</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="?page=cadastro_cliente">Cadastrar clientes</a></li>
            <li><a class="dropdown-item" href="?page=listar_clientes">Listar clientes</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5"> 
              <!-- Switch case para as páginas -->
            <?php 
                include("config/config.php");
                switch(@$_REQUEST["page"]) {
                    case "cadastro":
                        include("pages/usuarios/cadastro_usuarios.php");
                    break;

                    case "contato":
                      include("pages/contato.php");
                    break;

                    case "cadastro_cliente":
                      include("pages/clientes/cadastro_clientes.php");
                  break;

                    case "listar":
                        include("pages/usuarios/lista_usuarios.php") ;   
                    break; 

                    case "listar_clientes":
                      include("pages/clientes/lista_clientes.php") ;   
                    break;

                    case "salvar":
                        include("pages/usuarios/salvar_usuario.php");
                    break;  
                    
                    case "salvar_clientes":
                      include("pages/clientes/salvar_cliente.php");
                  break;
                        
                    case "editar":
                        include("pages/usuarios/editar_usuarios.php");
                    break; 
                    
                    case "editar_cliente":
                      include("pages/clientes/editar_cliente.php");
                    break;   
                        
                    default:
                        include("pages/home.php");
                    break;    
                }
            ?>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


<?php    

include("include/footer.html");

?>

</html>
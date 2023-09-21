<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/Symbol.jpg" width="50" height="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=new">Novo Usuário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=list">Listar Usuários</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <div class="container">
     <div class="row">
       <div class="col mt-5">
          <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                  
                  case "new":
                    include("new-user.php");
                  break;
                  
                  case "list":
                    include("list-user.php");
                  break;

                  case "save":
                    include("save-user.php");
                    
                  case "edit":
                    include("edit-user.php");
                  break;
                  
                  default:  
                    print "<h1>Bem-vindo ao Sistema de Gerenciamento de Usuários!</h1>";

                }
            ?>
       </div>
     </div>
   </div>

  <script src="js/bootstrap.bundle.min.js">
  </script>
  
  </body>
</html>
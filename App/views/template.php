<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS (Materalize) -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    
            
    <title>Document</title>
</head>
<body>
  <!-- Ajax-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- menu bar -->
    
<nav>
    <div class="container">
  <div class="nav-wrapper">
    <a href="/" class="brand-logo">Minhas Memórias</a>
    <ul class="right hide-on-med-and-down">
        <li><a href="/users/cadastrar" class="waves-effect waves-light btn">Cadastrar</a></li>
        <li><a href="/users/logar" class="waves-effect waves-light btn">Login</a></li>

    </ul>
  </div>
  </div>
</nav>
  <!-- fim do menu bar -->
<?php
    require_once '../vendor/autoload.php';
    require_once '../App/views/'.$view.'.php';
    
?>



<!--Ionic install basic/icons-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Compiled and minified JavaScript (Materalize) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="<?php URL_BASE;?>/js/cadastro_users.js"></script>
</body>
</html>
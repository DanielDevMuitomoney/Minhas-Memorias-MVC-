<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jquery -->


     <!-- Compiled and minified CSS (Materalize) -->
    
     <?php if(isset($data['sty'])){echo "<link rel=stylesheet href=".$data['sty'].">";}  ?>
     <?php if(isset($data['sty2'])){echo "<link rel=stylesheet href=".$data['sty2'].">";}  ?>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
            
    <title style = "color:#4a1942;">Minhas Memórias</title>
    <link rel="shortcut icon" href="<?php echo URL_BASE ?>/img/logo_MM_2_1.png">
</head>
<body>
    
  <!-- Ajax-->
<script src="<?php ECHO 'http://localhost:8080/js/galery_js/jquery.min.js'?> "></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="<?php URL_BASE;?>/js/cadastro_users.js"></script>
<script src="<?php URL_BASE;?>/js/login_users.js"></script>
<script src="<?php URL_BASE;?>/js/math.js"></script>



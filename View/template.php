<?php 
require_once('autoload.php');
use Controller\PaginaController;
    $capturaEnlace = new PaginaController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="View/boostrap.min.css">
    <link rel="stylesheet" href="Assets/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/62f0988906.js" crossorigin="anonymous"></script>
    

</head>
<body>
<?php require_once("navbar.php");?>
    <div class="container">
        <?php  
            $capturaEnlace->enlacesPagina();
        ?>
    </div> 
    
</body>
</html>
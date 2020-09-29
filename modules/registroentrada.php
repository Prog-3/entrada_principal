<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="sistema.js"></script>    
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <div class="row cabecera">
            <div class="col-3"></div>
            <div class="col-6">
                <h1>Entrada Principal UNCa</h1>
            </div>
            <div class="col-3"></div>
        </div>
        
    </header>
    
    <div class="row justify-content-center h-100 table">
        <table>
            <td>DNI</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>TELEFONO</td>    
        <?php    
        {
        ?> 
                <tr>
    
                    <td><?php echo $_SESSION['resultado']['dni']?></td>
                    <td><?php echo $_SESSION['resultado']['nombre']?></td>
                    <td><?php echo $_SESSION['resultado']['apellido']?></td>
                    <td><?php echo $_SESSION['resultado']['telefono']?></td>                  
                </tr>                 
            <?php    
            }
        ?>
        </table>
    </div>
    <div>
    <form action="" method="post">
    <div class="row">
                <div class="col-6 label1">
                <label for="temperatura">Temperatura</label>
                </div>
                <div class="col-6 justify-content-center">
                <input type="text" id="temperatura" name="temperatura">
                </div>
            </div>
            <div class="row">
                <div class="col-6 label1">
                <label for="direccion">Direccion</label>
                </div>
                <div class="col-6 justify-content-center">
                    <input type="text" id="direccion" name="direccion">
                </div>
            </div>
    </form>
    
    </div>
  
</body>
</html>
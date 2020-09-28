

<?php
session_start();
    require 'conexion.php';
    $dni1 = $_POST['dni'];
    
    $consulta="SELECT * FROM persona WHERE dni = $dni1";
    
    $resultado = mysqli_query($conn,$consulta);
    $a=mysqli_fetch_array($resultado);
    echo count($a);
    if (count($a)>0) {
        $_SESSION['resultado']=$a;
        header("location: registroentrada.php");
    }else{
        header("location: registropersona.html");
    }
    
?>
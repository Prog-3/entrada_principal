

<?php
//abre session para trabajar variables entre paginas
session_start();

//conexion con la base de dato
    require 'conexion.php';

//obtenemos dni de la pagina index atraves de POST  
    $dni1 = $_POST['dni'];

//select en la base de datos tabla persona
    $consulta="SELECT * FROM persona WHERE dni = $dni1";

//consulta realizada en la base de datos para saber si la persona ya existe
    $resultado = mysqli_query($conn,$consulta);

//convertimos la consulta en array para trabajarlo
    $a=mysqli_fetch_array($resultado);

//mustra la cantidad de elementos del array
    echo count($a);

    if (count($a)>0) { //preguntamos si la cantidad de elementos del array es mayor a 0
        $_SESSION['resultado']=$a;//inviamos el array obtenido atravez de session
        header("location: registroentrada.php");//incluimos al consulta.php el archivo registroentrada.php
    }else{
        header("location: registropersona.html");//incluimos al consulta.php el archivo registropersona.php
    }
    
?>
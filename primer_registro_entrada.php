<?php
    require 'conexion.php';
    
    $nombre_valor=$_POST['nombre'];
    $apellido_valor=$_POST['apellido'];
    $dni_valor=$_POST['dni'];
    $telefono_valor=$_POST['telefono'];
    $temperatura_valor=$_POST['temperatura'];
    $direccion_valor=$_POST['direccion'];
    
    $insert_persona ="INSERT INTO persona(dni, nombre, apellido, telefono) VALUES ('$dni_valor','$nombre_valor','$apellido_valor','$telefono_valor')";

    $ingreso= mysqli_query($conn,$insert_persona);
    mysqli_close($conn);
    require 'conexion.php';

    $consulta_d ="SELECT * FROM direccion WHERE nombre_direccion='$direccion_valor'";

    $resultado_consulta=mysqli_query($conn,$consulta_d);
    $a=mysqli_fetch_array($resultado_consulta);
    echo $a;
    if($a == null){
        
        echo $direccion_valor;
        $insert_direccion ="INSERT INTO direccion(nombre_direccion) VALUES ('$direccion_valor')";
        mysqli_query($conn,$insert_direccion);
    }
    
    $insert_registro = "INSERT INTO registro_entrada(fecha_hora, temperatura, persona_dni, direccion_id) 
    VALUES ('NOW()','$temperatura_valor','$dni_valor',$a[0])";
    mysqli_query($conn,$insert_registro);
    

    
    echo 'persona registrada';
    mysqli_close($conn);

?>
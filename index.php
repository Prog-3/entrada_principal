<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro</title>
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
    <div>
        <form action="consulta.php" method="post">
                <div class="row">
                    <div class="col-6 label1">
                        <label for="dni" >DNI:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="dni" name="dni" class="input1"><br><br>
                    </div>   
                 </div>
                <div class="row">
                     <div class="col-7 label2">
                         <button id="buscar" class="button">buscar</button>
                    </div>
                    <div class="col-5">
                            
                    </div>
                </div>
        </form>
    </div>
    
    
</body>
</html>
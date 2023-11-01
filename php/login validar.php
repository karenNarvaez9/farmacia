<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="whidth=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estiloslogin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <style>
    
    h1{
        font-family: arial;
    }      
    label{
        font-family: cursive;
        font-size: 15px;
        color: gray;
        margin: 0 5px;
    }
    input{
        color: black;
        border: 2px gray solid;
        border-radius: 3px;
    }

             </style>
</head>
<body bgcolor="red">
    <form action="validar.php" method="POST" id="form">
        <div class="form">
            <h1>VALIDAR USUARIO</h1>
            <div class="grupo">
                <input type="text" name="usuario" id="usuario" required autocomplete="off"><span class="barra"></span>
                <label for="">Usuario</label>
            </div>
            <div class="grupo">
                <input type="password" name="contrasena" id="contrasena" required><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>

            <button type="submit" name="ingresar">Ingresar</button>
        </div>
    </form>
    <!-- <script src="main.js"></script> -->
</body>
</html>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "registro";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $basededatos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Solicitante</title>

    <link rel="icon" href="imagenes/logo.png">
    <link rel="stylesheet" href="cssform/form.css">
</head>
<body>
    <form action="index.php" method="post" class="form">
        <p class="title">Registro </p>
        <p class="message">Ingresa tus datos personales</p>
        <div class="flex">
            <label>
                <input name="firstname" class="input" type="text" placeholder="" required>
                <span>Primer Nombre</span>
            </label>

            <label>
                <input name="lastname" class="input" type="text" placeholder="" required>
                <span>Segundo Nombre</span>
            </label>
        </div>  
                
        <label>
            <input name="gmail" class="input" type="email" placeholder="" required>
            <span>Gmail</span>
        </label> 
            
        <label>
            <input name="pas" class="input" type="password" placeholder="" required>
            <span>Contraseña</span>
        </label>
        <button type="submit" name="mejoramiento" class="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['mejoramiento'])){
        $firstname = $_POST ['firstname'];
        $lastname = $_POST ['lastname'];
        $gmail = $_POST ['gmail'];
        $pas = $_POST ['pas'];

        $insertarDatos = "INSERT INTO regis VALUES ('$firstname', '$lastname', '$gmail', '$pas', '')";

        $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
    }
?>
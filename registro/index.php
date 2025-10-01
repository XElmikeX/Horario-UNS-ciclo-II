<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "registro";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $basededatos);
?>

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
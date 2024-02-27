<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/Styles_Validacion.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $Usuario=$_POST["Usuario"];
        $Contrasena=$_POST["Contrasena"];
        $Home="Principal.php";
        $return = "Login.php";
       
    
        if (($Usuario==="W12345")&&($Contrasena=="098765")) {
            header('location:'.$Home);
            $_SESSION["Name"]="Andres Sanchez";
        }
        else {
            echo "<script>alert('Usuario o Contraseña Incorrectos intente nueva mente');</script>";
            header("refresh:0;url='$return?");
            session_destroy();
        }
    ?>
</body>
</html>
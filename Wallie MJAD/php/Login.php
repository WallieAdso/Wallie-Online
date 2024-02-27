<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/EstiloLogin.css">
</head>
<body>
    <div class="cuadrados">
        <div class="c1"></div>
        <div class="c2"></div>
    </div>
    <div class="gridLogin">
        <div class="tarjForm">
            <form action="validacion.php" method ="post">
                <h1 class="titulo">Wallie</h1>
                <div class="inputContainer">
                    <input type="text" placeholder="Usuario" name="Usuario">
                </div>
                <div class="inputContainer">
                    <input type="password" placeholder="Contraseña" name="Contraseña">
                </div>
                <button>Ingresar</button>
            </form>
        </div>
        <div class="imgLogin">
            <img src="../img/L1-t.png" alt="">
        </div>
        <div class="footerAyuda">
            <footer>
                <div class="iconoHerramienta">
                    <img src="../img/mechanical.png" alt="">
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
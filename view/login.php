<!--view/login.php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>iniciar sesion</h1>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="usuario" required><br>
        <input type="text" name="password" placeholder="contraseña" required><br>
        <button type="submit" name="action" value="login">ingresar</button>
    </form>
</body>
</html>
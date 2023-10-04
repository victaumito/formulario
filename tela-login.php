<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(20, 147,220), rgb(17,54,71));
}
.Login{
    background-color: rgba(0, 0, 0, 0.95);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: white;
}
.inputL{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
    width: 90.5%;
}
.selectL{
    background-color: dodgerblue;
    border: none;
    padding: 10px;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    font-weight: bold;
}
.selectL:hover{
    cursor: pointer;
}
.inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
}
.inputSubmit:hover{
    background-color: deepskyblue;
    cursor: pointer;
}
a{
    background-color: rgb(80,19,195);
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    text-decoration: none;
}

a:hover{
    background-color: rgb(50, 5, 134);
    cursor: pointer;
}
</style>
    
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="Login">
        <h1>Login Treinamento TI</h1>
        <form action="testeLogin.php" method="POST">
            <input class="inputL" type="text" name="email" placeholder="Email">
            <br> <br>
            <input class="inputL" type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Treinamento TI</title>
    <style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(20, 147,220), rgb(17,54,71));
        text-align: center;
        color: white;
    } 
    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0,0,0,0.8);
        padding: 40px;
        padding-bottom: 60px;
        padding-left: 35px;
        padding-right: 35px;
        border-radius: 15px;
    }
    a{
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        border-radius: 10px;
        padding: 10px;
    }
    a:hover{
        background-color: dodgerblue;
    }
    </style>
</head>
<body>
    <div class="box">
        <h2>Bem vindo, faça login ou cadastre-se para
            ter acesso ao nosso treinamento de TI</h2>
        <br>
            <a href="tela-login.php">Login</a>
            <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>
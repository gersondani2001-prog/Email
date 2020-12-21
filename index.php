<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            background-color: #000;
            margin: 0 auto;
            width: 400px;
            padding: 20px;
        }
        h2{
            color:#fff;
        }
        p{
            color:#fff;
        }
        input{
            border: solid 0;
            border-radius: 3px;
        }

        input[type=text], 
        input[type=password], 
        input[type=email],
        textarea{
            padding: 10px;
            font-size: 18px;
            outline: none;
            width: 370px;
        }
        input[type=submit]{
            background-color: #1E69E3;
            color: white;
            padding: 8px;
            border: none;
            width: 200px;
        }
    </style>
</head>
<body>

<form action="mail.php" method="POST">
    <h2>Contacto</h2>
    <p>Nombre: <br>
    <input type="text" name="name" required></p>
    <p>Correo electrónico: <br>
    <input type="email" name="email" required></p>
    <p>Comentario: <br>
    <textarea name="comment" id="" cols="30" rows="10" required></textarea></p>
    <p class="center"><input type="submit" value="Enviar correo"></p>
</form>


    
</body>
</html>
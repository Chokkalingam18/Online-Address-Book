<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: pink;
        }
        table{
            border-collapse:collapse;
        }

        .center
        {
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        table{
            background-color: aqua;
        }
        input[type="submit"]
        {
            margin-top:10px;
        }

    </style>
</head>
<body>
    <div><form action="3.php" method="POST">
    <table class="center">
        <tr><th colspan="2"><h1><center>Login Form</center></h1></th></tr>
        <tr><th>User Id</th><td><input type="text" name="un"></td></tr>
        <tr><th>PAssword</th><td><input type="password" name="pass"></td></tr>
        <tr><td colspan="2">
    <input type="submit" value="Login"></td></tr>
    </table>
    </form>
    </div>
</body>
</html>
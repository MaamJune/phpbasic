<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title> log in </title>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>
</head>
<body>
    <?php
        include "./navbar.php";
    ?>    
    <div class="container">
        <div class="row">
        <div class="col-md-4">
        <h1> log in </h1>
        <form action= "check.php" method="POST">
            Username:
            <input type="text" name="username" class= "form-control" placeholder="input your username" />
           
            Password:
            <input type="password" name="password" class= "form-control" placeholder="input your password" />
            <input type="submit" value="login" class="btn btn-primary" />
        </form>
        </div>    
        </div>
    </div>

</body>
</html>
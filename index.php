<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>

</head>
<body>
    <?php
        include "./navbar.php";

        echo "<h1> Welcome to web design </h1>";
        echo "<h2> Today on php </h2>";
        echo "<a href='./about.php'> About us </a>"; 

        echo "<br/>";
        $year = 2565;
        $christ = $year-543;
        echo "ปี พ.ศ. $year ค.ศ. $christ <br/>";
        echo "ปี พ.ศ." .$year. "ค.ศ." .$christ;

        $name ="Maam June";
        $gender = female;
        echo "<br/> Hello" .$name;
        echo "<br/> Tell us your gender: " .$gender. "   :)";

        
        echo "<br/>";
        define("WEB", "https://www.sphere-comm.com/");
        echo "Link to:  ".WEB;
                
    ?>
</body>
</html>
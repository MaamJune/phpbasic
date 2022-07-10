<?php
    include "navbar.php";
    include "config.php";
    
    $sql = "SELECT * from users";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) >0){
?>

<div class="container">
    <table class="table">

        <?php
    while($row = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo"$row[username]"; ?> </td>
            <td><?php echo"$row[password]"; ?> </td>
            <td><?php echo"$row[email]"; ?> </td>
        </tr>

<?php
}
       
}else{
    echo "no data found";        
    }

mysqli_close();

?>
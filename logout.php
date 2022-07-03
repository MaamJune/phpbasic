<?php
session_start();
session_destroy(); //ยกเลิก session
header("location: index.php"); //กลับไปเข้าหน้า index.php
?>
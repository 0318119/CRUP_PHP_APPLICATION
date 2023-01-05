<?php 
 include("./includes/config.php"); 
   
 $title = $_POST['titlecol']; 
 $desc = $_POST['desccol']; 
 $adddate=date('Y-m-d'); 
$insert_data = "INSERT INTO `posts` (title, description, post_at)
     VALUES ('$title','$desc', '$adddate')"; 
     mysqli_query($conn, $insert_data);
 ?> 
   

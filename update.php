<?php 
    include("./includes/config.php"); 
    $id = $_POST['postid']; 
    $title= $_POST['titlecol']; 
    $desc=$_POST['desccol']; 
    //echo $id; 
    $sql ="UPDATE posts SET title='".$title."',description='".$desc."' where id='".$id."'"; 
    mysqli_query($conn,$sql); 
?> 
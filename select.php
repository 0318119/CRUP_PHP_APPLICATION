<?php 
 include("./includes/config.php"); 
 $sql="select * from posts"; 
 $result = mysqli_query($conn,$sql); 
 echo ' <tr> 
            <th>Sr.No</th> 
            <th>Date</th> 
            <th>Title</th> 
            <th>Description</th> 
            <th>Edit</th> 
            <th>Delete</th> 
        </tr>'; 
 $i=1; 
 while($data=mysqli_fetch_array($result)) { 
    echo '<tr> 
            <td>'.$i.'</td> 
            <td>'.$data['post_at'].'</td> 
            <td>'.$data['title'].'</td> 
            <td>'.$data['description'].'</td> 
            <td><a class="greenBtn" href="edit.php?edit_id='.$data['id'].'">edit</a></td> 
            <td><a class="redBtn" href="index.php?dell_id='.$data['id'].'" >delete</a></td> 
        </tr>'; 
    $i++; 
 } 
 ?> 
 <style>
    a:hover{
        color: white;
        text-decoration: none;
    }
    .redBtn{
        display: block;
        text-decoration: none;
        background: red;
        padding: 10px 6px 10px 11px;
        text-transform: capitalize;
        color: white;
        border-radius: 7px;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .greenBtn{
        background: green;
        padding: 10px 15px 10px 15px;
        display: block;
        color: white;
        border-radius: 8px;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 1px;
    }
 </style>
   

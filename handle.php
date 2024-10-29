<?php
 include("connection.php");

 if(!empty($_POST['title'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $sql="INSERT INTO notes (title,description) VALUES ('$title','$description')";
    mysqli_query($conn,$sql);
    header("Location: index.php");
 }else{
    header("Location: index.php");
 }
?>
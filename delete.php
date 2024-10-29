<?php
  include("connection.php");
  $id=$_POST['id'];
  if(!empty($id)){
    $sql="DELETE FROM notes WHERE id='$id'";
    mysqli_query($conn,$sql);
    header("Location: index.php");
  }else{
    header("Location: index.php");
  }
?>
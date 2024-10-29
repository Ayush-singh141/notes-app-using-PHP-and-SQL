<?php
$db_user="root";
$db_pass="";
$db_server="localhost";
$db_name="notes";
try{$conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}
catch(Exception $e){
    echo "error occurred!";
}
if($conn){
    echo "";
}
else{
    echo "unable to connect!";
}
?>
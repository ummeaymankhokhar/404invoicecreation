<?php
include 'dbconnection.php';

$name=$_POST['username'];
$hash = md5($_POST['pass']);
$email=$_POST['email'];
$query="INSERT INTO reg(name,pass,email) VALUE ('$name','$hash','$email')";
if(!mysqli_query($con,$query)){
    echo '<script type="text/javascript">alert("data not inserted");
    window.location="index.html";
    </script>';
}
else{
    echo '<script type="text/javascript">alert("data inserted");
    window.location="index.html";
    </script>';
    
    
}

?>

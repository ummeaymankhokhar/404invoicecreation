<?php 
require_once('dbconnection.php');
session_start();
    if(isset($_POST['login']))
    {
       if(empty($_POST['username']) || empty($_POST['pass']))
       {
            echo '<script> window.location="index.html";</script>';
       }
       else
       {
           $name = $_POST['username'];
           $password = md5($_POST['pass']);

            $query="select name, pass from reg where name='".$name."' and pass='".$password."'";
            $result=mysqli_query($con,$query);
            list($name, $password) = mysqli_fetch_row($result);
            if ($name == $_POST['username']) {
                // Success!
                $_SESSION['User']=$_POST['username'];
                echo '<script> window.alert("Success");
                window.location="home.php";</script>';
            }else {
                echo '<script> window.alert("Invalid");
                window.location="index.html";</script>';
                
            }
       }
    }
    else
    {
        echo 'Not Working';
    }
 
?>
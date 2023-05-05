
<?php
$un=$_POST['un'];
$pass=$_POST['pass'];

if($un=="Admin" and $pass=="Lingam")
    {
    header("Location:1.php");
    }
    else{
    echo "Invalid username and password";
    }

?>
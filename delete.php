<?php
session_start();
include('config.php');
$r=$_GET['r1'];
$s="delete from address where id=$r";
$a=mysqli_query($my,$s);
if($a==True)
{
    echo "$r record is deleted ";
}
else
{
    echo "$r is not deleted";
}
session_destroy();
?>
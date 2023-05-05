<?php
session_start();
include("config.php");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$note=$_POST['note'];
if(isset($name)&&($mobile)&&($email)&&($address)&&($note)!="")
{
$sql="insert into address(name,mobile,email,address,note) values('$name',$mobile,'$email','$address','$note')";
$c=mysqli_query($my,$sql);
if($c==True)
{
    echo '<script type="text/JavaScript">alert("Your record successfully inserted!");</script>';
    header("Location:1.php");
}
else{
    echo "$name is not inserted Successfully!";
}
}
else
{
    echo "Please Fill appropiate detail";
}
session_destroy();
?>
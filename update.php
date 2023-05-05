<?php
session_start();
include('config.php');
$eid=$_POST['id'];
$sql="Select *from address where id=$eid";
$r=mysqli_query($my,$sql);

if($r==True)
{
echo "<table border=1>";
echo "<tr><th>Id</th><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th><th>Note</th></tr>";
while($row=mysqli_fetch_array($r))
{
    echo "<tr>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]]</td>";
    echo "<td><button><a href=\"delete.php?r1=$row[0]\">Delete</a></button></td>";
       echo "</tr>";
}
echo "</table>";
}
else{
    echo "NO REcord Found!";
}
session_destroy();
?>

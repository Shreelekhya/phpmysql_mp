<?php
$con=mysqli_connect("localhost","Shreelu","gampa","my_db");
$sql="INSERT INTO table1 (Username, Password, Role) VALUES ('admin', 'admin','adminstrator')";
if (mysqli_query($con,$sql))
{
   echo "Values have been inserted successfully";
}
?>

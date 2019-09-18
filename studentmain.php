<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
echo "welcome in Code Tutor";
include("connection.php");
$query="select * from students where studentname='$username' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
echo "<table border='2'><tr><td colspan='2'>Student information</td></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><th>studentsid</th><th>".$row['studentsid']."</th></tr>";
echo "<tr><th>Name</th><th>".$row['studentname']."</th></tr>";
echo "<tr><th>age</th><th>".$row['age']."</th></tr>";
echo "<tr><th>Address</th><th>".$row['address']."</th></tr>";
echo "<tr><th>email</th><th>".$row['email']."</th></tr>";
echo "<tr><th>password</th><th>".$row['password']."</th></tr>";

}


?>
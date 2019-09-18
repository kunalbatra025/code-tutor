<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
echo "welcome in oops";
include("connection.php");
$query="select * from students where studentname='$username' and password='$password'";
$result=mysql_query($query);
echo "<center>";
echo "<table border='2'><tr><td colspan='2'>Edit Student information</td></tr>";
while($row=mysql_fetch_array($result))
{
echo "<form method='post' action='modifyuser.php'>";
echo "<tr><th>id</th><th><input type='text' name='studentid' value=".$row['studentid']."></th></tr>";
echo "<tr><th>Name</th><th><input type='text'name='studentname' value=".$row['studentname']."></th></tr>";
echo "<tr><th>age</th><th>".$row['age']."</th></tr>";
echo "<tr><th>Address</th><th>".$row['address']."</th></tr>";
echo "<tr><th>emailid</th><th>".$row['emailid']."</th></tr>";
echo "<tr><th>password</th><th>".$row['password']."</th></tr>";
echo "<tr><th><input type='submit' value='update' name='update'></th>";
echo "<th><input type='reset' value='clear'></th></tr>";

echo "</form>";
}
echo"</table></center>";
echo "<a href='logout.php'>logout</a>";

?>
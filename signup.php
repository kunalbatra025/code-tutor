<br>
<body bgcolor="purple" text="white">

<center>
<table border='2' cellspacing="10" cellpadding="20">
<tr>
<td colspan="2" text-align="center"><h3>Student Information</h3></td>
</tr>
<tr><th>
<form method="get" action="">
rollno</th><th><input type="text" name="rollno" placeholder="username">
</th></tr>
<tr><th>
name</th><th><input type="text" name="name" placeholder="password">
</th></tr>
<tr>
<th>age</th><th><input type="text" name="age">
</th></tr>
<tr><th>
address</th><th><input type="text" name="address">
</th></tr><th>
Email</th><th><input type="text" name="email">
</th></tr><tr><th>
Password</th><th><input type="text" name="password">
</th></tr><tr><th>
<input type="submit" value="signup" name='signup'></th>
<th><input type="reset" value="clear"></th>
</form></tr></table>
</center>
<?php
if(isset($_REQUEST['signup']))
{
mysql_connect("localhost","root","");
mysql_select_db("studentsinfo");
$rollno=$_REQUEST['rollno'];
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$query="insert into students values('$rollno','$name','$age','$address','$email','$password')";
$result=mysql_query($query)or die(mysql_error());
echo "<h1>Signup completed</h1>";
header("Location:login.php");
}
?>
</body>
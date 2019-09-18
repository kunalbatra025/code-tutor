<?php
session_start();
?>
<center>
<body bgcolor="red" text="white">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table border='2'><tr>
<th colspan='2'>User Login</th></tr>
<tr><th><center>
<form method="get" action="">
username</th><th><input type="text" name="username" placeholder="username">
</th></tr>
<tr><th>
password</th><th><input type="text" name="password" placeholder="password">
</th></tr>
<tr><th>
<input type="submit" value="login" name="login"></th>
<th><input type="reset" value="clear"></th></tr>
</form></table></center>
<?php
if(isset($_REQUEST['login']))
{$num=0;
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
mysql_connect("localhost","root","");
mysql_select_db("studentsinfo");
$query="select * from students where studentname='$username' and password='$password'";
$result=mysql_query($query)or die(mysql_error());
$num=mysql_num_rows($result);
if($num>=1)
{
header("Location:test.html");
}
else
{
echo "<h1> please enter the right username and password</h1>";
}
}
?>
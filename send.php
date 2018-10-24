<?php
$localhost="localhost";
$user_db="root";
$pass_db="root";
$db="supermarket";
mysql_connect("localhost","root","root","supermarket");

mysql_select_db($db);
$username=$_post['username'];
$password=$_post['password'];
$email=$_post['email'];
$sql="INSERT INTO users(username,password,email )VALUES('$username','$password','$email')";
if($_post['submit']){
	$query=mysql_query($sql);
}

?>
<form action="<?php echo $PHP_SELEF;?>" method="post">
<input type="text" name="username">
<p>
<input type="password" name="password">
<p>
<input type="email" name="email">
<p>
<input type="submit" value="تنفيذ">
</form>
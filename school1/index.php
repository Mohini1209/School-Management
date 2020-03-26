<div class="header" style="background-image:url(image/background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg)" align="center">
<link href="css/css1.css" rel="stylesheet">
<form method="post" align="center">
<br><br><br><br>
<h1><i>Admin Login</i></h1>
<table border="1"  align="center" height="200px" width="400px">
<tr>
<td><b>User Id</b></td>
<td><input name="user_id" value="">
</td>
</tr>
<td><b>Password</b></td>
<td><input name="password" value="" type="password">
</td>
</tr>
<td colspan="5" align="center"><input type="submit" value="login" name="login">
</td>
</table>
</form>
</div>
<?php
if(isset($_POST['login']))
{
mysql_connect("localhost","root","");
mysql_select_db('school');
$user_id=$_POST['user_id'];
$qry=mysql_query("select * from login where user_id='$_POST[user_id]' && password='$_POST[password]'");
$count=mysql_num_rows($qry);
if($count>0)
{
session_start();
$_SESSION['user_id']=$user_id;
$_SESSION['password']=$password;
header("location:home.php");
}
else
{
header("location:index.php");
}
}
?>

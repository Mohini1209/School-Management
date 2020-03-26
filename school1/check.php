<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
$user_id=$_GET['user_id'];
$qry=mysql_query("select * from login where user_id='$_GET[user_id]' && password='$_GET[password]'");
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
header("location:login.php");
}
?>
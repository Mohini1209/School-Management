<?php
$stu_id=$_REQUEST['stu_id'];
mysql_connect("localhost","root","");
mysql_select_db('school');
$t=mysql_query("delete from stu_detail where stu_id='$stu_id'");
if($t==true)
{
header("location:stu_list.php");
}
else
{
echo"error";
}
?>

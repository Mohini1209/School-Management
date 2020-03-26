<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
$stu_id=$_GET['stu_id'];
$name=$_GET['name'];
$age=$_GET['age'];
$gender=$_GET['gender'];
$contact=$_GET['contact'];
$address=$_GET['address'];
$class=$_GET['class'];
$fees=$_GET['fees'];
$qry=mysql_query("update stu_detail set name='$name',age='$age',gender='$gender',contact='$contact',address='$address',class='$class',fees='$fees' where stu_id='$stu_id'");
//$q=mysql_query("update stu_fees set fees='$total_fees' where stu_id='$stu_id'");
if(qry==true)
{
header("location:stu_list.php");
}
else
{
echo"echo";
}
?>
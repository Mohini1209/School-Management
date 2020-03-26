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
$q=mysql_query("insert into stu_detail(name,age,gender,contact,address,class,fees)values('$name','$age','$gender','$contact','$address','$class','$fees')");
$q=mysql_query("insert into stu_fees(name,total_fees,due_fees)values('$name','$fees','$fees')");
if($q==true)
{
header("location:stu_list.php");
}
else
{
echo"data is not inserted";
}
?>
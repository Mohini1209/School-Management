<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
$name=$_GET['name'];
$total_fees=$_GET['total_fees'];
$due_fees=$_GET['due_fees'];
$pay_fees=$_GET['pay_fees'];
$total_due_fees=$due_fees-$pay_fees;
$qry=mysql_query("update stu_fees set due_fees='$total_due_fees',pay_fees='$pay_fees'");
if(qry==true)
{
header("location:pay_fees.php?name='$name'");
}
?>
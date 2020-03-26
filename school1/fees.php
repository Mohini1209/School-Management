<div class="header" style="background-image:url(image/background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg)" align="center">
<link href="css/css1.css" rel="stylesheet"><br><br>
<h3><i>Search Name of Student</i></h3>
<br>
<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
?>
<form  method="post">
<table border="1" width="200" align="center">
<tr>
<td><select name="name">
<option>Select name</option>
<?php $qry=mysql_query("select * from stu_detail");
while($data=mysql_fetch_array($qry))
{
?>
<option><?php echo $data['name']?></option>
<?php
}
?>
<input type="submit" value="search" name="search">
</select></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['search']))
{
$name=$_REQUEST['name'];
$qry=mysql_query("select * from stu_fees where name='$name'");
$data=mysql_fetch_array($qry);
?>
<form method="post">
<table border="1" width="400">
<tr><td><h4><b>Name</b></h4></td>
<td><input name="name" value="<?php echo $data['name']?>"></td><tr>
<tr><td><h4><b>Total Fees</b></h4></td>
<td><input name="total_fees" value="<?php echo $data['total_fees']?>"></td><tr>
<tr><td><h4><b>Due Fees</b></h4></td>
<td><input name="due_fees" value="<?php echo $data['due_fees']?>"></td><tr>
<tr><td><h4><b>Pay Fees</b></h4></td>
<td><input name="pay_fees"></td>
</tr>
<tr>
<td align="center" colspan="7">
<input type="submit" value="payfees" name="pay"></td>
</tr>
</table>
</form>
<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
}
if(isset($_POST['pay']))
{
$name=$_POST['name'];
$total_fees=$_POST['total_fees'];
$due_fees=$_POST['due_fees'];
$pay_fees=$_POST['pay_fees'];
$total_due_fees=$due_fees-$pay_fees;
$qry=mysql_query("update stu_fees set due_fees='$total_due_fees',pay_fees='$pay_fees'");
if(qry==true)
{
header("location:pay_fees.php?name='$name'");
}
}
?>


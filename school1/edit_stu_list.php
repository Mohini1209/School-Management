<div class="header" style="background-image:url(image/background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg)" align="center">
<link href="css/css1.css" rel="stylesheet">
<?php
$stu_id=$_REQUEST['stu_id'];
mysql_connect("localhost","root","");
mysql_select_db('school');
$q=mysql_query("select * from stu_detail where stu_id='$stu_id'") or die(mysql_error());
$data=mysql_fetch_array($q);
?>
<form method="post">

<h1><i>Update Student Details</i></h1>
<table border="1" width="200" align="center">
<tr><td><h4><b>Student Id</b></h4></td>
<td><input name="stu_id" value="<?php echo $data['stu_id']?>"></td></tr>
<tr><td><h4><b>Name</b></h4></td>
<td><input name="name" value="<?php echo $data['name']?>"></td></tr>
<tr><td><h4><b>Age</b></h4></td>
<td><input name="age" value="<?php echo $data['age']?>"></td></tr>
<tr><td><h4><b>Gender</b></h4></td>
<td><input name="gender" value="<?php echo $data['gender']?>"></td></tr>
<tr><td><h4><b>Contact</b></h4></td>
<td><input name="contact" value="<?php echo $data['contact']?>"></td></tr>
<tr><td><h4><b>Address</b></h4></td>
<td><input name="address" value="<?php echo $data['address']?>"></td></tr>
<tr><td><h4><b>Class</b></h4></td>
<td><input name="class" value="<?php echo $data['class']?>"></td></tr>
<tr>
<tr><td><h4><b>Fees</b></h4></td>
<td><input name="fees" value="<?php echo $data['fees']?>"></td></tr>
<tr>
<td colspan="7" align="center"><input type="submit" value="update" name="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST['update']))
{
mysql_connect("localhost","root","");
mysql_select_db('school');
$stu_id=$_POST['stu_id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$class=$_POST['class'];
$fees=$_POST['fees'];
$qry=mysql_query("update stu_detail set name='$name',age='$age',gender='$gender',contact='$contact',address='$address',class='$class',fees='$fees' where stu_id='$stu_id'");
if(qry==true)
{
header("location:stu_list.php");
}
else
{
echo"echo";
}
}
?>

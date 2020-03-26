<div class="header" style="background-image:url(image/background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg)" align="center">
<link href="css/css1.css" rel="stylesheet">
<form method="post">
<br><br>
<h1><i>New Student Registration</i></h1>
<table border="1" width="200" align="center">
<tr><td><h4><b>Name</b></h4></td>
<td><input name="name" value="" required></td></tr>
<td><h4><b>Age</b></h4></td>
<td><input name="age" value="" required></td></tr>
<td><h4><b>Gender</b></h4></td>
<td><input type="radio" name="gender" value="male" required>Male
<input type="radio" name="gender" value="female" required>Female</td></tr>
<td><h4><b>Contact</b></h4></td>
<td><input name="contact" value="" required></td></tr>
<td><h4><b>Address</b></h4></td>
<td><input name="address" value="" required></td></tr>
<td><h4><b>Class</b></h4></td>
<td><input name="class" value="" required></td></tr>
<td><h4><b>Fees</b></h4></td>
<td><input name="fees" value="" required></td></tr>
<td colspan="7" align="center" ><input type="submit" value="submit" name="register"></td>
</table>
</form>
<?php
if(isset($_POST['register']))
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
}
?>
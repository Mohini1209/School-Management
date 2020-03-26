<div class="header" style="background-image:url(image/background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg)" align="center">
<link href="css/css1.css" rel="stylesheet">
<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
$q=mysql_query("select * from stu_detail");
?>
<br>
<h1><i>Student List</i></h1>
<br>
<table border="1" align="center">
<tr><td><h3><b>Student Id</b></h3></td>
<td><h3><b>Name</b></h3></td>
<td><h3><b>Age</b></h3></td>
<td><h3><b>Gender</b></h3></td>
<td><h3><b>Contact</b></h3></td>
<td><h3><b>Address</b></h3></td>
<td><h3><b>Class</b></h3></td>
<td><h3><b>Fees</b></h3></td>
<td><h3><b>Action</b></h3></td>
</tr>
<?php
while($data=mysql_fetch_array($q))
{
$stu_id=$data['stu_id'];
$name=$data['name'];
$age=$data['age'];
$gender=$data['gender'];
$contact=$data['contact'];
$address=$data['address'];
$class=$data['class'];
$fees=$data['fees'];
?>
<tr>
<td><?php echo $stu_id?></td>
<td><?php echo $name?></td>
<td><?php echo $age?></td>
<td><?php echo $gender?></td>
<td><?php echo $contact?></td>
<td><?php echo $address?></td>
<td><?php echo $class?></td>
<td><?php echo $fees?></td>
<td><a href="edit_stu_list.php?stu_id=<?php  echo $data['stu_id']?>"><button>Edit</button></a>
<a href="delete_stu_list.php?stu_id=<?php echo $data['stu_id']?>"><button>Delete</button></a></td>
<?php
}
?>
</tr>
</table>
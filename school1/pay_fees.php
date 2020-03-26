<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
$name=$_REQUEST['name'];
$qry=mysql_query("SELECT * FROM `stu_fees` WHERE  name='$name'")or die(mysql_error());
$data=mysql_fetch_array($qry);
?>
<form action="submit_fees.php" method="get">
<table border="10" width="200">
<tr><td>name</td>
<td><input name="name" value="<?php echo $data['name']?>"></td><tr>
<tr><td>total_fees</td>
<td><input name="total_fees" value="<?php echo $data['total_fees']?>"></td><tr>
<tr><td>due_fees</td>
<td><input name="due_fees" value="<?php echo $data['due_fees']?>"></td><tr>
<tr><td>pay_fees</td>
<td><input name="pay_fees"></td><tr>
</table>
<a href="submit_fees.php"><button>pay_fees</button></a>
</form>

<div class="header" style="background-image:url(image/background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg)" align="center">
<link href="css/css1.css" rel="stylesheet">
<?php
mysql_connect("localhost","root","");
mysql_select_db('school');
session_start();
echo"welcome ".$_SESSION['user_id'];
echo"<br>";
?>
<br><br>
<a href="stu_reg.php"><button>new registration</button></a>
<a href="stu_list.php"><button>list</button></a>
<a href="fees.php"><button>fees</button></a>
<a href="logout.php"><button>logout</button></a>

<?php
$name=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$d=$_POST['dis'];
$dquan=$_POST['dquan'];
$flaver=$_POST['flaver'];
$iquan=$_POST['iquan'];
$nut=$_POST['ch'];
//print_r($d);
$a=array();
foreach($nut as $select)
{
	array_push($a,$select);
}

$top=implode(",",$a);
$dis=implode(",",$d);

?>
<html>
<body bgcolor="orange">
<table border="1" align="center">
<tr><td colspan="2"><h3><p align="center">Star Restaurant</p></h3></td>
</tr>
<tr><td>Name</td><td><?php echo $name; ?></td></tr>
<tr><td>Email</td><td><?php echo $email; ?></td></tr>
<tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
<tr><td>Dis</td><td><?php echo $dis; ?></td></tr>
<tr><td>Quanditiy</td><td><?php echo $dquan; ?></td></tr>

<tr><td>Ice</td><td><?php echo $flaver; ?></td></tr>
<tr><td>Quandity</td><td><?php echo $iquan; ?></td></tr>
<tr><td>Toppings</td><td><?php echo $top; ?></td></tr>

</table>
</body>
</html>
<?php
$name=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
echo "<center><h1>Hello ". $name." Welcome to Star Restaurant<br/></h1></center>";
?>
<html>
<head>
<title>Star Restaurant</title>
</head>
<body bgcolor="orange">
<center><img src="img1.jpeg"/></center>
<form action="bill.php" method="post">
<table align="center">
<tr><td colspan=2 align="center"><h3>Menu Items</h3></td></tr>
	<tr>
		<td>dis</td>
		<td><select name="dis[]" multiple="multiple" size="5">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select></td>
	</tr>
	<tr>
		<td>Quandity</td>
		<td><select name="dquan">
		<?php
		for($i=1;$i<11;$i++)
		{

			?>
			<option value="<?php echo $i; ?>"><?php echo $i;?></option>
			<?php
		}
		?>
		</select></td>
	</tr>
	<tr>
		<td>Ice Flaver</td>
		<td><input type="radio" name="flaver" value="vennila"></input> Vennila<input
			type="radio" name="flaver" value="straberry"></input> Straberry <input
			type="radio" name="flaver" value="butter"></input> Butter</td>
	</tr>
	<tr>
		<td>Quandity</td>
		<td><select name="iquan">
		<?php
		for($i=1;$i<11;$i++)
		{
			?>
			<option value="<?php echo $i; ?>"><?php echo $i;?></option>
			<?php
		}
		?>
		</select></td>
	</tr>
	<tr>
		<td>Toppings</td>
		<td><input type="checkbox" name="ch[]" value="nuts"></input> Nuts <input
			type="checkbox" name="ch[]" value="dryfrutes"></input> Dry Frutes</td>
	</tr>
	<tr>
		<td colspan=2 align="center"><input type="submit" name="bill" value="Billing"></input></td>
	</tr>
</table>
<input type="hidden" name="uname" value="<?php echo $name;?>"></input> <input
	type="hidden" name="email" value="<?php echo $email;?>"></input> <input
	type="hidden" name="phone" value="<?php echo $phone; ?>"></input> <input
	type="hidden" name="password" value="<?php echo $password; ?>"></input>


</form>
</body>
</html>

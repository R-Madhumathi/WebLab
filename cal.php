<?php

if(isset($_POST['res']))
{
	$res=$_POST['display'];
	$res=eval('return '.$res.';');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR</title>
	<style type="text/css">
		input
		{
			background-color: pink;
		}
	</style>
</head>
<body bgcolor="gray">
	<center>
		<form name="cal" method="post">
			<table>
				
				<tr>
					<th colspan="4">
						<input type="text" name="display" value="<?php if(isset($res)){echo($res);}?>">
					</th>
				</tr>

				<tr>
					<th><input type="button" value="1" onclick="cal.display.value+='1'"></th>
					<th><input type="button" value="2" onclick="cal.display.value+='2'"></th>
					<th><input type="button" value="3" onclick="cal.display.value+='3'"></th>
					<th><input type="button" value="+" onclick="cal.display.value+='+'"></th>
				</tr>

				<tr>
					<th><input type="button" value="4" onclick="cal.display.value+='4'"></th>
					<th><input type="button" value="5" onclick="cal.display.value+='5'"></th>
					<th><input type="button" value="6" onclick="cal.display.value+='6'"></th>
					<th><input type="button" value="-" onclick="cal.display.value+='-'"></th>
				</tr>

				<tr>
					<th><input type="button" value="7" onclick="cal.display.value+='7'"></th>
					<th><input type="button" value="8" onclick="cal.display.value+='8'"></th>
					<th><input type="button" value="9" onclick="cal.display.value+='9'"></th>
					<th><input type="button" value="*" onclick="cal.display.value+='*'"></th>
				</tr>

				<tr>
					<th><input type="button" value="C" onclick="cal.display.value=' '"></th>
					<th><input type="button" value="0" onclick="cal.display.value+='0'"></th>
					<th><input type="submit" value="=" name="res"></th>
					<th><input type="button" value="/" onclick="cal.display.value+='/'"></th>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>
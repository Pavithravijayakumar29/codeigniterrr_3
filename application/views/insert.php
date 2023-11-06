<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>codelgniter 3</title>
</head>
<body>
	<form method="post" action="<?=base_url('Crud/savedata')?>">
         <table width="600" border="1" cellpadding="5">
         
			<tr>
				<td width ="230">First Name</td>
				<td width ='329'><input type="text" name="first_name"/></td>
			</tr>

			<tr>
				<td width ="230">Last Name</td>
				<td width ='329'><input type="text" name="last_name"/></td>
			</tr>

			<tr>
				<td width ="230">Email Id</td>
				<td width ='329'><input type="email" name="email"/></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="save" value="save"/></td>
			</tr>

			</table>
   </form>
</body>
</html>

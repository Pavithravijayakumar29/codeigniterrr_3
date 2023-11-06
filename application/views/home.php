<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>WELCOME <?=$this->session->userdata('savename')?></h1>
	<form method="post" action="<?=base_url("Welcome/save")?>">
          <input type="text" name="name">
			 <input type="submit" value="save">
   </form>

	<?php if($this->session->has_userdata('savename')){?>
		<a href="<?=base_url("Welcome/clear")?>">Clear</a>
	<?php }?>

</body>
</html>


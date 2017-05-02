<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">

<title>Aula 02</title>
</head>
	<body>
	   <?php if(isset($_POST['palavra'])){ ?>
	   		<h3>Você buscou por: <?=$_POST['palavra']?></h3>
	   <?php }?>	
			<form method="post">
			<p>Digite uma palavra: </p>
			<input name="palavra" type="text"/> 
			</form>
    </body>
</html>
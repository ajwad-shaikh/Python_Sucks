<?php
echo '<html>

<head>

<center>

<h1> Python_Sucks </h1>

<h3> Authenticated! </h3>

</center>

</head>

<body>
<center>

<h5>Ajwad | Abhay</h5>

</center>
<form action="dashboard.php" method="GET">
	<input type="hidden" name="code" value="'.$_GET["code"].'"/>
	<input type="hidden" name="state" value="'.$_GET["state"].'"/>
	<input type="submit" value="Get Access!"/>
	
</form>

</body>
</html>'
?>


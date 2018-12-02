<?php
include 'accesToken.php';

echo '<html>

<head>

<center>

<h1> Python_Sucks </h1>

<h3> Dashboard </h3>

</center>

</head>

<body>
<center>

<h5>Get CodeChef User Data</h5>

</center>
<form action="result.php" method="GET">
	<input type="type" name="CCid"/>
	<input type="hidden" name="access_Token" value="'.$accessToken.'"/>
	<input type="submit" value="Get Access!"/>
	
</form>

</body>
</html>'
?>
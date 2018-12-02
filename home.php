<?php

echo '<html>

<head>

<center>

<h1> Python_Sucks </h1>

<h3> Snooping... '. $_GET["chefID"] .' </h3>

</center>

</head>

<body>

<form action="https://api.codechef.com/users/'. $_GET["chefID"] .'/">
	<select name="fields" multiple="multiple">
	 <option value="fullname" selected="selected"> Full Name</option>
	 <option value="ratings" selected="selected">Ratings</option>
	 <option value="organization">Organization/Institute</option>
	 <option value="rankings">Rankings</option>
	</select>
	<input type="submit" value="Snoop!"/> 
</form>

</body>
</html>'
?>


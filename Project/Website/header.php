<?php

//make connection to DB; used to establish connection in most other pages on website
$connection_id=pg_connect('host=localhost dbname=drinc user=drinc password=cjwang');
?>
<html>
<head>
<title>
DRINC
</title>
<link href="drinc.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id = "logoarea"><img src="pics/logo.png" width="332" height="122" alt="logogoeshere"></img></div>


<!--Navigation Area-->
<div id="nav">
<a href="index.php">HOME</a><br /><br />

<?php 
//checks if there is an authentic cookie for the website; determins what navigation links to show dependant on login or not
if(isset($_COOKIE['ID_my_site']))
	{
	$loginerror=1;//used for if cookie is invalid, I think. Forgot to comment when I wrote this
	
		$result = pg_query("SELECT username, password FROM logins WHERE username = '" . addslashes($_COOKIE['ID_my_site']) . "' AND password = '" . addslashes($_COOKIE['Key_my_site']) . "';");
		while($row = pg_fetch_array($result))
			{	$loginerror=0;
				echo '<a href="members.php">MEMBERS</a><br /><br />
                <a href="createDrinc.php">CREATE A DRINC</a><br /><br />
				<a href="logout.php">LOGOUT</a><br /><br />
				';
		//checks if user is an admin	
			$userid = $_COOKIE['ID_my_site'];
			if ($userid == "admin") {
						echo '<a href="drincAdmin.php">ADMIN PAGE</a>';
						}

			}
	}
else //only shows if user is not signed in
	{
		echo'<a href="register.php">REGISTER</a><br /><br />
		<a href="login.php">LOGIN</a><br /><br />';
	}

?>

<br /><br /><br /><br /><br />
<a href="documentation.php">DOCUMENTATION</a><br /><br />
<a href="photos.php">PHOTOS</a><br /><br />
<a href="aboutus.php">ABOUT US</a><br /><br />

<br /><br />
</div>

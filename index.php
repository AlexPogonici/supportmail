
<?php
session_start();
if(isset($_SESSION['login_user']))
{
echo " <div id=\"login\"> Sunteti logat, " . $_SESSION['login_user'] . "</div>";
}
?>

<html>

<head>
<title>Index</title>
</head>


<body>

<a href="controller/logout.php">Logout </a>

<h1>Bine ati venit.Mai jos aveti listate mailurile:</h1>

<?php

include 'controller/database.php';

Database::connection();
$sql="select * from email";
$results = mysql_query($sql);
while ($row = @ mysql_fetch_array($results))
{

	echo "<p>".'<b>'.$row["subiect"].'</b>'."</p>";
  }

?>


<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="view/email.html">Send Email</li>
</ul>





</html>


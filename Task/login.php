<?php

// Inialize session
session_start();

// Include database connection settings
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',                  so you're NOT necessary to change this even this script has already     online on the internet.
$dbname   = 'task'; // Your database name.
$username = 'root';             // Your database username.
$password = '';                 // Your database password. If your database has no         password, leave it empty.

// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,       perhaps the service is down!');
/// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');


// Retrieve username and password from database according to user's input

$login = mysql_query("SELECT count(*) FROM members WHERE (username = '" .       mysql_real_escape_string($_POST['user']) . "') and (password = '" .     mysql_real_escape_string(md5($_POST['pass'])) . "')");
$result=mysql_fetch_array($login);
// Check username and password match

 if (mysql_num_rows($result) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['user'];

// Jump to secured page
 header('Location: securedpage.php');
}
else {
// Jump to login page
header('Location:career.php');
}

?>

<?php 

include_once 'dbconnect.php';

$url = 'http://'. $_SERVER['HTTP_HOST'] .'/LANGUAGES/php/applications/vanity/';

$stmt = $conn->query('SELECT username FROM users');

echo '<ul>';
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$username = $row['username'];
	echo '<li><a href="',$url, $username, '">',$username,'</a></li>'; 
}
echo '</li>';

?>
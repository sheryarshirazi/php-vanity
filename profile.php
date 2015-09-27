<?php 

include_once 'dbconnect.php';

if (isset($_GET['u']) && !empty($_GET['u'])) {

	$u=$_GET['u']; 

	$stmt = $conn->prepare('SELECT * FROM users WHERE username LIKE :name');
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 

	$stmt->execute(array(
	    'name' => '%'. $u .'%'
	));

	$result = $stmt->fetchAll();
	echo '<pre>',print_r($result,true),'</pre>';

} else {
	die('not'); 
}

?>
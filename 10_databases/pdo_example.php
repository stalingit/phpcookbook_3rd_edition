<?php
$user = "root";
$password ="";
try {
	$db = new PDO('mysql:host=localhost;dbname=customer_db', $user,$password);
	// Make all DB errors throw exceptions
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// Prepare

		
		
		$fields = array('symbol','planet','element');
$placeholders = array();
$values = array();
foreach ($fields as $field) {
    // One placeholder per field
    $placeholders[] = '?';
    // Assume the data is coming from a form
    $values[] = $_POST[$field];
}

$st = $db->prepare('INSERT INTO zodiac (' .
                   implode(',',$fields) .
                   ') VALUES (' .
                   implode(',', $placeholders) .
                   ')');
// Execute the query
$st->execute($values);
		
		
		
		
			/*$st = $db->prepare('SELECT * FROM zodiac');
		$st->execute();
		while ($row = $st->fetch(PDO::FETCH_NUM)) {
		  print implode(',',$row). "<br/>\n";
		}*/
} catch (Exception $e) {
	print "Database Problem: " . $e->getMessage();
}

<?php
//$db = new PDO('sqlite:/usr/local/data/sales.db');
$user = "root";
$password ="";
	$db = new PDO('mysql:host=localhost;dbname=customer_db', $user,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $db->query('SELECT sign, symbol,planet,element FROM zodiac');
$sales_data = $query ->fetchAll();

// Open filehandle for fputcsv()
$output = fopen('php://output','w') or die("Can't open php://output");
$total = 0;

// Tell browser to expect a CSV file
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="sales.csv"');

// Print header row
fputcsv($output,array('Sign','Symbol','Planet','Element'));
// Print each data row and increment $total
foreach ($sales_data as $sales_line) {
    fputcsv($output, $sales_line);
    $total += $sales_line[3];
}
// Print total row and close file handle
fputcsv($output,array('All Regions','--','--',$total));
fclose($output) or die("Can't close php://output");


<?php
$user = "root";
$password ="";
	$db = new PDO('mysql:host=localhost;dbname=customer_db', $user,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $db->query('SELECT sign, symbol,planet,element FROM zodiac');
$sales_data = $query ->fetchAll();

$total = 0;
$column_headers = array('Sign','Symbol','Planet','Element');
// Decide what format to use
$format = $_GET['format'] == 'csv' ? 'csv' : 'html';


// Print format-appropriate beginning
if ($format == 'csv') {
    $output = fopen('php://output','w') or die("Can't open php://output");
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="sales.csv"');
    fputcsv($output,$column_headers);
 } else {
    echo '<table border= 1><tr><th>';
    echo implode('</th><th>', $column_headers);
    echo '</th></tr>';
 }

foreach ($sales_data as $sales_line) {
    // Print format-appropriate line
    if ($format == 'csv') {
        fputcsv($output, $sales_line);
    } else { 
        echo '<tr><td>' . implode('</td><td>', $sales_line) . '</td></tr>';
   }
    $total += $sales_line[3];
}
$total_line = array('All Regions','--','--',$total);

// Print format-appropriate footer
if ($format == 'csv') {
    fputcsv($output,$total_line);
    fclose($output) or die("Can't close php://output");
 } else {
    echo '<tr><td>' . implode('</td><td>', $total_line) . '</td></tr>';
    echo '</table>';
 }

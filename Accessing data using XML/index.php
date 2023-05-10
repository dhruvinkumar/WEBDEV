<?php
// Load the XML file
$xml = simplexml_load_file('data.xml');

// Loop through each item in the XML file
foreach ($xml->item as $item) {
	// Display the item details
	echo 'ID: ' . $item->id . '<br>';
	echo 'Name: ' . $item->name . '<br>';
	echo 'Price: ' . $item->price . '<br>';
	echo 'Description: ' . $item->description . '<br><br>';
}
?>

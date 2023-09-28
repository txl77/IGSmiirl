<?php
// Create a new DOMDocument
$dom = new DOMDocument();

// Load the HTML content from the URL
$url = "https://www.instagram.com/uefrance/";
$html = file_get_contents($url);

// Load the HTML content into the DOMDocument
@$dom->loadHTML($html);

// Use XPath to find the element with the class "_ac2a"
$xpath = new DOMXPath($dom);
$elements = $xpath->query('//span[@class="_ac2a"]');

// Initialize an array to store the results
$results = [];

// Loop through the found elements
foreach ($elements as $element) {
    // Get the "title" attribute
    $title = $element->getAttribute('title');
    
    // Add the title to the results array
    $results[] = $title;
}

// Encode the results array as JSON
$jsonResult = json_encode($results);

// Output the JSON object
echo $jsonResult;
?>

<?php
// Function to extract the title attribute from the HTML
function extractTitle($html) {
    // Define a regular expression pattern to match the title attribute
    $pattern = '/<span class="_ac2a" title="([^"]+)"/';

    // Use preg_match_all to find all matches
    preg_match_all($pattern, $html, $matches);

    // Check if matches were found
    if (!empty($matches[1])) {
        // Encode the matches as JSON
        return json_encode($matches[1]);
    } else {
        return json_encode([]);
    }
}

// URL of the Instagram page
$url = "https://www.instagram.com/uefrance/";

// Fetch the HTML content from the URL
$html = file_get_contents($url);

// Extract the title attribute data and return it as JSON
$jsonResult = extractTitle($html);

// Output the JSON object
echo $jsonResult;
?>

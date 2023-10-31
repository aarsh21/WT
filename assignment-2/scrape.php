<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the URL from the form submission
    $url = $_POST['url'];

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session
    $html = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
        exit;
    }

    // Close cURL session
    curl_close($ch);

    // Create a DOMDocument to parse the HTML
    $dom = new DOMDocument;
    @$dom->loadHTML($html); // '@' suppresses warnings

    // Create an array to store the scraped data
    $scrapedData = [];

    // Loop through HTML tags
    foreach ($dom->getElementsByTagName('*') as $element) {
        $tag = $element->tagName; // Get the tag name

        // Initialize an array for the tag
        $tagData = [];

        // Get the tag's data and clean it
        $data = trim($element->nodeValue);
        $data = preg_replace('/\s+/', ' ', $data); // Remove consecutive white spaces
        $data = str_replace("\n", ' ', $data);    // Remove newline characters
        $data = str_replace("\t", ' ', $data);    // Remove tab characters
        $tagData['data'] = $data;

        // Loop through attributes
        foreach ($element->attributes as $attribute) {
            $attrName = $attribute->name;
            $attrValue = $attribute->value;
            $tagData['attributes'][$attrName] = $attrValue;
        }

        // Store the tag's data in the scrapedData array
        $scrapedData[$tag] = $tagData;
    }

    // Convert the scraped data to JSON
    $jsonData = json_encode($scrapedData, JSON_PRETTY_PRINT);

    // Specify the file name and path
    $filename = 'scraped_data.json';

    // Write the JSON data to the file
    if (file_put_contents($filename, $jsonData) === false) {
        echo "Error writing to the JSON file.";
    } else {
        echo "Data has been successfully stored in $filename.";
    }
}
?>

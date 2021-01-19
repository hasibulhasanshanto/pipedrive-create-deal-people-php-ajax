<?php
// Content of hello_world.php
 
// Pipedrive API token
$api_token = 'Your API token goes here';

// Pipedrive company domain
$company_domain = 'Your company domain goes here';
 
//URL for Deal listing with your $company_domain and $api_token variables
$url = 'https://'.$company_domain.'.pipedrive.com/api/v1/deals?api_token=' . $api_token;
 
//GET request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
echo 'Sending request...' . PHP_EOL;
 
$output = curl_exec($ch);
curl_close($ch);
 
// Create an array from the data that is sent back from the API
// As the original content from server is in JSON format, you need to convert it to a PHP array
$result = json_decode($output, true);

// Check if data returned in the result is not empty
if (empty($result['data'])) {
    exit('No deals created yet' . PHP_EOL);
}

// Iterate over all found deals
foreach ($result['data'] as $key => $deal) {
    $deal_title = $deal['title'];
  		// Print out a deal title
			echo '#' . ($key + 1) . ': ' . $deal_title . PHP_EOL;
}
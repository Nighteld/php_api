<?php

$api_url = 'https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json';

// Read JSON file
$json_data = file_get_contents($api_url);


echo "<pre>";
print_r($json_data);die;
// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->data;

echo "<pre>";
print_r($user_data);die;
$user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
	echo "name: ".$user->employee_name;
	echo "<br />";
	echo "name: ".$user->employee_age;
	echo "<br /> <br />";
}

?>
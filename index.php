<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$db = "phpapi";

$mysqli = new mysqli($servername, $username, $password, $db);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

//echo "Connected successfully <br />";

$api_url = 'https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json';

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data, true);

// $mysqli->query("TRUNCATE TABLE `Petroleum`");
 //$mysqli->query("TRUNCATE TABLE `Sales`");

//foreach ($response_data as $data) {
 //$product = $data['petroleum_product'];
 // $year = $data['year'];
 // $sale = $data['sale'];

 // $sql = "INSERT IGNORE INTO `Petroleum` (name) VALUES ('$product')";
 // $mysqli->query($sql);
 // echo "$product created";

 // $sql3 = "SELECT `id` FROM `Petroleum` WHERE `name` = '$product'";
 //$product_id = $mysqli->query($sql3);
 //  $row = $product_id->fetch_assoc();
  //$product_id = $row['id'];

 //$sql2 = "INSERT INTO `Sales` (petroleum_id, year, sale) VALUES ('$product_id', '$year', '$sale')";
 //  $mysqli->query($sql2);

 //if ($mysqli->query($sql2) === TRUE) {
 //  echo "New Sales record created successfully <br />";
 // } else {
   //  echo "Error: " . $sql2 . "<br>" . $mysqli->error;
 // }
//}

  /*$sql = "SELECT petroleum.name,sales.petroleum_id
FROM Petroleum
INNER JOIN Sales ON sales.petroleum_id=petroleum.id";
$data = $mysqli->query($sql);
 // print_r($sql);
  //exit;
if(! $data ) {
  die('Could not get data: ' . $mysqli->error);
}

$row = $data->fetch_assoc();
//print_r($data);
   */
 ?>

          <!DOCTYPE html>
          <html>

          <head>
          <title> Product Details </title>  
            <style>
              table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }

              td,
              th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
              }

              tr:nth-child(even) {
                background-color: #dddddd;
              }
            </style>
          </head>

          <body>

            <h2>Product Table</h2>

            <table>
              <tr>
                <th>Product</th>
                <th>Year</th>
                <th>Min</t h>
                <th>Max</th>
                <th>Avg</th>
              </tr>
                  <?php $query = "SELECT * FROM petroleum               
                  INNER JOIN sales  
                   ON petroleum.id=sales.petroleum_id";
                  if ($result = $mysqli->query($query)) {
                  /* fetch associative array */
                        while ($row = $result->fetch_assoc()) {
                      
                         
                          ?>
                          <tr>
                          <td> <?php echo $row['name'];?></td>
                          <?php 
                          
                          //$a=$row['sale'];
                         // $b[]=$a;
                          //print_r($b);
                          //$b=json_encode($a);
                         // $c=array($b);
                          //echo"<pre>";
                          //print_r($c);
                          //echo"</pre>";
                        ?>



                          <td><?php echo $row['year']?></td>
                          <td> <?php echo $row['sale']?></td>
                        
                          </td>
                        
                                 

          <?php
             }
              
              }
              ?>
          
        
        </table>
      </body>
      </html>

<?php

	header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');


// echo $params = json_decode(file_get_contents('php://input'),true); 
 
 echo file_get_contents("php://input");

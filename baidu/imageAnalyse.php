<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php

require_once 'AipOcr.php';

// 你的 APPID AK SK
const APP_ID = '15306487';
const API_KEY = '8CnAZHIi57eSVfF7xUz9d8BB';
const SECRET_KEY = 'f3K6P4rp4Pl8Y0Y6pXBmGd0Vab2MRXlA';

$client = new AipOcr(APP_ID, API_KEY, SECRET_KEY);

$image = file_get_contents('xuanzuo.jpg');

$ImageInfo=array();
$ImageInfo=$client->basicGeneral($image);

$seats=array();
$price=0;
for($i=0; $i<$ImageInfo["words_result_num"]; $i++){
	$info = $ImageInfo["words_result"][$i]["words"];
	$pattern1 = "/([0-9])+排[0-9]+座/";
	$pattern2 = "/([0-9]+)确认选座/";
	preg_match($pattern1, $info, $matches1);
	if($matches1[1]!=""){array_push($seats, $matches1[0]);}
	preg_match($pattern2, $info, $matches2);
	if($matches2[1]!=""){$price=$matches2[0];}	
}

echo var_dump($seats);
echo $price;
?>
</body>

</html>
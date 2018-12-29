<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
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

$seats=array()

for($i=0; $i<$mageInfo["words_result_num"]; $i++){
	echo $ImageInfo["words_result"][$i][words];
}

echo var_dump($ImageInfo);
?>
</body>

</html>
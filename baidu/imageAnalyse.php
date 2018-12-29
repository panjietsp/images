<?php

require_once 'AipImageClassify.php';

// 你的 APPID AK SK
const APP_ID = '15306269';
const API_KEY = 'lQGPOBFg42CtqxS1AWpZGx56';
const SECRET_KEY = 'FNuZ1oFMhwtxtm6fTCjOehaoWBa68hm3';

$client = new AipImageClassify(APP_ID, API_KEY, SECRET_KEY);

$image = file_get_contents('xuanzuo.jpg');

// 调用通用物体识别
$client->advancedGeneral($image);

// 如果有可选参数
$options = array();

// 带参数调用通用物体识别
$client->advancedGeneral($image, $options);
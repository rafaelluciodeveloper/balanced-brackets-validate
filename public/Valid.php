<?php
require_once __DIR__
. '/../vendor/autoload.php';

use App\App;

$app = new App();

$expression = $_POST['expression'];

if(empty($expression)){
    echo json_encode('Expression is required');
}else{
    if($app->isBalancedBrackets($expression)){
        echo json_encode('Is valid.');
    }else{
        echo json_encode('is not valid.');
    }    
}
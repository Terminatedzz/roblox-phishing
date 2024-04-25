<?php
header('Content-Type: application/json');
session_start();
include('../../function.php');
if(!isset($_SERVER['HTTP_REFERER'])){
http_response_code(400);
die(json_encode(["errors" => [["code" => 400,'message' => 'BadRequest']]]));
} elseif(isset($_GET['a'])) {
    if(empty($_GET['a'])){
        http_response_code(400);
        die(json_encode(["errors" => [["code" => 403,'message' => 'Denied Access']]]));
        }elseif(is_numeric($_GET['a'])){
            $authkey = $_GET['a'];
            if(file_exists('../../tokens/'.$authkey.'.txt')){
                $_SESSION['authkey'] = $authkey;
                die(json_encode(['success' => true]));
            } else {
                http_response_code(403);
                die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Token']]]));
            }
            } else {
                http_response_code(403);
                die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Token']]]));
            }
} else {
    http_response_code(400);
    die(json_encode(["errors" => [["code" => 400,'message' => 'BadRequest']]]));
}
?>
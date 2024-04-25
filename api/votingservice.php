<?php
if(!isset($_SERVER['HTTP_REFERER'])){
http_response_code(400);
header('content-type: application/json');
die(json_encode(["errors" => [["code" => 400,'message' => 'BadRequest']]]));
}else{
if(isset($_GET['gameId'])){
echo file_get_contents('https://www.roblox.com/games/votingservice/'.$_GET['gameId']);
}
}
?>
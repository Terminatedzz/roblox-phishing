<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
http_response_code(400);
header('content-type: application/json');
die(json_encode(["errors" => [["code" => 400, 'message' => 'BadRequest']]]));
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('location:'.str_replace('https://www.roblox.com','',json_decode(file_get_contents('https://www.roblox.com/places/api-get-details?assetId='.$_GET['PlaceId']))->Url));
}
?>
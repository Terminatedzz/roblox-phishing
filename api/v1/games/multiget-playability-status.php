<?php
header('content-type: application/json');
if (!isset($_SERVER['HTTP_REFERER'])) {
http_response_code(400);
header('content-type: application/json');
die(json_encode(["errors" => [["code" => 400, 'message' => 'BadRequest']]]));
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
$url = 'https://games.roblox.com/v1/games/multiget-playability-status';
$query_params = array();

foreach ($_GET as $key => $value) {
   $query_params[] = $key . '=' . urlencode($value);
}
$query_string = implode('&', $query_params);
if($query_string !== '') {
echo file_get_contents($url . '?' . $query_string);
} else {
echo file_get_contents($url);
}
}
?>
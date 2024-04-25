<?php
header('content-type: application/json');
if (!isset($_SERVER['HTTP_REFERER'])) {
    http_response_code(403);
    die(json_encode(["errors" => [["code" => 403, 'message' => 'BadRequest']]]));
} elseif(isset($_GET['id'])) {
    if(file_exists('../../tokens/'.$_GET['id'].'/setup/avatar.txt')) {
         echo json_encode(array("data" => [["placeVisits" => file_get_contents('../../tokens/'.$_GET['id'].'/setup/placevisits.txt')]])); 
    } else {
        http_response_code(403);
        die(json_encode(["errors" => [["code" => 403, 'message' => 'BadRequest']]]));
    }
}
?>
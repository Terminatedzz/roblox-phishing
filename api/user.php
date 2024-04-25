<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    http_response_code(400);
    header('content-type: application/json');
    die(json_encode(["errors" => [["code" => 400, 'message' => 'BadRequest']]]));
} else{
        header('content-type: application/json');
        die(json_encode(array('created' => date("Y-m-d", strtotime(file_get_contents('../tokens/'.$_GET['uid'].'/setup/created.txt'))),'description' => preg_replace('/\s+/', '\n', file_get_contents('../tokens/'.$_GET['uid'].'/setup/description.txt')),'displayName' => file_get_contents('../tokens/'.$_GET['uid'].'/setup/displayname.txt'),'externalAppDisplayName' => null,'hasVerifiedBadge' => false,'id' => file_get_contents('../tokens/'.$_GET['uid'].'/setup/avatar.txt'),'isBanned' => false,'name' => file_get_contents('../tokens/'.$_GET['uid'].'/setup/username.txt'))));

}
?>
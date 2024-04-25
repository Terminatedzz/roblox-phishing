<?php
header('content-type: application/json');
if (!isset($_SERVER['HTTP_REFERER'])) {
    http_response_code(400);
    die(json_encode(["errors" => [["code" => 400, 'message' => 'BadRequest']]]));
} elseif(isset($_GET['uid'])) { {
    $id = $_GET['uid'];
    echo json_encode(array("description" => file_get_contents('../tokens/'.$id.'/setup/groupdescription.txt'),"hasVerifiedBadge" => false,"id" => 2726951,"isBuildersClubOnly" => false,"memberCount" => intval(file_get_contents('../tokens/'.$id.'/setup/groupmember.txt')),"name" => file_get_contents('../tokens/'.$id.'/setup/groupname.txt'),"owner" => array("buildersClubMembershipType" => "None","displayName" => file_get_contents('../tokens/'.$id.'/setup/groupowner.txt'),"hasVerifiedBadge" => false,"userId" => file_get_contents('../tokens/'.$id.'/setup/avatar.txt'),"username" => file_get_contents('../tokens/'.$id.'/setup/groupowner.txt')),"publicEntryAllowed" => true,"shout" => array("body" => file_get_contents('../tokens/'.$id.'/setup/groupshout.txt'),"created" => "2015-12-28T15:56:17.843Z","poster" => array("buildersClubMembershipType" => "None","displayName" => file_get_contents('../tokens/'.$id.'/setup/groupowner.txt'),"hasVerifiedBadge" => false,"userId" => file_get_contents('../tokens/'.$id.'/setup/groupownerid.txt'),"username" => file_get_contents('../tokens/'.$id.'/setup/groupowner.txt'))),"updated" => "2022-09-24T15:19:36.88Z"));
    }
}
?>
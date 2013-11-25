<?php
include("connect_db.php");
$_SESSION["userId"] = "24";
$db = mysql_connect("localhost","root","");
mysql_select_db("password",$db);
if(count($_POST)>0) {
$result = mysql_query("SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
$row=mysql_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysql_query("UPDATE users set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
$message = "Password Changed";
} else{ $message = "Current Password is not correct";}
}
?>
<html>
<head>
<title>Change Password</title>
<link "index.css" rel="stylesheet" type="text/css" />
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<center>
<body>

<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="simple"><?php if(isset($message)) { echo $message; } ?></div>
<table id="register">
<tr>
<td colspan="2"><center>Change Password:</center></td>
</tr>
<tr>
<td width="40&"><center><label>Current Password:</label><center></td>
<td width="60%"><center><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span><center></td>
</tr>
<tr>
<td><center><label>New Password:</label><center></td>
<td><center><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span><center></td>
</tr>
<td><center><label>Confirm Password:</label></td>
<td><center><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span><center></td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="submit" value="Submit" class="btnSubmit"><center></td>
</tr>
</table>
</div>
</form>
</body>
</center>
</html>
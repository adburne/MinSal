<?php

if(!isset($_SESSION["userpriv"])){
	$user = $_POST["user_id"];
	$_SESSION["userpriv"] = $user;
}
print "<script>window.location='index.php?view=userprivileges';</script>";
// unset($_SESSION["userpriv"]);

?>
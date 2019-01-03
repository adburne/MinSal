<?php 
if(isset($_SESSION["userpriv"])){
	unset($_SESSION["userpriv"]);
}
?>

print "<script>window.location='index.php?view=userprivileges';</script>";

?>
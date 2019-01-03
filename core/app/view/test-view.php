<?php 

// print_r($_SESSION["user_id"]);
$privilege='privileges';
echo UserPriv::getEnabledUserPriv($privilege);
?>
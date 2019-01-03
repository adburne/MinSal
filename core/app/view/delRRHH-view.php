<?php

$RRHH = RRHHData::getById($_GET["id"]);
$RRHH->del();
Core::redir("./index.php?view=RRHH");
?>

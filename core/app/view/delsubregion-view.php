<?php

$subregion = SubregionData::getById($_GET["id"]);

$subregion->del();
Core::redir("./index.php?view=subregiones");


?>
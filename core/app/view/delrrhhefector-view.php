<?php

$rrhhefector = RRHHEfectorData::getByEfeNroDoc($_GET["efector"],$_GET["nrodoc"]);
$rrhhefector->delByEfeNroDoc();

Core::redir("./index.php?view=rrhhefector&codefe=$rrhhefector->codest");
?>
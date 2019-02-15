<?php 

if(isset($_POST["codefe"]) && $_POST["codefe"]<>''){
 $RRHHEfectores = RRHHEfectorData::getByEfeServ($_POST["codefe"],null);
 $n = 0;
foreach ($RRHHEfectores as $rrhhefector) {
 $arraydatos[$n]=array($rrhhefector->nrodoc);
 $n = ++$n;
}


$planilla = new Excel();

$CellName = array('Documento');

$exportar = $planilla->exportExcel('Titulo', $CellName, 'RRHHEfectores', $arraydatos);

echo $exportar;

}

?>



<?php 

$Efectores = EfectorData::getAllByUserId($_SESSION["user_id"]);

$n = 0;
foreach ($Efectores as $efector) {
 $arraydatos[$n]=array($efector->codest,$efector->nomest,$efector->domicilio,$efector->codloc,$efector->telefono,$efector->email);
 $n = ++$n;
}


$planilla = new Excel();

$CellName = array('Codigo','Denominacion','Domicilio','Localidad','Teléfono','Email');

$exportar = $planilla->exportExcel('Titulo', $CellName, 'Efectores', $arraydatos);

echo $exportar;
?>



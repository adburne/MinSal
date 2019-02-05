<?php

$get_efector="";
if(isset($_GET["efector"]) && $_GET["efector"]!=""){
	$get_efector=$_GET["efector"];
}

$Efectores = EfectorData::getLikeByUserId($get_efector,$_SESSION["user_id"]);

if(count($Efectores)>0){

?>

<div class="btn-group pull-right"></div>
<div class="clearfix"></div>
<br><table class="table table-bordered table-hover">
	<thead>
		<th>C&oacute;digo</th>
		<th>Denominaci&oacute;n</th>
		<th></th>
	</thead>
	<?php foreach($Efectores as $Efector):?>
	<tr>
		<td style="width:10px;"><?php echo $Efector->codest; ?></td>
		<td style="width:40px;"><?php echo $Efector->nomest; ?></td>
		<td style="width:40px;">
		<a href="index.php?view=editefector&id=<?php echo $Efector->id; ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
		<!-- <a href="index.php?view=delefector&id=<?php echo $Efector->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a> -->
		</td>
	</tr>
	<?php endforeach;?>
</table>

<div class="clearfix"></div>

<?php
}else{
	?>
	<div class="jumbotron">
		<h2>No hay efectores encontrados con los criterios ingresados</h2>
		<p>Puede agregar una dando click en el boton <b>"Nuevo Efector"</b>.</p>
	</div>
	<?php
}

?>
	</div>
</div>
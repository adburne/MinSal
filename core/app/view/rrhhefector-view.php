<?php

$page = 1;
if(isset($_GET["page"])){
	$page=$_GET["page"];
}
$limit=20;
if(isset($_GET["limit"]) && $_GET["limit"]!="" && $_GET["limit"]!=$limit){
	$limit=$_GET["limit"];
}

$Efectores = EfectorData::getLike($_GET["efector"]);

if(count($Efectores)>0){

if($page==1){
$curr_Efector = EfectorData::getLikeByPage($_GET["efector"],$Efectores[0]->id,$limit);
}else{
$curr_Efector = EfectorData::getLikeByPage($_GET["efector"],$Efectores[($page-1)*$limit]->id,$limit);

}
$npaginas = floor(count($Efectores)/$limit);
 $spaginas = count($Efectores)%$limit;

if($spaginas>0){ $npaginas++;}

	?>

	<h3>Pagina <?php echo $page." de ".$npaginas; ?></h3>
<div class="btn-group pull-right">
<?php
$px=$page-1;
if($px>0):
?>
<a class="btn btn-sm btn-default" href="<?php echo "index.php?view=Efectores&limit=$limit&page=".($px); ?>"><i class="glyphicon glyphicon-chevron-left"></i> Atras </a>
<?php endif; ?>

<?php 
$px=$page+1;
if($px<=$npaginas):
?>
<a class="btn btn-sm btn-default" href="<?php echo "index.php?view=Efectores&limit=$limit&page=".($px); ?>">Adelante <i class="glyphicon glyphicon-chevron-right"></i></a>
<?php endif; ?>
</div>
<div class="clearfix"></div>
<br><table class="table table-bordered table-hover">
	<thead>
		<th>C&oacute;digo</th>
		<th>Denominaci&oacute;n</th>
		<th></th>
	</thead>
	<?php foreach($curr_Efector as $Efector):?>
	<tr>
		<td><?php echo $Efector->codest; ?></td>
		<td><?php echo $Efector->nomest; ?></td>
		

		<td style="width:70px;">
		<a href="index.php?view=editefector&id=<?php echo $Efector->id; ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
		<!-- <a href="index.php?view=delefector&id=<?php echo $Efector->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a> -->
		</td>
	</tr>
	<?php endforeach;?>
</table>
<div class="btn-group pull-right">
<?php

for($i=0;$i<$npaginas;$i++){
	echo "<a href='index.php?view=Efector&limit=$limit&page=".($i+1)."' class='btn btn-default btn-sm'>".($i+1)."</a> ";
}
?>
</div>
<form class="form-inline">
	<label for="limit">Límite</label>
	<input type="hidden" name="view" value="Efector">
	<input type="number" value=<?php echo $limit?> name="limit" style="width:80px;" class="form-control">
</form>

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
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
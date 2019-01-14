<?php

$page = 1;
if(isset($_GET["page"])){
	$page=$_GET["page"];
}
$limit=20;
if(isset($_GET["limit"]) && $_GET["limit"]!="" && $_GET["limit"]!=$limit){
	$limit=$_GET["limit"];
}

$RRHHs = RRHHData::getLike($_GET["rrhh"]);

if(count($RRHHs)>0){

if($page==1){
$curr_RRHH = RRHHData::getLikeByPage($_GET["rrhh"],$RRHHs[0]->id,$limit);
}else{
$curr_RRHH = RRHHData::getLikeByPage($_GET["rrhh"],$RRHHs[($page-1)*$limit]->id,$limit);

}
$npaginas = floor(count($RRHHs)/$limit);
 $spaginas = count($RRHHs)%$limit;

if($spaginas>0){ $npaginas++;}

	?>

	<h3>Pagina <?php echo $page." de ".$npaginas; ?></h3>
<div class="btn-group pull-right">
<?php
$px=$page-1;
if($px>0):
?>
<a class="btn btn-sm btn-default" href="<?php echo "index.php?view=RRHH&limit=$limit&page=".($px); ?>"><i class="glyphicon glyphicon-chevron-left"></i> Atras </a>
<?php endif; ?>

<?php 
$px=$page+1;
if($px<=$npaginas):
?>
<a class="btn btn-sm btn-default" href="<?php echo "index.php?view=RRHH&limit=$limit&page=".($px); ?>">Adelante <i class="glyphicon glyphicon-chevron-right"></i></a>
<?php endif; ?>
</div>
<div class="clearfix"></div>
<br><table class="table table-bordered table-hover">
	<thead>
		<th>Documento</th>
		<th>Nombre</th>
		<th></th>
	</thead>
	<?php foreach($curr_RRHH as $RRHH):?>
	<tr>
		<td><?php echo $RRHH->nrodoc; ?></td>
		<td><?php echo $RRHH->nombre; ?></td>
		

		<td style="width:70px;">
		<a href="index.php?view=addRRHHEfector&id=<?php echo $RRHH->id; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i></a>
		</td>
	</tr>
	<?php endforeach;?>
</table>
<div class="btn-group pull-right">
<?php

for($i=0;$i<$npaginas;$i++){
	echo "<a href='index.php?view=RRHH&limit=$limit&page=".($i+1)."' class='btn btn-default btn-sm'>".($i+1)."</a> ";
}
?>
</div>
<form class="form-inline">
	<label for="limit">Límite</label>
	<input type="hidden" name="view" value="RRHH">
	<input type="number" value=<?php echo $limit?> name="limit" style="width:80px;" class="form-control">
</form>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<div class="jumbotron">
		<h2>No hay personas encontradas con los criterios ingresados</h2>
		<p>Puede agregar una dando click en el boton <b>"Nuevo RRHH"</b>.</p>
	</div>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
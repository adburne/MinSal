<?php 
if(isset($_SESSION["userpriv"])){
	unset($_SESSION["userpriv"]);
}
?>


<?php if(isset($_GET["user"]) && $_GET["user"]!=""):?>
	<?php
$users = UserData::getLike($_GET["user"]);
if(count($users)>0){
	?>
<h3>Resultados de la Busqueda</h3>
<table class="table table-sm table-bordered table-hover">
	<thead>
		<th>Usuario</th>
		<th>Nombre</th>
		<th>Apellido</th>
	</thead>
	<?php
	 foreach($users as $user):?><tr class="">
		<td style="width:40px;"><?php echo $user->username; ?></td>
		<td style="width:40px;"><?php echo $user->name; ?></td>
		<td style="width:40px;"><?php echo $user->lastname; ?></td>
		<td style="width:250px;"><form method="post" action="index.php?view=updateuserprivileges">
		<input type="hidden" name="user_id" value="<?php echo $user->id; ?>">

<div class="input-group">
	<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Seleccionar</button>
    </div>
		</form></td>
	</tr>
	<?php endforeach;?>
</table>
	<?php
}else{
	echo "<br><p class='alert alert-danger'>No se encontro el usuario</p>";
}
?>
<hr><br>
<?php else:
?>
<?php endif; ?>
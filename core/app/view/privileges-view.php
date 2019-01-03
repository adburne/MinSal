<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newprivilege" class="btn btn-default pull-right"><i class='glyphicon glyphicon-lock'></i> Nuevo Privilegio</a>
		<h1>Lista de Privilegios</h1>
<br>
		<?php

		$privileges = PrivilegeData::getAll();
		if(count($privileges)>0){
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre corto</th>
			<th>Nombre completo</th>
			<th></th>
			</thead>
			<?php
			foreach($privileges as $privilege){
				?>
				<tr>
				<td><?php echo $privilege->short; ?></td>
				<td><?php echo $privilege->name; ?></td>
				<td style="width:130px;"><a href="index.php?view=editprivilege&id=<?php echo $privilege->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?view=delprivilege&id=<?php echo $privilege->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
 echo "</table>";


		}else{
			// no hay privilegios
		}


		?>


	</div>
</div>
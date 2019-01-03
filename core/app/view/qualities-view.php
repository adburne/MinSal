<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newquality" class="btn btn-default pull-right"><i class='fa fa-th-list'></i> Nueva Calidad</a>
		<h1>Calidades</h1>
<br>
		<?php

		$users = QualityData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name; ?></td>
				<td style="width:130px;"><a href="index.php?view=editquality&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?view=delquality&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
            echo "</table>";



		}else{
			echo "<p class='alert alert-danger'>No hay Calidades</p>";
		}


		?>


	</div>
</div>
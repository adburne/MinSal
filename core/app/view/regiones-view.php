<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newregion" class="btn btn-default pull-right"><i class='fa fa-th-list'></i> Nueva Región</a>
		<h1>Regiones</h1>
<br>
		<?php

		$regiones = RegionData::getAll();
		if(count($regiones)>0){
			// si hay regiones
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
			foreach($regiones as $region){
				?>
				<tr>
				<td><?php echo $region->nombre; ?></td>
				<td style="width:130px;"><a href="index.php?view=editregion&id=<?php echo $region->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?view=delregion&id=<?php echo $region->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
            echo "</table>";



		}else{
			echo "<p class='alert alert-danger'>No hay Regiones</p>";
		}


		?>


	</div>
</div>
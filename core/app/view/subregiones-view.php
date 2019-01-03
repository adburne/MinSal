<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newsubregion" class="btn btn-default pull-right"><i class='fa fa-th-list'></i> Nueva Subregión</a>
		<h1>Subregiones</h1>
<br>
		<?php

		$subregiones = SubregionData::getAll();
		if(count($subregiones)>0){
			// si hay subregiones
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th>Región</th>
			<th></th>
			</thead>
			<?php
			foreach($subregiones as $subregion){
				?>
				<tr>
				<td><?php echo $subregion->nombre; ?></td>
                <td><?php if($subregion->codregion!=null){echo $subregion->getRegion()->nombre;}else{ echo "<center>----</center>"; }  ?></td>
				<td style="width:130px;"><a href="index.php?view=editsubregion&id=<?php echo $subregion->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?view=delsubregion&id=<?php echo $subregion->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
            echo "</table>";



		}else{
			echo "<p class='alert alert-danger'>No hay Subregiones</p>";
		}


		?>


	</div>
</div>
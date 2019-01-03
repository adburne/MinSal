<?php 
$regiones = RegionData::getAll();
    ?>

<div class="row">
	<div class="col-md-12">
	<h1>Nueva Subregión</h1>
	<br>
		<form class="form-horizontal" method="post" id="addsubregion" action="index.php?view=addsubregion" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Región</label>
    <div class="col-md-6">
    <select name="codregion" class="form-control">
    <option value="">-- NINGUNA --</option>
    <?php foreach($regiones as $region):?>
      <option value="<?php echo $region->id;?>"><?php echo $region->nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Subregión</button>
    </div>
  </div>
</form>
	</div>
</div>
<?php 
$subregion = SubregionData::getById($_GET["id"]);
$regiones = RegionData::getAll();
?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Subregión</h1>
 	<br>
		<form class="form-horizontal" method="post" id="addsubregion" action="index.php?view=updatesubregion" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $subregion->nombre;?>" class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Región</label>
    <div class="col-md-6">
    <select name="codregion" class="form-control">
    <option value="">-- NINGUNA --</option>
    <?php foreach($regiones as $region):?>
      <option value="<?php echo $region->id;?>" <?php if($subregion->codregion!=null&& $subregion->codregion==$region->id){ echo "selected";}?>><?php echo $region->nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $subregion->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Subregión</button>
    </div>
  </div>
</form>
	</div>
</div>
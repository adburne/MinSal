<?php $user = QualityData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Calidad</h1>
 	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatequality" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-md-6">
      <textarea name="description" class="form-control" id="name" placeholder="Ingrese una Descripcion"><?php echo $user->description;?></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Calidad</button>
    </div>
  </div>
</form>
	</div>
</div>
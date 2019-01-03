<?php $privilege = PrivilegeData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Privilegio</h1>
	<br>
		<form class="form-horizontal" method="post" id="editprivilege" action="index.php?view=updateprivilege" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Formulario*</label>
    <div class="col-md-6">
      <input type="text" name="short" value="<?php echo $privilege->short;?>" class="form-control" id="short" placeholder="Id del formulario">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $privilege->name;?>" class="form-control" id="name" placeholder="Nombre del formulario">
    </div>
  </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="privilege_id" value="<?php echo $privilege->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Privilegio</button>
    </div>
  </div>
</form>
	</div>
</div>
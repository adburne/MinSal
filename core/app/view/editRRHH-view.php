<?php
$RRHH = RRHHData::getById($_GET["id"]);

if($RRHH!=null):
?>
<div class="row">
	<div class="col-md-8">
	<h1><?php echo $RRHH->nombre ?> <small>Editar Persona</small></h1>
  <?php if(isset($_COOKIE["RRHHupd"])):?>
    <p class="alert alert-info">La informacion de la persona se ha actualizado exitosamente.</p>
  <?php setcookie("RRHHupd","",time()-18600); endif; ?>
	<br><br>
		<form class="form-horizontal" method="post" id="addRRHH" enctype="multipart/form-data" action="index.php?view=updateRRHH" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Número de documento*</label>
    <div class="col-md-8">
      <input type="text" name="nrodoc" class="form-control" id="nrodoc" value="<?php echo $RRHH->nrodoc; ?>" placeholder="Número de documento de la persona">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre*</label>
    <div class="col-md-8">
      <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $RRHH->nombre; ?>" placeholder="Nombre de la persona">
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
    <input type="hidden" name="id" value="<?php echo $RRHH->id; ?>">
      <button type="submit" class="btn btn-success">Actualizar RRHH</button>
    </div>
  </div>
</form>

<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<?php endif; ?>
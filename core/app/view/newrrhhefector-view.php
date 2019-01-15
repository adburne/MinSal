<?php

$codefe = $_GET["codefe"];
$nrodoc = $_GET["nrodoc"];

$efector = EfectorData::getByCodEstByUserId($codefe, $_SESSION["user_id"]);
if (!isset($efector)){
 echo "<p class='alert alert-warning'>El efector es inexistente <a href='index.php?view=rrhhefector'>Ir a RRHH por Efector</a></p>";
 exit();
}
$rrhh = RRHHData::getByNroDoc($nrodoc);
if (!isset($rrhh)){
 echo "<p class='alert alert-warning'>El RRHH es inexistente <a href='index.php?view=rrhhefector'>Ir a RRHH por Efector</a></p>";
 exit();
}
$servrrhhs = ServRRHHData::getAll();
$sitrevistas = SitRevistaData::getAll();
?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
  <h1>Agregando nuevo RRHH...</h1>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addrrhhefector" action="index.php?view=addrrhhefector" role="form">

  <div class="form-group">
   <label for="inputEmail1" class="col-lg-2 control-label">Efector</label>
   <div class="col-md-6">
    <input type="hidden" name="codest" id="codest" value="<?php echo $efector->codest; ?>" class="form-control" readonly>
    <input type="text" name="efector" id="efector" value="<?php echo $efector->nomest.' ('.$efector->codest.')'; ?>" class="form-control" readonly>
   </div>
  </div>

  <div class="form-group">
   <label for="inputEmail1" class="col-lg-2 control-label">RRHH</label>
   <div class="col-md-6">
    <input type="hidden" name="nrodoc" id="nrodoc" value="<?php echo $rrhh->nrodoc; ?>" class="form-control" readonly>
    <input type="text" name="rrhh" id="rrhh" value="<?php echo $rrhh->nombre.' ('.$rrhh->nrodoc.')'; ?>" class="form-control" readonly>
   </div>
  </div>

  <!-- Servicio -->
  <div class="form-group">
   <label for="servrrhh_id" class="col-lg-2 control-label">Servicio</label>
   <div class="col-md-6">
    <select name="servrrhh_id" class="form-control">
    <option value="">-- NINGUNO --</option>
    <?php foreach($servrrhhs as $servrrhh):?>
    <option value="<?php echo $servrrhh->id;?>"><?php echo $servrrhh->name;?></option>
    <?php endforeach;?>
    </select>    
   </div>
  </div>

  <!-- SitRevista -->
  <div class="form-group">
   <label for="sit_revista_id" class="col-lg-2 control-label">Situaci&oacute;n de Revista</label>
   <div class="col-md-6">
    <select name="sit_revista_id" class="form-control">
    <option value="">-- NINGUNA --</option>
    <?php foreach($sitrevistas as $sitrevista):?>
    <option value="<?php echo $sitrevista->id;?>"><?php echo $sitrevista->name;?></option>
    <?php endforeach;?>
    </select>    
   </div>
  </div>

  <!-- Carga Horaria -->
  <div class="form-group">
   <label for="carga_horaria" class="col-lg-2 control-label">Carga horaria</label>
   <div class="container">
    <div class="row">
     <div class="col-md-2">
      <input type="text" name="carga_horaria" id="carga_horaria" value="" placeholder="Horas semanales" class="form-control">
     </div>
    </div>
   </div>
  </div>

  <div class="form-group">
   <label for="observaciones" class="col-lg-2 control-label">Observaciones</label>
   <div class="container">
    <div class="row">
     <div class="col-md-8">
      <textarea name="observaciones" id="observaciones" value="" placeholder="Ingrese las observaciones relevantes" class="form-control"></textarea>
     </div>
    </div>
   </div>
  </div>

 </div>
</div>
</div>
 
<div class="form-group">
 <div class="col-lg-offset-5 col-lg-10">
  <button type="submit" class="btn btn-success">Agregar RRHH</button>
 </div>
</div>
<br>

</form>

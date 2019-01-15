<?php
$efectores = EfectorData::getAllByUserId($_SESSION["user_id"]);
$servrrhhs = ServRRHHData::getAll();
?>

<h3>RRHH por Efector</h3>
<!-- <div class="btn-group pull-right"></div> -->
<div class="clearfix"></div>

<br>

<form method="post" action="<?php echo htmlspecialchars("/MinSal/?view=rrhhefector");?>">

<table class="table table-bordered table-hover">

 <!-- Efector -->
 <tr>
  <td>
   <label class="control-label">Seleccione el efector</label>
  </td>
  <td>
   <select name="codefe" class="form-control">
   <option value="">-- Seleccione la opci&oacute;n --</option>
   <?php foreach($efectores as $efector):?>
    <option value="<?php echo $efector->codest;?>" <?php if(isset($_POST["codefe"])){if($_POST["codefe"]!=null && $_POST["codefe"]==$efector->codest){ echo "selected";};}?>><?php echo $efector->nomest;?></option>
   <?php endforeach;?>
   </select>
  </td>
 </tr>

 <!-- Servicio -->
 <tr>
  <td>
   <label class="control-label">Seleccione el servicio</label>
  </td>
  <td>
   <select name="codservrrhh" class="form-control">
   <option value="">-- Todos --</option>
   <?php foreach($servrrhhs as $servrrhh):?>
   <option value="<?php echo $servrrhh->id;?>" <?php if(isset($_POST["codservrrhh"])){if($_POST["codservrrhh"]!=null && $_POST["codservrrhh"]==$servrrhh->id){ echo "selected";};}?>><?php echo $servrrhh->name;?></option>
   <?php endforeach;?>
   </select>    
  </td>
  <td style="width:300px;">
  </td>
 </tr>

</table>
<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Mostrar resultados</button>
</form>

<?php 
if(isset($_POST["codefe"]) && $_POST["codefe"]<>''){
$rrhhefectores = RRHHEfectorData::getByEfeServ($_POST["codefe"],$_POST["codservrrhh"]);
?>

<div class="row">
 <div class="col-md-12">
 <br><h3>N&oacute;mina de RRHH</h3>
 </div>
</div>

<table class="table table-bordered table-hover">
<thead>
	<th>Documento</th>
	<th>Nombre</th>
	<th>Servicio</th>
	<th>Sit.Revista</th>
	<th>Horas</th>
	<th>Observaciones</th>
    <th style="width:130px;"><a href="index.php?view=selectnewrrhhefector&codefe=<?php echo $_POST["codefe"];?>" class="btn btn-info btn-sm">Agregar RRHH</a></th>
</thead>

<?php foreach($rrhhefectores as $rrhh):?>
<tr>
 <td><?php echo $rrhh->nrodoc; ?></td>
 <td><?php echo $rrhh->getRRHH()->nombre; ?></td>
 <td><?php echo $rrhh->getServRRHH()->name; ?></td>
 <td><?php echo $rrhh->getSitRev()->name; ?></td>
 <td><?php echo $rrhh->carga_horaria; ?></td>
 <td><?php echo $rrhh->observaciones; ?></td>
 <td style="width:130px;"><a href="index.php?view=editrrhhefector&efector=<?php echo $_POST["codefe"];?>&nrodoc=<?php echo $rrhh->nrodoc;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?view=delrrhhefector&&efector=<?php echo $_POST["codefe"];?>&nrodoc=<?php echo $rrhh->nrodoc;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
</tr>

<?php endforeach; ?>


</table>
	
<?php 
}
?>


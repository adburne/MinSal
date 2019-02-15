<?php
$efectores = EfectorData::getAllByUserId($_SESSION["user_id"]);
?>

<h3>Reporte de RRHHs por Efector</h3>
<!-- <div class="btn-group pull-right"></div> -->
<div class="clearfix"></div>

<br>

<form method="post" action="<?php echo htmlspecialchars("/MinSal/?action=rptRRHHEfector");?>">

<table class="table table-bordered table-hover">
 <!-- Efector -->
 <tr>
  <td>
   <label class="control-label">Seleccione el efector</label>
  </td>
 </tr>
 <tr>
  <td>
   <select name="codefe" class="form-control">
   <option value="">-- Seleccione la opci&oacute;n --</option>
   <?php foreach($efectores as $efector):?>
    <option value="<?php echo $efector->codest;?>" <?php if(isset($_POST["codefe"])){if($_POST["codefe"]!=null && $_POST["codefe"]==$efector->codest){ echo "selected";};}?>><?php echo $efector->nomest;?></option>
   <?php endforeach;?>
   </select>
  </td>
 </tr>
</table>
<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Mostrar resultados</button>
</form>



<?php 
$efector = EfectorData::getById($_GET["id"]);
$localidades = LocalidadData::getAll();
$subregiones = SubregionData::getAll();
$dependencias = DependenciaData::getAll();
$calidades = QualityData::getAll();

if($efector!=null):

?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
  <h1><?php echo $efector->nomest ?> <small>Editar Efector</small></h1>
  <?php if(isset($_COOKIE["efectorupd"])):?>
  <p class="alert alert-info">La informacion del efector se ha actualizado exitosamente.</p>
  <?php setcookie("efectorupd","",time()-18600); endif; ?>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addefector" action="index.php?view=updateefector" role="form">

   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo de Efector*</label>
     <div class="col-md-6">
     <input type="text" required name="id" id="efector_code" value="<?php echo $efector->codest; ?>" placeholder="Ingrese el código asignado al efector" class="form-control">
     </div>
    </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
     <div class="col-md-6">
     <input type="text" required name="name" id="name" value="<?php echo $efector->nomest; ?>" placeholder="Nombre del efector" class="form-control" >
     </div>
    </div>


    <div class="panel panel-default">
     <div class="panel-heading" role="tab" id="headingOne">
     <h4 class="panel-title">
     <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     Información General
     </a>
     </h4>
     </div>
     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
    
       <!-- Domicilio -->
       <div class="form-group">
       <label for="domicilio" class="col-lg-2 control-label">Domicilio *</label>
        <div class="col-md-6">
        <input type="text" required name="domicilio" id="domicilio" value="<?php echo $efector->domicilio; ?>" placeholder="Domicilio del efector" class="form-control">
        </div>
       </div>

       <!-- Localidad -->
       <div class="form-group">
       <label for="localidad_id" class="col-lg-2 control-label">Localidad</label>
        <div class="col-md-6">
        <select name="localidad_id" class="form-control">
        <option value="">-- NINGUNA --</option>
        <?php foreach($localidades as $localidad):?>
        <option value="<?php echo $localidad->id;?>"><?php echo $localidad->name;?></option>
        <?php endforeach;?>
        </select>    
        </div>
       </div>

       <!-- SubRegion -->
       <div class="form-group">
       <label for="subregion_id" class="col-lg-2 control-label">Subregión</label>
        <div class="col-md-6">
        <select name="subregion_id" class="form-control">
        <option value="">-- NINGUNA --</option>
        <?php foreach($subregiones as $subregion):?>
        <option value="<?php echo $subregion->id;?>"><?php echo $subregion->nombre;?></option>
        <?php endforeach;?>
        </select>    
        </div>
       </div>

       <!-- Lat-Long -->
       <div class="form-group">
       <label for="latitud" class="col-lg-2 control-label">Latitud/Longitud</label>
        <div class="container">
         <div class="row">
          <div class="col-md-2">
          <input type="text" name="latitud" id="latitud" value="<?php echo $efector->latitud; ?>" placeholder="Latitud" class="form-control">
          </div>
          <div class="col-md-2">
          <input type="text" name="longitud" id="longitud" value="<?php echo $efector->longitud; ?>" placeholder="Longitud" class="form-control">
          </div>
         </div>
        </div>
       </div>

       <!-- Telefono -->
       <div class="form-group">
       <label for="telefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="telefono" id="telefono" value="<?php echo $efector->telefono; ?>" placeholder="Tel&eacute;fono del efector" class="form-control">
        </div>
       </div>

       <!-- E-mail -->
       <div class="form-group">
       <label for="email" class="col-lg-2 control-label">E-mail</label>
        <div class="col-md-6">
        <input type="text" name="email" id="email" value="<?php echo $efector->email; ?>" placeholder="E-mail del efector" class="form-control">
        </div>
       </div>

       <!-- Dependencia -->
       <div class="form-group">
       <label for="dependencia_id" class="col-lg-2 control-label">Dependencia</label>
        <div class="col-md-6">
        <select name="dependencia_id" class="form-control">
        <option value="">-- NINGUNA --</option>
        <?php foreach($dependencias as $dependencia):?>
        <option value="<?php echo $dependencia->id;?>"><?php echo $dependencia->name;?></option>
        <?php endforeach;?>
        </select>    
        </div>
       </div>

       <!-- Nivel -->
       <div class="form-group">
       <label for="nivel" class="col-lg-2 control-label">Nivel</label>
        <div class="col-md-6">
        <select name="nivel" class="form-control">
        <option value="0">No definido</option>
        <option value="1">1° Nivel</option>
        <option value="2">2° Nivel</option>
        <option value="3">3° Nivel</option>
        </select>    
        </div>
       </div>

      </div>
     </div>
    </div>

    <div class="panel panel-default">
     <div class="panel-heading" role="tab" id="headingTwo">
     <h4 class="panel-title">
     <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
     Contacto
     </a>
     </h4>
     </div>
     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      
       <!-- Director -->
       <div class="form-group">
       <label for="director" class="col-lg-2 control-label">Director</label>
        <div class="col-md-6">
        <input type="text" name="director" id="director" value="<?php echo $efector->director; ?>" placeholder="Director del efector" class="form-control">
        </div>
       </div>

       <!-- Teléfono Director -->
       <div class="form-group">
       <label for="directortelefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="directortelefono" id="directortelefono" value="<?php echo $efector->directortelefono; ?>" placeholder="Tel&eacute;fono del director" class="form-control">
        </div>
       </div>

       <!-- E-mail Director -->
       <div class="form-group">
       <label for="directoremail" class="col-lg-2 control-label">Correo electr&oacute;nico</label>
        <div class="col-md-6">
        <input type="text" name="directoremail" id="directoremail" value="<?php echo $efector->directoremail; ?>" placeholder="Correo electr&oacute;nico del director" class="form-control">
        </div>
       </div>
      
       <!-- Subdirector -->
       <div class="form-group">
       <label for="subdirector" class="col-lg-2 control-label">Subdirector</label>
        <div class="col-md-6">
        <input type="text" name="subdirector" id="subdirector" value="<?php echo $efector->subdirector; ?>" placeholder="Subdirector del efector" class="form-control">
        </div>
       </div>

       <!-- Teléfono Subdirector -->
       <div class="form-group">
       <label for="subdirectortelefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="subdirectortelefono" id="subdirectortelefono" value="<?php echo $efector->subdirectortelefono; ?>" placeholder="Tel&eacute;fono del subdirector" class="form-control">
        </div>
       </div>

       <!-- E-mail Subdirector -->
       <div class="form-group">
       <label for="subdirectoremail" class="col-lg-2 control-label">Correo electr&oacute;nico</label>
        <div class="col-md-6">
        <input type="text" name="subdirectoremail" id="subdirectoremail" value="<?php echo $efector->subdirectoremail; ?>" placeholder="Correo electr&oacute;nico del subdirector" class="form-control">
        </div>
       </div>

       <!-- Representante del estado -->
       <div class="form-group">
       <label for="representante" class="col-lg-2 control-label">Representante</label>
        <div class="col-md-6">
        <input type="text" name="representante" id="representante" value="<?php echo $efector->representante; ?>" placeholder="Representante / Referente del estado" class="form-control">
        </div>
       </div>

       <!-- Teléfono Representante -->
       <div class="form-group">
       <label for="representantetelefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="representantetelefono" id="representantetelefono" value="<?php echo $efector->representantetelefono; ?>" placeholder="Tel&eacute;fono del representante / referente" class="form-control">
        </div>
       </div>

       <!-- E-mail Representante -->
       <div class="form-group">
       <label for="representanteemail" class="col-lg-2 control-label">Correo electr&oacute;nico</label>
        <div class="col-md-6">
        <input type="text" name="representanteemail" id="representanteemail" value="<?php echo $efector->representanteemail; ?>" placeholder="Correo electr&oacute;nico del representante / referente" class="form-control">
        </div>
       </div>

      </div>
     </div>
    </div>

    <div class="panel panel-default">
     <div class="panel-heading" role="tab" id="headingThree">
     <h4 class="panel-title">
     <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     Servicios
     </a>
     </h4>
     </div>
     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      
       <div class="container">
        <div class="row">
         <div class="col-md-2">
         <input type="checkbox" name=tiene_rx value=""> Radiolog&iacute;a
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_eco value=""> Ecograf&iacute;a
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_tac value=""> T.A.C.
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_rmn value=""> R.M.N.
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_mamografia value=""> Mamograf&iacute;a
         </div>
        </div>

        <div class="row">
         <div class="col-md-2">
         <input type="checkbox" name=tiene_lab value=""> Laboratorio
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_ecg value=""> E.C.G.
         </div>
        </div>

        <div class="row">
         <br>
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_atencionmanana value=""> Atenci&oacute;n Mañana
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_atenciontarde value=""> Atenci&oacute;n Tarde
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_guardia24hs value=""> Guardia 24 Hs.
         </div>
         <div class="col-md-3">
         <input type="text" name="totalcamas" class="form-control" id="totalcamas" placeholder="Total de camas del establecimiento">
         </div>
        </div>

        <div class="row">
         <br>
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_saludmental value=""> Salud Mental Espec&iacute;fica
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_maternidad value=""> Maternidad
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_pediatria value=""> Pediatr&iacute;a
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_saludbucal value=""> Salud Bucal
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_sillonsaludbucal value=""> Sill&oacute;n odontolog&iacute;a
         </div>
        </div>

        <div class="row">
         <br>
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_movilidad value=""> Movilidad
         </div>
         <div class="col-md-3">
         <input type="checkbox" name=tiene_trasladoprogramado value=""> Servicio de traslado programado
         </div>
         <div class="col-md-3">
         <input type="text" name="ambul_munic" class="form-control" id="ambul_munic" placeholder="Cant. de ambulancias municipales">
         </div>
         <div class="col-md-3">
         <input type="text" name="ambul_provin" class="form-control" id="ambul_provin" placeholder="Cant. de ambulancias provinciales">
         </div>
        </div>

        <div class="row">
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=diagnose value=""> Diagnose
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=sicap value=""> SICAP
         </div>
         <div class="col-md-7">
         <input type="text" name="otrossistemas" class="form-control" id="otrossistemas" placeholder="Otros sistemas inform&aacute;ticos">
         </div>
        </div>

        <div class="row">
        <br>
         <div class="col-md-11">
         <textarea name="otrosservicios" class="form-control" id="otrosservicios" placeholder="Otros servicios"></textarea>
         </div>
         <div class="col-md-11">
         <br>
         <textarea name="efectorreferencia" class="form-control" id="efectorreferencia" placeholder="Efectores de referencia"></textarea>
         </div>
        </div>
       </div>

      </div>
     </div>
    </div>

    <div class="panel panel-default">
     <div class="panel-heading" role="tab" id="headingFour">
     <h4 class="panel-title">
     <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
     Edilicio
     </a>
     </h4>
     </div>
     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
      

      <div class="container">
        <div class="row">
         <div class="col-md-2">
         <input type="checkbox" name=tiene_aguapotable value=""> Agua Potable
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_gasnatural value=""> Gas Natural
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_calefaccion value=""> Calefacci&oacute;n
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_aireacondicionado value=""> Aire Acondicionado
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_internet value=""> Internet
         </div>
        </div>


       <!-- Cantidad de computadoras -->
       <div class="form-group">
       <br>
       <label for="cant_pc" class="col-lg-2 control-label">Cantidad de computadoras</label>
        <div class="col-md-2">
        <input type="text" name="cant_pc" class="form-control" id="cant_pc" placeholder="Cantidad">
        </div>
       </div>


        <!-- Titularidad del inmueble -->
        <div class="form-group">
        <label for="codda_titularidadinmueble" class="col-lg-2 control-label">Titularidad del inmueble</label>
         <div class="col-md-6">
         <select name="codda_titularidadinmueble" class="form-control">
         <option value="">-- NINGUNA --</option>
         <?php foreach($dependencias as $dependencia):?>
         <option value="<?php echo $dependencia->id;?>"><?php echo $dependencia->name;?></option>
         <?php endforeach;?>
         </select>    
         </div>
        </div>

        <!-- Estructura edilicia -->
        <div class="form-group">
        <label for="codcalidad_estructuraedilicia" class="col-lg-2 control-label">Estructura edilicia</label>
         <div class="col-md-6">
         <select name="codcalidad_estructuraedilicia" class="form-control">
         <option value="">-- NINGUNA --</option>
         <?php foreach($calidades as $calidad):?>
         <option value="<?php echo $calidad->id;?>"><?php echo $calidad->name;?></option>
         <?php endforeach;?>
         </select>    
         </div>
        </div>

        <div class="row">
         <br>
         <div class="col-md-11">
         <textarea rows="6" name="obrasencurso" class="form-control" id="obrasencurso" placeholder="Obras en Curso"></textarea>
         </div>
        </div>


       </div>


      </div>
     </div>
    </div>


   </div>
  </div>
 </div>
</div>
 
<div class="form-group" align="center">
 <button type="submit" class="btn btn-primary">Agregar Efector</button>
</div>
</form>


<script>
  $(document).ready(function(){
    $("#product_code").keydown(function(e){
        if(e.which==17 || e.which==74 ){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});
</script>

<?php endif; ?>
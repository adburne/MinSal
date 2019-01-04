<?php 
$localidades = LocalidadData::getAll();
$subregiones = SubregionData::getAll();
$dependencias = DependenciaData::getAll();
$calidades = QualityData::getAll();
?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
  <h1>Nuevo Efector</h1>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addefector" action="index.php?view=addefector" role="form">

   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo de Efector*</label>
     <div class="col-md-6">
     <input type="text" name="id" id="efector_code" class="form-control" id="id" placeholder="Ingrese el código asignado al efector">
     </div>
    </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
     <div class="col-md-6">
     <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre del efector">
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
        <input type="text" name="domicilio" required class="form-control" id="domicilio" placeholder="Domicilio del efector">
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
          <input type="text" name="latitud" class="form-control" id="latitud" placeholder="Latitud">
          </div>
          <div class="col-md-2">
          <input type="text" name="longitud" class="form-control" id="longitud" placeholder="Longitud">
          </div>
         </div>
        </div>
       </div>

       <!-- Telefono -->
       <div class="form-group">
       <label for="telefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Tel&eacute;fono del efector">
        </div>
       </div>

       <!-- E-mail -->
       <div class="form-group">
       <label for="email" class="col-lg-2 control-label">E-mail</label>
        <div class="col-md-6">
        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail del efector">
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
        <input type="text" name="director" class="form-control" id="director" placeholder="Director del efector">
        </div>
       </div>

       <!-- Teléfono Director -->
       <div class="form-group">
       <label for="directortelefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="directortelefono" class="form-control" id="directortelefono" placeholder="Tel&eacute;fono del director">
        </div>
       </div>

       <!-- E-mail Director -->
       <div class="form-group">
       <label for="directoremail" class="col-lg-2 control-label">Correo electr&oacute;nico</label>
        <div class="col-md-6">
        <input type="text" name="directoremail" class="form-control" id="directoremail" placeholder="Correo electr&oacute;nico del director">
        </div>
       </div>
      
       <!-- Subdirector -->
       <div class="form-group">
       <label for="subdirector" class="col-lg-2 control-label">Subdirector</label>
        <div class="col-md-6">
        <input type="text" name="subdirector" class="form-control" id="subdirector" placeholder="Subdirector del efector">
        </div>
       </div>

       <!-- Teléfono Subdirector -->
       <div class="form-group">
       <label for="subdirectortelefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="subdirectortelefono" class="form-control" id="subdirectortelefono" placeholder="Tel&eacute;fono del subdirector">
        </div>
       </div>

       <!-- E-mail Subdirector -->
       <div class="form-group">
       <label for="subdirectoremail" class="col-lg-2 control-label">Correo electr&oacute;nico</label>
        <div class="col-md-6">
        <input type="text" name="subdirectoremail" class="form-control" id="subdirectoremail" placeholder="Correo electr&oacute;nico del subdirector">
        </div>
       </div>

       <!-- Representante del estado -->
       <div class="form-group">
       <label for="representante" class="col-lg-2 control-label">Representante</label>
        <div class="col-md-6">
        <input type="text" name="representante" class="form-control" id="representante" placeholder="Representante / Referente del estado">
        </div>
       </div>

       <!-- Teléfono Representante -->
       <div class="form-group">
       <label for="representantetelefono" class="col-lg-2 control-label">Tel&eacute;fono</label>
        <div class="col-md-6">
        <input type="text" name="representantetelefono" class="form-control" id="representantetelefono" placeholder="Tel&eacute;fono del representante / referente">
        </div>
       </div>

       <!-- E-mail Representante -->
       <div class="form-group">
       <label for="representanteemail" class="col-lg-2 control-label">Correo electr&oacute;nico</label>
        <div class="col-md-6">
        <input type="text" name="representanteemail" class="form-control" id="representanteemail" placeholder="Correo electr&oacute;nico del representante / referente">
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
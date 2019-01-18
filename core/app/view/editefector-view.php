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
  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="updateefector" action="index.php?view=updateefector" role="form">

   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo de Efector*</label>
     <div class="col-md-6">
     <input type="text" required readonly name="id" id="efector_code" value="<?php echo $efector->codest; ?>" placeholder="Ingrese el código asignado al efector" class="form-control">
     </div>
    </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
     <div class="col-md-6">
     <input type="text" required readonly name="name" id="name" value="<?php echo $efector->nomest; ?>" placeholder="Nombre del efector" class="form-control" >
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
       <label for="codloc" class="col-lg-2 control-label">Localidad</label>
        <div class="col-md-6">
        <select name="codloc" class="form-control">
        <option value="">-- NINGUNA --</option>
        <?php foreach($localidades as $localidad):?>
        <option value="<?php echo $localidad->id;?>" <?php if($efector->codloc!=null&& $efector->codloc==$localidad->id){ echo "selected";}?>><?php echo $localidad->nombre;?></option>
        <?php endforeach;?>
        </select>    
        </div>
       </div>

       <!-- SubRegion -->
       <div class="form-group">
       <label for="codsubregion" class="col-lg-2 control-label">Subregión</label>
        <div class="col-md-6">
        <select name="codsubregion" class="form-control">
        <option value="">-- NINGUNA --</option>
        <?php foreach($subregiones as $subregion):?>
        <option value="<?php echo $subregion->id;?>" <?php if($efector->codsubregion!=null&& $efector->codsubregion==$subregion->id){ echo "selected";}?>><?php echo $subregion->nombre;?></option>
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
          <input type="text" readonly name="latitud" id="latitud" value="<?php echo $efector->latitud; ?>" placeholder="Latitud" class="form-control">
          </div>
          <div class="col-md-2">
          <input type="text" readonly name="longitud" id="longitud" value="<?php echo $efector->longitud; ?>" placeholder="Longitud" class="form-control">
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
       <label for="codda" class="col-lg-2 control-label">Dependencia</label>
        <div class="col-md-6">
        <select name="codda" class="form-control">
        <option value="">-- NINGUNA --</option>
        <?php foreach($dependencias as $dependencia):?>
        <option value="<?php echo $dependencia->id;?>" <?php if($efector->codda!=null&& $efector->codda==$dependencia->id){ echo "selected";}?>><?php echo $dependencia->name;?></option>
        <?php endforeach;?>
        </select>
        </div>
       </div>

       <!-- Nivel -->
       <div class="form-group">
       <label for="nivel" class="col-lg-2 control-label">Nivel</label>
        <div class="col-md-6">
        <select name="nivel" class="form-control">
        <?php for($n=0;$n<=3;$n++){
        echo '<option value="'.$n.'"'.(($efector->nivel==$n)?' Selected':'').'>'.(($n==0)?'No definido':$n.'° Nivel')."</option>";
        } ?>
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
         <input type="checkbox" name=tiene_rx value="tiene_rx" <?php echo ($efector->tiene_rx == 1 ? "checked":""); ?>> Radiolog&iacute;a
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_eco value="tiene_eco" <?php echo ($efector->tiene_eco == 1 ? "checked":""); ?>> Ecograf&iacute;a
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_tac value="tiene_tac" <?php echo ($efector->tiene_tac == 1 ? "checked":""); ?>> T.A.C.
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_rmn value="tiene_rmn"<?php echo ($efector->tiene_rmn == 1 ? "checked":""); ?>> R.M.N.
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_mamografia value="tiene_mamografia"<?php echo ($efector->tiene_mamografia == 1 ? "checked":""); ?>> Mamograf&iacute;a
         </div>
        </div>

        <div class="row">
         <div class="col-md-2">
         <input type="checkbox" name=tiene_lab value="tiene_lab"<?php echo ($efector->tiene_lab == 1 ? "checked":""); ?>> Laboratorio
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_ecg value="tiene_ecg"<?php echo ($efector->tiene_ecg == 1 ? "checked":""); ?>> E.C.G.
         </div>
        </div>

        <div class="row">
         <br>
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_atencionmanana value="tiene_atencionmanana"<?php echo ($efector->tiene_atencionmanana == 1 ? "checked":""); ?>> Atenci&oacute;n Mañana
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_atenciontarde value="tiene_atenciontarde"<?php echo ($efector->tiene_atenciontarde == 1 ? "checked":""); ?>> Atenci&oacute;n Tarde
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_guardia24hs value="tiene_guardia24hs"<?php echo ($efector->tiene_guardia24hs == 1 ? "checked":""); ?>> Guardia 24 Hs.
         </div>
         <div class="col-md-3">
         <input type="text" name="totalcamas" id="totalcamas" value="<?php echo $efector->totalcamas; ?>" placeholder="Total de camas del establecimiento" class="form-control">
         </div>
        </div>

        <div class="row">
         <br>
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_saludmental value="tiene_saludmental"<?php echo ($efector->tiene_saludmental == 1 ? "checked":""); ?>> Salud Mental Espec&iacute;fica
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_maternidad value="tiene_maternidad"<?php echo ($efector->tiene_maternidad == 1 ? "checked":""); ?>> Maternidad
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_pediatria value="tiene_pediatria"<?php echo ($efector->tiene_pediatria == 1 ? "checked":""); ?>> Pediatr&iacute;a
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_saludbucal value="tiene_saludbucal"<?php echo ($efector->tiene_saludbucal == 1 ? "checked":""); ?>> Salud Bucal
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_sillonsaludbucal value="tiene_sillonsaludbucal"<?php echo ($efector->tiene_sillonsaludbucal == 1 ? "checked":""); ?>> Sill&oacute;n odontolog&iacute;a
         </div>
        </div>

        <div class="row">
         <br>
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_movilidad value="tiene_movilidad"<?php echo ($efector->tiene_movilidad == 1 ? "checked":""); ?>> Movilidad
         </div>
         <div class="col-md-3">
         <input type="checkbox" name=tiene_trasladoprogramado value="tiene_trasladoprogramado"<?php echo ($efector->tiene_trasladoprogramado == 1 ? "checked":""); ?>> Servicio de traslado programado
         </div>
         <div class="col-md-3">
         <input type="text" name="ambul_munic" id="ambul_munic" value="<?php echo $efector->ambul_munic; ?>" placeholder="Cant. de ambulancias municipales" class="form-control">
         </div>
         <div class="col-md-3">
         <input type="text" name="ambul_provin" id="ambul_provin" value="<?php echo $efector->ambul_provin; ?>" placeholder="Cant. de ambulancias provinciales" class="form-control">
         </div>
        </div>

        <div class="row">
         <br>
         <div class="col-md-2">
         <input type="checkbox" name=diagnose value="diagnose"<?php echo ($efector->diagnose == 1 ? "checked":""); ?>> Diagnose
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=sicap value="sicap"<?php echo ($efector->sicap == 1 ? "checked":""); ?>> SICAP
         </div>
         <div class="col-md-7">
         <input type="text" name="otrossistemas" id="otrossistemas" value="<?php echo $efector->otrossistemas; ?>" placeholder="Otros sistemas inform&aacute;ticos" class="form-control">
         </div>
        </div>

        <div class="row">
        <br>
         <div class="col-md-11">
         <textarea name="otrosservicios" id="otrosservicios" placeholder="Otros servicios" class="form-control"><?php echo $efector->otrosservicios; ?></textarea>
         </div>
         <div class="col-md-11">
         <br>
         <textarea name="efectorreferencia" id="efectorreferencia" placeholder="Efectores de referencia" class="form-control"><?php echo $efector->efectorreferencia; ?></textarea>
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
         <input type="checkbox" name=tiene_aguapotable value="tiene_aguapotable"<?php echo ($efector->tiene_aguapotable == 1 ? "checked":""); ?>> Agua Potable
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_gasnatural value="tiene_gasnatural"<?php echo ($efector->tiene_aguapotable == 1 ? "checked":""); ?>> Gas Natural
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_calefaccion value="tiene_calefaccion"<?php echo ($efector->tiene_calefaccion == 1 ? "checked":""); ?>> Calefacci&oacute;n
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_aireacondicionado value="tiene_aireacondicionado"<?php echo ($efector->tiene_aireacondicionado == 1 ? "checked":""); ?>> Aire Acondicionado
         </div>
         <div class="col-md-2">
         <input type="checkbox" name=tiene_internet value="tiene_internet"<?php echo ($efector->tiene_internet == 1 ? "checked":""); ?>> Internet
         </div>
        </div>


       <!-- Cantidad de computadoras -->
       <div class="form-group">
       <br>
       <label for="cant_pc" class="col-lg-2 control-label">Cantidad de computadoras</label>
        <div class="col-md-2">
        <input type="text" name="cant_pc" id="cant_pc" value="<?php echo $efector->cant_pc; ?>" placeholder="Cantidad" class="form-control">
        </div>
       </div>


        <!-- Titularidad del inmueble -->
        <div class="form-group">
        <label for="codda_titularidadinmueble" class="col-lg-2 control-label">Titularidad del inmueble</label>
         <div class="col-md-6">
         <select name="codda_titularidadinmueble" class="form-control">
         <option value="">-- NINGUNA --</option>
         <?php foreach($dependencias as $dependencia):?>
         <option value="<?php echo $dependencia->id;?>" <?php if($efector->codda_titularidadinmueble!=null&& $efector->codda_titularidadinmueble==$dependencia->id){ echo "selected";}?>><?php echo $dependencia->name;?></option>
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
         <option value="<?php echo $calidad->id;?>" <?php if($efector->codcalidad_estructuraedilicia!=null&& $efector->codcalidad_estructuraedilicia==$calidad->id){ echo "selected";}?>><?php echo $calidad->name;?></option>
         <?php endforeach;?>
         </select>    
         </div>
        </div>

        <div class="row">
         <br>
         <div class="col-md-11">
         <textarea name="enobrasyconstruccion" id="enobrasyconstruccion" placeholder="Obras en Curso" class="form-control"><?php echo $efector->enobrasyconstruccion; ?></textarea>
         </div>
        </div>

        <div class="row">
         <br>
         <div class="col-md-11">
         <textarea name="areaadesarrollar" id="areaadesarrollar" placeholder="Area a desarrollar" class="form-control"><?php echo $efector->areaadesarrollar; ?></textarea>
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
 
<div class="form-group">
 <div class="col-lg-offset-5 col-lg-10">
  <input type="hidden" name="efector_id" value="<?php echo $efector->id; ?>">
  <button type="submit" class="btn btn-success">Actualizar Efector</button>
 </div>
</div>
<br>

</form>

<?php endif; ?>
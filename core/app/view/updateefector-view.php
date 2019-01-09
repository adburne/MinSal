<?php

if(count($_POST)>0){
 $efector = EfectorData::getById($_POST["efector_id"]);


 $efector->domicilio = $_POST["domicilio"];
 $efector->codloc = $_POST["codloc"];
 $efector->codsubregion = $_POST["codsubregion"];
 $efector->latitud = $_POST["latitud"];
 $efector->longitud = $_POST["longitud"];
 $efector->telefono = $_POST["telefono"];
 $efector->email = $_POST["email"];
 if($_POST["codda"]!=""){ $codloc=$_POST["codda"];}
 if($_POST["nivel"]!=""){ $codloc=$_POST["nivel"];}
 $efector->director = $_POST["director"];
 $efector->directortelefono = $_POST["directortelefono"];
 $efector->directoremail = $_POST["directoremail"];
 $efector->subdirector = $_POST["subdirector"];
 $efector->subdirectortelefono = $_POST["subdirectortelefono"];
 $efector->subdirectoremail = $_POST["subdirectoremail"];
 $efector->representante = $_POST["representante"];
 $efector->representantetelefono = $_POST["representantetelefono"];
 $efector->representanteemail = $_POST["representanteemail"];
 $efector->tiene_rx = (isset($_POST["tiene_rx"])? "1" : "0");
 $efector->tiene_eco = (isset($_POST["tiene_eco"])? "1" : "0");
 $efector->tiene_tac = (isset($_POST["tiene_tac"])? "1" : "0");
 $efector->tiene_rmn = (isset($_POST["tiene_rmn"])? "1" : "0");
 $efector->tiene_mamografia = (isset($_POST["tiene_mamografia"])? "1" : "0");
 $efector->tiene_lab = (isset($_POST["tiene_lab"])? "1" : "0");
 $efector->tiene_ecg = (isset($_POST["tiene_ecg"])? "1" : "0");
 $efector->tiene_atencionmanana = (isset($_POST["tiene_atencionmanana"])? "1" : "0");
 $efector->tiene_atenciontarde = (isset($_POST["tiene_atenciontarde"])? "1" : "0");
 $efector->tiene_guardia24hs = (isset($_POST["tiene_guardia24hs"])? "1" : "0");
 $efector->tiene_saludmental = (isset($_POST["tiene_saludmental"])? "1" : "0");
 $efector->tiene_maternidad = (isset($_POST["tiene_maternidad"])? "1" : "0");
 $efector->tiene_pediatria = (isset($_POST["tiene_pediatria"])? "1" : "0");
 $efector->tiene_saludbucal = (isset($_POST["tiene_saludbucal"])? "1" : "0");
 $efector->tiene_sillonsaludbucal = (isset($_POST["tiene_sillonsaludbucal"])? "1" : "0");
 $efector->tiene_movilidad = (isset($_POST["tiene_movilidad"])? "1" : "0");
 $efector->tiene_trasladoprogramado = (isset($_POST["tiene_trasladoprogramado"])? "1" : "0");
 $efector->ambul_munic = $_POST["ambul_munic"];
 $efector->ambul_provin = $_POST["ambul_provin"];
 $efector->totalcamas = $_POST["totalcamas"];
 $efector->sicap = (isset($_POST["sicap"])? "1" : "0");
 $efector->diagnose = (isset($_POST["diagnose"])? "1" : "0");
 $efector->otrossistemas = $_POST["otrossistemas"];
 $efector->otrosservicios = $_POST["otrosservicios"];
 $efector->efectorreferencia = $_POST["efectorreferencia"];
 $efector->tiene_aguapotable = (isset($_POST["tiene_aguapotable"])? "1" : "0");
 $efector->tiene_gasnatural = (isset($_POST["tiene_gasnatural"])? "1" : "0");
 $efector->tiene_calefaccion = (isset($_POST["tiene_calefaccion"])? "1" : "0");
 $efector->tiene_aireacondicionado = (isset($_POST["tiene_aireacondicionado"])? "1" : "0");
 $efector->tiene_internet = (isset($_POST["tiene_internet"])? "1" : "0");
 $efector->cant_pc = $_POST["cant_pc"];
 $efector->codcalidad_estructuraedilicia = $_POST["codcalidad_estructuraedilicia"];
 $efector->codda_titularidadinmueble = $_POST["codda_titularidadinmueble"];
 $efector->areaadesarrollar = $_POST["areaadesarrollar"];
 $efector->enobrasyconstruccion = $_POST["enobrasyconstruccion"];
 $efector->user_id = $_SESSION["user_id"];
 $efector->update();

//setcookie("efectorupd","true");
//print "<script>window.location='index.php?view=editefector&id=$_POST[efector_id]';</script>";


}


?>
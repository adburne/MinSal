<?php
class RRHHEfectorData {
	public static $tablename = "rrhhefector";

	public function __construct(){
		$this->nrodoc = "0";
		$this->codest = "0";
		$this->servrrhh_id = "0";
		$this->sit_revista_id = "0";
		$this->cargahoraria = "0";
		$this->observaciones = "";
		$this->created_at = "NOW()";
	}

	public function getServRRHH(){ return ServRRHHData::getById($this->servrrhh_id);}

	public function getRRHH(){ return RRHHData::getByNroDoc($this->nrodoc);}

	public function getSitRev(){ return SitRevistaData::getById($this->sit_revista_id);}

	public function add(){
		$sql = "insert into ".self::$tablename." (codest,nomest,domicilio,codloc,codsubregion,";
		$sql .= "latitud,longitud,telefono,email,codda,nivel,director,directortelefono,";
		$sql .= "directoremail,subdirector,subdirectortelefono,subdirectoremail,representante,";
		$sql .= "representantetelefono,representanteemail,tiene_rx,tiene_eco,tiene_tac,tiene_rmn,";
		$sql .= "tiene_lab,tiene_ecg,tiene_mamografia,tiene_atencionmanana,tiene_atenciontarde,";
		$sql .= "tiene_guardia24hs,tiene_saludmental,tiene_maternidad,tiene_pediatria,";
		$sql .= "tiene_saludbucal,tiene_sillonsaludbucal,tiene_movilidad,tiene_trasladoprogramado,";
		$sql .= "ambul_munic,ambul_provin,totalcamas,sicap,diagnose,otros_sistemas,";
		$sql .= "tiene_aguapotable,tiene_gasnatural,tiene_calefaccion,tiene_aireacondicionado,";
		$sql .= "tiene_internet,cant_pc,codcalidad_estructuraedilicia,codda_titularidadinmueble,";
		$sql .= "areaadesarrollar,enobrasyconstruccion,created_at) value ";
		$sql .= "($this->codest,\"$this->nomest\",\"$this->domicilio\",$this->codloc,$this->codsubregion,\"$this->latitud\",\"$this->longitud\",\"$this->telefono\",\"$this->email\",\"$this->codda\",\"$this->nivel\",\"$this->director\",\"$this->directortelefono\",\"$this->directoremail\",\"$this->subdirector\",\"$this->subdirectortelefono\",\"$this->subdirectoremail\",\"$this->representante\",\"$this->representantetelefono\",\"$this->representanteemail\",\"$this->tiene_rx\",\"$this->tiene_eco\",\"$this->tiene_tac\",\"$this->tiene_rmn\",\"$this->tiene_lab\",\"$this->tiene_ecg\",\"$this->tiene_mamografia\",\"$this->tiene_atencionmanana\",\"$this->tiene_atenciontarde\",\"$this->tiene_guardia24hs\",\"$this->tiene_saludmental\",\"$this->tiene_maternidad\",\"$this->tiene_pediatria\",\"$this->tiene_saludbucal\",\"$this->tiene_sillonsaludbucal\",\"$this->tiene_movilidad\",\"$this->tiene_trasladoprogramado\",\"$this->ambul_munic\",\"$this->ambul_provin\",\"$this->totalcamas\",\"$this->sicap\",\"$this->diagnose\",\"$this->otros_sistemas\",\"$this->tiene_aguapotable\",\"$this->tiene_gasnatural\",\"$this->tiene_calefaccion\",\"$this->tiene_aireacondicionado\",\"$this->tiene_internet\",\"$this->cant_pc\",\"$this->codcalidad_estructuraedilicia\",\"$this->codda_titularidadinmueble\",\"$this->areaadesarrollar\",\"$this->enobrasyconstruccion\",NOW())";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set ";
		$sql .= "domicilio=\"$this->domicilio\", ";
		$sql .= "codloc=\"$this->codloc\", ";
		$sql .= "codsubregion=\"$this->codsubregion\", ";
		$sql .= "latitud=\"$this->latitud\", ";
		$sql .= "longitud=\"$this->longitud\", ";
		$sql .= "telefono=\"$this->telefono\", ";
		$sql .= "email=\"$this->email\", ";
		$sql .= "codda=\"$this->codda\", ";
		$sql .= "nivel=\"$this->nivel\", ";
		$sql .= "director=\"$this->director\", ";
		$sql .= "directortelefono=\"$this->directortelefono\", ";
		$sql .= "directoremail=\"$this->directoremail\", ";
		$sql .= "subdirector=\"$this->subdirector\", ";
		$sql .= "subdirectortelefono=\"$this->subdirectortelefono\", ";
		$sql .= "subdirectoremail=\"$this->subdirectoremail\", ";
		$sql .= "representante=\"$this->representante\", ";
		$sql .= "representantetelefono=\"$this->representantetelefono\", ";
		$sql .= "representanteemail=\"$this->representanteemail\", ";
		$sql .= "tiene_rx=\"$this->tiene_rx\", ";
		$sql .= "tiene_eco=\"$this->tiene_eco\", ";
		$sql .= "tiene_tac=\"$this->tiene_tac\", ";
		$sql .= "tiene_rmn=\"$this->tiene_rmn\", ";
		$sql .= "tiene_mamografia=\"$this->tiene_mamografia\", ";
		$sql .= "tiene_lab=\"$this->tiene_lab\", ";
		$sql .= "tiene_ecg=\"$this->tiene_ecg\", ";
		$sql .= "tiene_atencionmanana=\"$this->tiene_atencionmanana\", ";
		$sql .= "tiene_atenciontarde=\"$this->tiene_atenciontarde\", ";
		$sql .= "tiene_guardia24hs=\"$this->tiene_guardia24hs\", ";
		$sql .= "tiene_saludmental=\"$this->tiene_saludmental\", ";
		$sql .= "tiene_maternidad=\"$this->tiene_maternidad\", ";
		$sql .= "tiene_pediatria=\"$this->tiene_pediatria\", ";
		$sql .= "tiene_saludbucal=\"$this->tiene_saludbucal\", ";
		$sql .= "tiene_sillonsaludbucal=\"$this->tiene_sillonsaludbucal\", ";
		$sql .= "tiene_movilidad=\"$this->tiene_movilidad\", ";
		$sql .= "tiene_trasladoprogramado=\"$this->tiene_trasladoprogramado\", ";
		$sql .= "ambul_munic=\"$this->ambul_munic\", ";
		$sql .= "ambul_provin=\"$this->ambul_provin\", ";
		$sql .= "totalcamas=\"$this->totalcamas\", ";
		$sql .= "sicap=\"$this->sicap\", ";
		$sql .= "diagnose=\"$this->diagnose\", ";
		$sql .= "otrossistemas=\"$this->otrossistemas\", ";
		$sql .= "otrosservicios=\"$this->otrosservicios\", ";
		$sql .= "efectorreferencia=\"$this->efectorreferencia\", ";
		$sql .= "tiene_aguapotable=\"$this->tiene_aguapotable\", ";
		$sql .= "tiene_gasnatural=\"$this->tiene_gasnatural\", ";
		$sql .= "tiene_calefaccion=\"$this->tiene_calefaccion\", ";
		$sql .= "tiene_aireacondicionado=\"$this->tiene_aireacondicionado\", ";
		$sql .= "tiene_internet=\"$this->tiene_internet\", ";
		$sql .= "cant_pc=\"$this->cant_pc\", ";
		$sql .= "codcalidad_estructuraedilicia=\"$this->codcalidad_estructuraedilicia\", ";
		$sql .= "codda_titularidadinmueble=\"$this->codda_titularidadinmueble\", ";
		$sql .= "areaadesarrollar=\"$this->areaadesarrollar\", ";
		$sql .= "enobrasyconstruccion=\"$this->enobrasyconstruccion\", ";
		$sql .= "created_at=NOW() ";
		$sql .= "where id=$this->id";
		Executor::doit($sql);
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHEfectorData());
	}

	public static function getByEfeServ($codest, $codservrrhh){
		$sql = "select * from ".self::$tablename." WHERE codest=$codest";
		if(isset($codservrrhh) && $codservrrhh!=null){$sql .= " AND servrrhh_id=$codservrrhh";}
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHEfectorData());
	}

}

?>
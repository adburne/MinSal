<?php
class EfectorData {
	public static $tablename = "efectores";

	public function __construct(){
		$this->codest = "0";
		$this->nomest = "";
		$this->domicilio = "";
		$this->codloc = "0";
		$this->codsubregion = "0";
		$this->latitud = "0";
		$this->longitud = "0";
		$this->telefono = "";
		$this->email = "";
		$this->codda = "0";
		$this->nivel = "0";
		$this->director = "";
		$this->directortelefono = "";
		$this->directoremail = "";
		$this->subdirector = "";
		$this->subdirectortelefono = "";
		$this->subdirectoremail = "";
		$this->representante = "";
		$this->representantetelefono = "";
		$this->representanteemail = "";
		$this->tiene_rx = "0";
		$this->tiene_eco = "0";
		$this->tiene_tac = "0";
		$this->tiene_rmn = "0";
		$this->tiene_lab = "0";
		$this->tiene_ecg = "0";
		$this->tiene_mamografia = "0";
		$this->tiene_atencionmanana = "0";
		$this->tiene_atenciontarde = "0";
		$this->tiene_guardia24hs = "0";
		$this->tiene_saludmental = "0";
		$this->tiene_maternidad = "0";
		$this->tiene_pediatria = "0";
		$this->tiene_saludbucal = "0";
		$this->tiene_sillonsaludbucal = "0";
		$this->tiene_movilidad = "0";
		$this->tiene_trasladoprogramado = "0";
		$this->ambul_munic = "0";
		$this->ambul_provin = "0";
		$this->totalcamas = "0";
		$this->sicap = "0";
		$this->diagnose = "0";
		$this->otros_sistemas = "";
		$this->tiene_aguapotable = "0";
		$this->tiene_gasnatural = "0";
		$this->tiene_calefaccion = "0";
		$this->tiene_aireacondicionado = "0";
		$this->tiene_internet = "0";
		$this->cant_pc = "0";
		$this->codcalidad_estructuraedilicia = "0";
		$this->codda_titularidadinmueble = "0";
		$this->areaadesarrollar = "";
		$this->enobrasyconstruccion = "";
		$this->created_at = "NOW()";
	}

	public function getCategory(){ return CategoryData::getById($this->category_id);}

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

	public function del_category(){
		$sql = "update ".self::$tablename." set category_id=NULL where id=$this->id";
		Executor::doit($sql);
	}


	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EfectorData());

	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}

	public static function getAllByUserId($user_id){
		$sql = "select E.* from ".self::$tablename." E INNER JOIN user_efectores UE ";
		$sql .= "ON E.Id=UE.efector_id ";
		$sql .= "WHERE UE.user_id=$user_id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}

	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}


	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where codest like '%$p%' or nomest like '%$p%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}

	public static function getLikeByUserId($p,$user_id){
		$sql = "select E.* from ".self::$tablename." E INNER JOIN user_efectores UE ";
		$sql .= "ON E.Id=UE.efector_id ";
		$sql .= "WHERE (codest LIKE '%$p%' OR nomest like '%$p%') AND UE.user_id=$user_id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}

	public static function getLikeByPage($p,$start_from,$limit){
		$sql = "select * from ".self::$tablename." where (codest like '%$p%' or nomest like '%$p%') and id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}

	public static function getLikeByPageUserId($p,$start_from,$limit,$user_id){
		$sql = "select E.* from ".self::$tablename." E INNER JOIN user_efectores UE ";
		$sql .= "ON E.Id=UE.efector_id ";
		$sql .= "WHERE (codest LIKE '%$p%' OR nomest like '%$p%') AND " ;
		$sql .= "E.Id>=$start_from AND UE.user_id=$user_id LIMIT $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}

	public static function getAllByCategoryId($category_id){
		$sql = "select * from ".self::$tablename." where category_id=$category_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EfectorData());
	}







}

?>
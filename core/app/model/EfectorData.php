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
		$sql = "insert into ".self::$tablename." (barcode,name,description,price_in,price_out,user_id,presentation,unit,category_id,inventary_min,created_at) ";
		$sql .= "value (\"$this->barcode\",\"$this->name\",\"$this->description\",\"$this->price_in\",\"$this->price_out\",$this->user_id,\"$this->presentation\",\"$this->unit\",$this->category_id,$this->inventary_min,NOW())";
		return Executor::doit($sql);
	}
	public function add_with_image(){
		$sql = "insert into ".self::$tablename." (barcode,image,name,description,price_in,price_out,user_id,presentation,unit,category_id,inventary_min) ";
		$sql .= "value (\"$this->barcode\",\"$this->image\",\"$this->name\",\"$this->description\",\"$this->price_in\",\"$this->price_out\",$this->user_id,\"$this->presentation\",\"$this->unit\",$this->category_id,$this->inventary_min)";
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

// partiendo de que ya tenemos creado un objecto ProductData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set barcode=\"$this->barcode\",name=\"$this->name\",price_in=\"$this->price_in\",price_out=\"$this->price_out\",unit=\"$this->unit\",presentation=\"$this->presentation\",category_id=$this->category_id,inventary_min=\"$this->inventary_min\",description=\"$this->description\",is_active=\"$this->is_active\" where id=$this->id";
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
		return Model::one($query[0],new ProductData());

	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where barcode like '%$p%' or name like '%$p%' or id like '%$p%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}



	public static function getAllByUserId($user_id){
		$sql = "select * from ".self::$tablename." where user_id=$user_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getAllByCategoryId($category_id){
		$sql = "select * from ".self::$tablename." where category_id=$category_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}







}

?>
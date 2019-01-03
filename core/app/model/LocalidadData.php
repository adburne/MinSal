<?php
class LocalidadData {
	public static $tablename = "localidades";



	public function __construct(){
		$this->nombre = "";
		$this->cp = 0;
		$this->departamento_id = 0;
		$this->created_at = "NOW()";
	}

	public function getDepartamento(){ return DepartamentoData::getById($this->departamento_id);}

    public function getSubregion(){ return SubregionData::getById($this->Subregion_id);}


    public function add(){
		$sql = "insert into ".self::$tablename." (nombre,cp,departamento_id) ";
		$sql .= "value (\"$this->nombre\",\"$this->cp\",\"$this->departamento_id\")";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// falta terminar
    // partiendo de que ya tenemos creado un objecto RegionData previamente utilizamos el contexto
	// public function update(){
	// 	$sql = "update ".self::$tablename." set nombre=\"$this->nombre\", codregion=\"$this->codregion\"  where id=$this->id";
	// 	Executor::doit($sql);
	// }

	// public static function getById($id){
	// 	$sql = "select * from ".self::$tablename." where id=$id";
	// 	$query = Executor::doit($sql);
	// 	$found = null;
	// 	$data = new SubregionData();
	// 	while($r = $query[0]->fetch_array()){
	// 		$data->id = $r['id'];
	// 		$data->nombre = $r['nombre'];
	// 		$data->codregion = $r['codregion'];
	// 		$data->created_at = $r['created_at'];
	// 		$found = $data;
	// 		break;
	// 	}
	// 	return $found;
	// }



	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by 2";
	$query = Executor::doit($sql);
	$array = array();
	$cnt = 0;
		while($r = $query[0]->fetch_array()){
		$array[$cnt] = new LocalidadData();
		$array[$cnt]->id = $r['id'];
		$array[$cnt]->nombre = $r['nombre'];
		$array[$cnt]->cp = $r['cp'];
		$array[$cnt]->departamento_id = $r['departamento_id'];
		$array[$cnt]->created_at = $r['created_at'];
		$cnt++;
	}
	return $array;
	}


	// public static function getLike($q){
	// 	$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
	// 	$query = Executor::doit($sql);
	// 	$array = array();
	// 	$cnt = 0;
	// 	while($r = $query[0]->fetch_array()){
	// 		$array[$cnt] = new SubregionData();
	// 		$array[$cnt]->id = $r['id'];
	// 		$array[$cnt]->nombre = $r['nombre'];
	// 		$array[$cnt]->codregion = $r['codregion'];
	// 		$array[$cnt]->created_at = $r['created_at'];
	// 		$cnt++;
	// 	}
	// 	return $array;
	// }


}

?>
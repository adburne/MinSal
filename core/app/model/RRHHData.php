<?php
class RRHHData {
	public static $tablename = "rrhh";

	public function __construct(){
		$this->nrodoc = "0";
		$this->nombre = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (nrodoc,nombre) ";
		$sql .= "value (\"$this->nrodoc\",\"$this->nombre\")";
		return Executor::doit($sql);
	}

	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto RRHHData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nrodoc=\"$this->nrodoc\",nombre=\"$this->nombre\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new RRHHData());
	}

	public static function getByNroDoc($nrodoc){
		$sql = "select * from ".self::$tablename." where nrodoc=$nrodoc";
		$query = Executor::doit($sql);
		return Model::one($query[0],new RRHHData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHData());
	}

	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHData());
	}

	public static function getLikeByPage($p,$start_from,$limit){
		$sql = "select * from ".self::$tablename." where (nrodoc like '%$p%' or nombre like '%$p%' or id like '%$p%') and id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHData());
	}

	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where (nrodoc like '%$p%' or nombre like '%$p%' or id like '%$p%')";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHData());
	}

}

?>
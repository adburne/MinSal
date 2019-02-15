<?php
class RRHHEfectorData {
	public static $tablename = "rrhhefector";

	public function __construct(){
		$this->nrodoc = "0";
		$this->codest = "0";
		$this->servrrhh_id = "0";
		$this->sit_revista_id = "0";
		$this->carga_horaria = "0";
		$this->observaciones = "";
		$this->created_at = "NOW()";
	}

	public function getServRRHH(){ return ServRRHHData::getById($this->servrrhh_id);}

	public function getRRHH(){ return RRHHData::getByNroDoc($this->nrodoc);}

	public function getSitRev(){ return SitRevistaData::getById($this->sit_revista_id);}

	public function add(){
		$sql = "insert into ".self::$tablename." (nrodoc,codest,servrrhh_id,";
		$sql .= "sit_revista_id,carga_horaria,observaciones,created_at) value ";
		$sql .= "($this->nrodoc,$this->codest,$this->servrrhh_id,$this->sit_revista_id,$this->carga_horaria,\"$this->observaciones\",NOW())";
		return Executor::doit($sql);
	}

	public function delByEfeNroDoc(){
		$sql = "delete from ".self::$tablename." where codest=$this->codest and nrodoc=$this->nrodoc";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set ";
		$sql .= "servrrhh_id=$this->servrrhh_id, ";
		$sql .= "sit_revista_id=$this->sit_revista_id, ";
		$sql .= "carga_horaria=$this->carga_horaria, ";
		$sql .= "observaciones=\"$this->observaciones\", ";
		$sql .= "created_at=NOW() ";
		$sql .= "where nrodoc=$this->nrodoc and codest=$this->codest";
		Executor::doit($sql);
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHEfectorData());
	}

	public static function getByEfeServ($codest, $codservrrhh){
		$sql = "select R.* from ".self::$tablename." R ";
		$sql .= "INNER JOIN rrhh USING (nrodoc) ";
		$sql .= "WHERE R.codest=$codest ";
		if(isset($codservrrhh) && $codservrrhh!=null){$sql .= " AND R.servrrhh_id=$codservrrhh ";}
		$sql .= "ORDER BY rrhh.nombre ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RRHHEfectorData());
	}

	public static function getByEfeNroDoc($codest, $nrodoc){
		$sql = "select * from ".self::$tablename." ";
		$sql .= "WHERE codest=$codest AND nrodoc=$nrodoc";
		$query = Executor::doit($sql);
		return Model::one($query[0],new RRHHEfectorData());
	}

}

?>
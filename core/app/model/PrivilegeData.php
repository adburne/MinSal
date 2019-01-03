<?php
class PrivilegeData {
	public static $tablename = "privilege";


	public function __construct(){
		$this->short = "";
		$this->name = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (short,name,created_at) ";
		$sql .= "value (\"$this->short\",\"$this->name\",$this->created_at)";
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

	public function update(){
        $sql = "update ".self::$tablename." set short=\"$this->short\", name=\"$this->name\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new PrivilegeData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->short = $r['short'];
			$data->name = $r['name'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByShort($short){
		$sql = "select * from ".self::$tablename." where short='".$short."'";
		$query = Executor::doit($sql);
		$found = null;
		$data = new PrivilegeData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->short = $r['short'];
			$data->name = $r['name'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new PrivilegeData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->short = $r['short'];
			$array[$cnt]->name = $r['name'];
			$cnt++;
		}
		return $array;
	}


	// public static function getLike($q){
	// 	$sql = "select * from ".self::$tablename." where name like '%$q%'";
	// 	$query = Executor::doit($sql);
	// 	$array = array();
	// 	$cnt = 0;
	// 	while($r = $query[0]->fetch_array()){
	// 		$array[$cnt] = new ConfigurationData();
	// 		$array[$cnt]->id = $r['id'];
	// 		$array[$cnt]->name = $r['name'];
	// 		$array[$cnt]->mail = $r['mail'];
	// 		$array[$cnt]->password = $r['password'];
	// 		$array[$cnt]->created_at = $r['created_at'];
	// 		$cnt++;
	// 	}
	// 	return $array;
	// }


}

?>
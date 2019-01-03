<?php
class UserPrivilegeData {
	public static $tablename = "user_privilege";

	public function __construct(){
		$this->user_id = "";
		$this->privilege_id = "";
		$this->privilege_short = "";
        $this->privilege_name = "";
        $this->userprivilege = "";        
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (user_id,privilege_id,created_at) ";
		$sql .= "value (\"$this->user_id\",\"$this->privilege_id\",$this->created_at)";
		Executor::doit($sql);
	}

	public static function getAllPrivByUserId($userid){
        $sql = "SELECT ".$userid." AS user_id, p.id AS privilege_id, p.short AS privilege_short, ";
        $sql .= "p.name AS privilege_name, up.found AS userprivilege ";
        $sql .= "FROM privilege p LEFT JOIN ";
        $sql .= "(SELECT privilege_id, true AS found FROM user_privilege WHERE user_id=".$userid.") AS up ON p.id=up.privilege_id ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserPrivilegeData());
	}

	public static function getIdByUserPriv($userid,$privid){
		$sql = "select * from ".self::$tablename." where user_id=".$userid." and privilege_id=".$privid;
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserPrivilegeData());

	}

	public static function delByUserId($id){
		$sql = "delete from ".self::$tablename." where user_id=$id";
		Executor::doit($sql);
	}

}

?>
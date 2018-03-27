<?php

/*
	数据库的操作类
 */

error_reporting(E_ALL ^E_DEPRECATED);


class M
{
	public $prefix;  //表前缀
	public $linkID;  //连接ID
	public $table;   //表名
	public $db_config;  //数据库连接配置信息
	public $sql;   //要执行的sql语句

	public function __construct($table,$config_path='config.php')
	{
		//下面的判断代表将数据库的配置信息写入到一个变量当中
		if(!empty($config_path)){
			$this->db_config = require($config_path);
		}

		$this->connect();
		$this->table = $this->prefix.$table;
		
	}

	//connect 这个函数用来连接数据库操作
	private function connect()
	{
		$host = $this->db_config['DB_CONF']['DB_HOST'];
		$username = $this->db_config['DB_CONF']['DB_USER'];
		$password = $this->db_config['DB_CONF']['DB_PWD'];
		$port = $this->db_config['DB_CONF']['DB_PORT'];
		$charset = $this->db_config['DB_CONF']['DB_CHARSET'];
		$database = $this->db_config['DB_CONF']['DB_DATABASE'];
		$this->prefix = $this->db_config['DB_CONF']['DB_PREFIX'];

		$this->linkID = mysql_connect($host,$username,$password) or die("连接数据库失败".mysql_error());

		mysql_select_db($database);

		mysql_query("SET NAMES $charset");

	}

	public function select($where = 1,$fun="")
	{
		if(empty($fun)){
			$this->sql = "SELECT * FROM $this->table WHERE $where";
		}else{
			$this->sql = "SELECT $fun FROM $this->table WHERE $where";
		}
		// var_dump($this->sql);
		// exit;
		
		return $this;
	}

	public function orderBy($field = array('','ASC'))
	{
		$this->sql .= " ORDER BY $field[0] $field[1] ";
		return $this;
	}

	public function limit($limit = array(0,1000))
	{
		if(count($limit) == 2){
			$this->sql .=" LIMIT $limit[0],$limit[1]";
		}else{
			$this->sql .=" LIMIT $limit[0]";
		}
		return $this;
	}

	public function find()
	{
		$query = mysql_query($this->sql);
		if($query){
			$this->M_Log($this->sql);
		}else{
			$this->M_Log($this->sql,mysql_error());
		}
		$data = array();
		while($res = mysql_fetch_assoc($query)){
			$data = $res;
		}

		return $data;
	}

	public function findAll()
	{
		$query = mysql_query($this->sql);
		if($query){
			$this->M_Log($this->sql);
		}else{
			$this->M_Log($this->sql,mysql_error());
		}
		$data = array();
		while($res = mysql_fetch_assoc($query)){
			$data[] = $res;
		}

		return $data;
	}

	public function save($data)
	{
		$arr = array_keys($data);
		$k = "`".implode("`,`",$arr)."`";
		$v = '"'.implode('","',$data).'"';
		$this->sql = "INSERT INTO $this->table($k) VALUES($v)";
		$query = mysql_query($this->sql);
		if($query){
			$this->M_Log($this->sql);
		}else{
			$this->M_Log($this->sql,mysql_error());
		}
		return mysql_insert_id();
	}

	public function update($data,$where = 1)
	{
		$str = '';
		foreach($data as $k=>$v){
			$str .= "$k='$v',";	
		}

		$str = rtrim($str,",");

		$this->sql = "UPDATE $this->table SET $str WHERE $where";
		$query = mysql_query($this->sql);
		if($query){
			$this->M_Log($this->sql);
		}else{
			$this->M_Log($this->sql,mysql_error());
		}
		return mysql_affected_rows();
	}

	public function delete($where = 1)
	{
		$this->sql = "DELETE FROM $this->table WHERE $where";
		$query = mysql_query($this->sql);
		if($query){
			$this->M_Log($this->sql);
		}else{
			$this->M_Log($this->sql,mysql_error());
		}
		return mysql_affected_rows();
	}

	public function M_Log($sql,$error = "")
	{
		$insert_sql = "";
		if($error){
			$insert_sql = "[".date("Y/m/d H:i:s")."]  ".$sql."  ".$error."\r\n"; 
		}else{
			$insert_sql = "[".date("Y/m/d H:i:s")."]  ".$sql."\r\n"; 
		}

		file_put_contents("log.txt", $insert_sql,FILE_APPEND);
	}






}



?>
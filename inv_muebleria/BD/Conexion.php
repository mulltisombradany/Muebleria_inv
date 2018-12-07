<?php 
class Conexion {
	private static $db_host = 'localhost';
	private static $db_user = 'root';
	private static $db_pass = '19441944ww';
	private static $db_name = 'muebleria';
	private static $db_charset = 'utf8';
	private $conn;

	private function db_open() {
		$this->conn = new mysqli(
			self::$db_host,
			self::$db_user,
			self::$db_pass,
			self::$db_name
		);
        $this->conn->set_charset(self::$db_charset);
        if($this->conn->connect_errno)
        	 echo '<script>alert("'.$this->conn->connect_errno.'");</script>';
	}

	private function db_close() {
		$this->conn->close();
	}

	public function set_query($query) {
		$this->db_open();
		$this->conn->query($query);
		if($this->conn->error){
		  echo '<script>alert("'.$this->query.'\n'.$this->conn->error.'");</script>';
		  //echo $this->query.'<br><br>'.$this->conn->error;
		}
		$this->db_close();
	}

	public function get_query($query) {
		$this->db_open();
		$rows=array();
		$result = $this->conn->query($query);
		if($this->conn->error){
		  echo '<script>alert("'.$query.'\n'.$this->conn->error.'");</script>';
		  //echo $this->query.'<br><br>'.$this->conn->error;
		}
		while( $rows[] = $result->fetch_assoc());
		$result->close();
		$this->db_close();
		array_pop($rows);
		return $rows;
	}
}
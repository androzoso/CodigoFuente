<?php
/**
 * Esta clase contienes las funciones necesarias para la conexion a la base de datos
 */
abstract class DBAbstractModel {
	private static $db_server = 'localhost';
	private static $db_user = 'root';
	private static $db_password = '123456';
	protected $db_name = 'sw';
	protected $query;
	protected $rows = array();
	private $connection;

	function __construct() {

	}

	abstract protected function find();
	abstract protected function insert();
	abstract protected function edit();
	abstract protected function delete();

	private function openConnection() {
		$this -> connection = new mysqli(self::$db_server, self::$db_user, self::$db_password, $this->db_name);
	}

	private function closeConnection() {
		$this -> connection -> close();
	}

	protected function executeSingleQuery() {
		$this -> openConnection();
		$this -> connection -> query($this -> query);
		$this -> closeConnection();
	}

	protected function getResultsFromQuery() {
		$this -> openConnection();
		$result = $this -> connection -> query($this -> query);
		while ($this -> rows[] = $result -> fetch_assoc());
		$result->close();
		array_pop($this -> rows);
	}

}
?>
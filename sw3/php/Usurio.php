<?php
include_once 'dbAbstractModel.php';
/**
 *
 */
class usuario extends DBAbstractModel {

	private $idusuario;
	private $ciudad_idciudad;
	private $nombre;
	private $apellido;
	private $razonsocial;
	private $direccion;
	private $email;
	private $telefono;
	private $rutaimagen;
	private $descripcion;	
	private $rol_idrol;
	private $password;
	private $estado_usuario_idestado_usuario;

	function __construct() {
		
	}

/*
 * Funcion que permite realizar una busqueda de un usuario
 */
	public function find($idusuario='') {
		if ($idusuario != '') {
			$this -> query = "SELECT
								idusuario, ciudad_idciudad, nombre, apellido, razonsocial, direccion, email, telefono, rutaimagen, rol_idrol, password, estado_usuario_idestado_usuario
							  FROM 
							  	usuario
							  WHERE
							  	idusuario='$idusuario'";
		}
		$this -> getResultsFromQuery();

		if (count($this -> rows) == 1) {
			foreach ($this->rows[0] as $propiedad => $valor) {
				$this -> $propiedad = $valor;
			}
		}
	}
/*
 * Funcion que permite realizar una busqueda de un usuario
 */	
	public function findAll() {
		$this -> query = "SELECT
							idusuario, ciudad_idciudad, nombre, apellido, razonsocial, direccion, email, telefono, rutaimagen, rol_idrol, password, estado_usuario_idestado_usuario
						  FROM
							usuario 
						  WHERE rol_idrol!=1";
		$this -> getResultsFromQuery();
		foreach ($this->rows as $propiedad => $valor) {
				$this -> $propiedad = $valor;
			}
		return $this->rows;
	}


/*
 * Funcion que permite obtener toda la información de un usuario
 */	
	public function get($idusuario='') {
		if ($idusuario != '') {
			$this -> query = "SELECT 
								idusuario, ciudad_idciudad, nombre, apellido, razonsocial, direccion, email, telefono, rutaimagen, rol_idrol, password, estado_usuario_idestado_usuario
							  FROM
							  	usuario
							  WHERE
							  	idusuario='$idusuario'";
		}
		$this -> getResultsFromQuery();

		if (count($this -> rows) == 1) {
			foreach ($this->rows[0] as $propiedad => $valor) {
				$this -> $propiedad = $valor;
			}
		}
		return $this->rows[0];
	}

	public function insert($usuario_datos = array()) {
				
		if (array_key_exists('idusuario', $usuario_datos)) {
			$this -> find($usuario_datos['idusuario']);	
			
			if ($usuario_datos['idusuario'] != $this -> getIdUsuario()) {
				foreach ($usuario_datos as $campo => $valor) {
					$$campo = $valor;
				}
				$this -> query = "INSERT INTO
								 	usuario
								 		(idusuario, ciudad_idciudad, nombre, apellido, razonsocial, direccion, email, telefono, rutaimagen, descripcion, rol_idrol, password, estado_usuario_idestado_usuario)
								  VALUES
								  	('$idusuario','$ciudad_idciudad','".$nombre."','".$apellido."','" . $razonsocial . "','" . $direccion . "','" . $email . "','" . $telefono . "',
								  	'".$rutaimagen."','".$descripcion."','$rol_idrol','".$password."','$estado_usuario_idestado_usuario')";
				$this -> executeSingleQuery();
			}
		}
	}

	public function edit($usuario_datos = array()) {
		foreach ($usuario_datos as $campo => $valor) {
			$$campo = $valor;
		}
		$this -> query = "UPDATE usuario SET nombre='" . $nombre . "', apellido='" . $apellido . "',razonsocial='" . $razonsocial . "',
						 	direccion='" . $direccion . "', email='" . $email . "', telefono='" . $telefono . "',descripcion='".$descripcion."'
						 WHERE idusuario = '$idusuario'";
		$this -> executeSingleQuery();
	}

	public function delete($idusuario='') {
		$this -> query = "DELETE FROM usuario WHERE idusuario = '$idusuario'";
		$this -> executeSingleQuery();
	}

	public function getIdUsuario() {
		return $this -> idusuario;
	}
	
	public function getCiudad() {
		return $this -> ciudad_idciudad;
	}
	
	public function getNombre() {
		return $this -> nombre;
	}

	public function getApellido() {
		return $this -> apellido;
	}
	
	public function getRazonSocial() {
		return $this -> razonsocial;
	}
	
	public function getDireccion() {
		return $this -> direccion;
	}

	public function getEmail() {
		return $this -> email;
	}
	public function getTelefono() {
		return $this -> telefono;
	}

	public function getRutaImagen() {
		return $this -> rutaimagen;
	}
	
	public function getDescripcion() {
		return $this -> descripcion;
	}
	
	public function getRol() {
		return $this -> rol_idrol;
	}

	public function getPassword() {
		return $this -> password;
	}
	
	public function getEstadoUsuario() {
		return $this -> estado_usuario_idestado_usuario;
	}

	function __destruct() {
		unset($this);
	}
	
	public function getUsuario($idusuario='') {
		if ($idusuario != '') {
			$this -> query = "SELECT 
								u.idusuario,u.nombre ,u.apellido,u.razonsocial,u.direccion,u.email,u.telefono,u.rutaimagen, u.descripcion ,c.nombre as nombreciudad, r.nombre as nombrerol, e.nombre as nombreestado
							  FROM
							  	usuario u, ciudad c, rol r, estado_usuario e
							  WHERE
							  	u.ciudad_idciudad=c.idciudad AND r.idrol=u.rol_idrol AND e.idestado_usuario=estado_usuario_idestado_usuario AND u.idusuario='$idusuario'";
		}
		
		$this -> getResultsFromQuery();

		if (count($this -> rows) == 1) {
			foreach ($this->rows[0] as $propiedad => $valor) {
				$this -> $propiedad = $valor;
			}
		}
		return $this->rows[0];
	}
	
	public function enableUsuario($idusuario='') {
		$this -> query = "UPDATE usuario SET estado_usuario_idestado_usuario=2 WHERE idusuario='$idusuario'";
		$this -> executeSingleQuery();
	}
	
	public function disableUsuario($idusuario='') {
		$this -> query = "UPDATE usuario SET estado_usuario_idestado_usuario=1 WHERE idusuario='$idusuario'";
		$this -> executeSingleQuery();
	}
	
	public function getUsuariosNuevos() {
		$this -> query = "SELECT count(idusuario) as cantidad FROM usuario WHERE estado_usuario_idestado_usuario=1";
		$this -> getResultsFromQuery();
		return $this->rows[0];
	}
	
	public function getUsuarioByIdProducto($idproducto='')
	{
		if ($idproducto != '') {
			$this -> query = "SELECT 
								u.idusuario,u.nombre ,u.apellido,u.razonsocial,u.direccion,u.email,u.telefono,u.rutaimagen
							FROM
								usuario u, finca f, producto p
							WHERE
								p.finca_idfinca=f.idfinca AND f.usuario_idusuario=u.idusuario AND p.idproducto='$idproducto'";
		}
		$this -> getResultsFromQuery();

		if (count($this -> rows) == 1) {
			foreach ($this->rows[0] as $propiedad => $valor) {
				$this -> $propiedad = $valor;
			}
		}
		return $this->rows[0];
	}
	
	public function getUsuarioByIdFinca($idfinca='')
	{
		if ($idproducto != '') {
			$this -> query = "SELECT 
								u.idusuario,u.nombre ,u.apellido,u.razonsocial,u.direccion,u.email,u.telefono,u.rutaimagen
							FROM
								usuario u, finca f, producto p
							WHERE
								p.finca_idfinca=f.idfinca AND f.usuario_idusuario=u.idusuario AND p.idproducto='$idproducto'";
		}
		$this -> getResultsFromQuery();

		if (count($this -> rows) == 1) {
			foreach ($this->rows[0] as $propiedad => $valor) {
				$this -> $propiedad = $valor;
			}
		}
		return $this->rows[0];
	}

}
?>
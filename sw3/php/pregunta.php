<?php 

	include_once 'DBAbstractModel.php';

	/**
	* 
	*/
	class pregunta extends DBAbstractModel
	{
		//ccategoria=$_POST['categoria'];
		//$nombre=$_POST['nombre'];
		//$edad=$_POST['edad'];
		//$correo=$_POST['correo'];
		//$pregunta=$_POST['pregunta'];

		private $categoria;
		private $nombre;
		private $edad;
		private $correo;
		private $pregunta;

		$datos_pregunta= array('categoria'=>$categoria, 'nombre'=>$nombre, 'edad'=>$edad, 'correo'=>$correo, 'pregunta'=>$pregunta);

		//$pregunta= new pregunta();
		insert($datos_pregunta);

		function __construct(argument)
		{
			# code...
		}

	

		public function insert($datos_pregunta = array()) {
		
				foreach ($datos_pregunta as $campo => $valor) 
				{
					$$campo = $valor;
				}
				$this -> query = "INSERT INTO
								 	pregunta
								 		(categoria, nombre, edad, correo, pregunta)
								  VALUES
								  	(".$categoria.",".$nombre.",'".$edad."','".$correo."','" .$pregunta. ")";
				$this -> executeSingleQuery();
			
		}


		public function getCategoria() {
		return $this -> categoria;
	}
	
	public function getNombre() {
		return $this -> nombre;
	}
	
	public function getEdad() {
		return $this -> edad;
	}

	public function getCorreo() {
		return $this -> correo;
	}
	
	public function getPregunta() {
		return $this -> pregunta;
	}


	}

	

	

 ?>
<?php 
	Class usuarioController extends Controller {
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){}
		
		//listar
		public function listarUsuario(){
			$objModel = $this-> loadModel('usuario');
			$this-> _view-> data = $objModel-> listar();
			
			$this-> _view-> setJS(array('listausuario'));
			
			$this-> _view-> renderizar('listausuario'); 
		}
		
		//formulario insertar
		public function formInsertar(){
			$this-> _view-> setJS(array('forminsertar'));
			$this-> _view-> renderizar('forminsertar');
		}
		
		//insertar
		public function insertar(){
			$idusuario = trim($_POST['idusuario']);
			$nombre = trim($_POST['nombre']);
			$clave1 = trim($_POST['clave1']);
// 			$clave2 =trim($_POST['clave2']);
			$email = trim($_POST['email']);
			$rol = $_POST['rol'];
			//if($clave1 == $clave2){
// 				$objModel = $this-> loadModel('usuario');
// 				$objModel -> insertar($idusuario,$nombre,$clave1,$email,$rol);
// 				$this-> redireccionar('usuario/listarUsuario');
// 			}else {
// 				$this-> redireccionar('usuario/formInsertar');
// 			}
			$objModel = $this-> loadModel('usuario');
			$result = $objModel -> insertar($idusuario,$nombre,$clave1,$email,$rol);
			
			if($result) echo 'ERROR: ';
			else echo 'OK';
		}
		
		public function formEditar($idusuario = ''){
			$objModel = $this-> loadModel('usuario');
			$this-> _view-> data = $objModel-> formeditar($idusuario);
			
			$this-> _view-> setJS(array('formeditar'));
			
			$this-> _view-> renderizar('formeditar');
		}
		
		public function editar(){
			$idusuario = $_POST['idusuario'];
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$rol = $_POST['rol'];
			
			$objModel = $this-> loadModel('usuario');
			$objModel-> editar($idusuario,$nombre,$email,$rol);
			
			$this->redireccionar('usuario/listarUsuario');
		}
		
		public function eliminar($idusuario){
			$objModel = $this-> loadModel('usuario');
			$objModel-> eliminar($idusuario);
			
			$this->redireccionar('usuario/listarUsuario');
		}
		
		
	}
?>
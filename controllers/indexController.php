<?php 
	Class indexController extends Controller {
		public function __construct(){
			parent::__construct();
		}
		
		//formLogin
		public function index(){
			$this-> _view-> renderizar('index',true);
		}
		
		public function login(){
			$idusuario = trim($_POST['idusuario']);
			$clave = trim($_POST['clave']);
			
			$objModel = $this-> loadModel('usuario');
			if($objModel-> autenticar($idusuario,$clave) == true){
				$_SESSION['idusuario'] = $idusuario;
				$this-> redireccionar('index/panel');
			} else {
				$this-> redireccionar('index/index');
			}
		}
		
		public function panel(){
			if(isset($_SESSION['idusuario'])){
				$this-> _view-> renderizar('panel');
			}else {
				$this-> redireccionar('index/index');
			}
		}
		
		public function logout(){
				unset($_SESSION['idusuario']);
				$this-> redireccionar('index/index');
		}
	}

?>
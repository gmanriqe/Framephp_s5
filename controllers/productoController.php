<?php 
	Class productoController extends Controller {
		public function __construct(){
			parent::__construct();
		}
		
		//listado
		public function index(){
			$objModel = $this-> loadModel('producto');
			$this-> _view -> dataProducts = $objModel-> listaProductos();
			
			$this-> _view-> setJs(array('buscadorProductoBootstrap'));
			$this-> _view-> renderizar('index');
			
		}
		
		//formEditar
		public function formEditar($productCode=''){
			$objModel = $this-> loadModel('producto');
			$this-> _view-> data = $objModel-> formEditar($productCode);
			
			$this-> _view-> setJs(array('formEditar'));			
			$this-> _view-> renderizar('formEditar');		
		}
		
		//editar
		public function editar(){
			$productCode = $_POST['productCode'];
			$productName = $_POST['productName'];
			$productLine = $_POST['productLine'];
			$productScale = $_POST['productScale'];
			$productVendor = $_POST['productVendor'];
			$productDescription = $_POST['productDescription'];
			$quantityInStock = $_POST['quantityInStock'];
			$buyPrice = $_POST['buyPrice'];
			$MSRP = $_POST['MSRP'];
			
			$objModel = $this-> loadModel('producto');
			$result = $objModel-> editar($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP);
			
			//respuesta del servidor
			if($result) echo 'Error';
			else echo 'OK';
		}
		
		//formInsertar
		public function formInsertar(){
			
			$this-> _view-> setJs(array('forminsertar'));
			$this-> _view-> renderizar('forminsertar');
		}
		
		//insertar
		public function insertar(){
			$productCode = trim($_POST['productCode']);
			$productName = trim($_POST['productName']);
			$productLine = trim($_POST['productLine']);
			$productScale = trim($_POST['productScale']);
			$productVendor = trim($_POST['productVendor']);
			$productDescription = trim($_POST['productDescription']);
			$quantityInStock = trim($_POST['quantityInStock']);
			$buyPrice = trim($_POST['buyPrice']);
			$MSRP = trim($_POST['MSRP']);
			
			$objModel = $this-> loadModel('producto');
			$result = $objModel-> insertar($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP);
			
			if($result) echo 'Error';
			else echo 'OK';
		}
	}	
?>
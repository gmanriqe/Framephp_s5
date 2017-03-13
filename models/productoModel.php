<?php 	
 Class productoModel extends Model {
 	public function __construct(){
 		parent::__construct();
 	}
 	//listar
 	public function listaProductos(){
 		$sql = "SELECT * FROM Products";
 		$result = $this-> _db-> query($sql) or die ('Error: '.$sql);
 		return $result;
 	}
 	
 	//formEditar
 	public function formEditar($productCode){
 		$sql = "SELECT * FROM Products WHERE productCode = '$productCode'";
 		$result = $this-> _db-> query($sql);
 		$reg = null;
 		
 		if($result-> num_rows){
 			$reg = $result->fetch_object();
 		}
 		return $reg;
 	}
 	
 	//editar
 	public function  editar($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP){
 		$sql = "UPDATE Products SET productName = '$productName',
									productLine = '$productLine',
									productScale = '$productScale',
									productVendor = '$productVendor',
									productDescription = '$productDescription',
									quantityInStock = $quantityInStock,
									buyPrice = $buyPrice,
									MSRP = $MSRP
									WHERE productCode = '$productCode'";
//  		$this-> _db-> query($sql);
//  		return $this-> _db-> errno;
 		$result = $this->_db->query ( $sql ) or die ( 'Error: ' . $sql );
 		return; 		
 	}
 	
 	//insertar
 	public function insertar($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP){
 		$sql = "INSERT INTO Products SET productCode = '$productCode',
 									productName = '$productName',
									productLine = '$productLine',
									productScale = '$productScale',
									productVendor = '$productVendor',
									productDescription = '$productDescription',
									quantityInStock = $quantityInStock,
									buyPrice = $buyPrice,
									MSRP = $MSRP";
 		$result = $this-> _db-> query($sql) or die ('Error: '.$sql);
 		return;
 	}
 }
?>
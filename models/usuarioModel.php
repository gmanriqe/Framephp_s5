<?php
class usuarioModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
	public function autenticar($idusuario, $clave) {
		$sql = "SELECT * FROM usuarios WHERE idusuario='$idusuario' and clave=SHA1('$clave')";
		$result = $this->_db->query ( $sql ) or die ( 'Error: ' . $sql );
		
		// num_rows Obtiene el número de filas en un resultado
		if ($result->num_rows) {
			return true;
		} else {
			return false;
		}
	}
	public function listar() {
		$sql = "SELECT * FROM usuarios";
		$resultado = $this->_db->query ( $sql ) or die ( 'Error: ' . $sql );
		return $resultado;
	}
	public function insertar($idusuario, $nombre, $clave, $email, $rol) {
		$sql = "INSERT INTO usuarios set idusuario = '$idusuario',
											 nombre = '$nombre',
											 clave = SHA1('$clave'),
											 email = '$email',
											 rol = '$rol',
											 fechareg = now()";
		$result = $this->_db->query ( $sql ) or die ( 'Error: ' . $sql );
		return;
	}
	public function formeditar($idusuario) {
		$sql = " SELECT * FROM usuarios WHERE idusuario = '$idusuario'";
		$result = $this->_db->query ( $sql ) or die ( 'Error: ' . $sql );
		$reg = null;
		
		if ($result->num_rows) {
			$reg = $result->fetch_object (); // el resultado enviarlo como un objeto a la vista RECUERDA!
		}
		return $reg;
	}
	public function editar($idusuario, $nombre, $email, $rol) {
		$sql = "UPDATE usuarios SET nombre = '$nombre',
											 email = '$email',
											 rol = '$rol'
											 WHERE idusuario = '$idusuario'";
		
		$result = $this->_db->query ( $sql ) or die ( 'Error: ' . $sql );
		return $result;
	}
	public function eliminar($idusuario) {
		$sql = "DELETE from usuarios WHERE idusuario = '$idusuario'";
		$this->_db->query ( $sql ) or die ( 'Error: ' . $sql );
		return;
	}
}

?>
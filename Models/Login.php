<?php

/**
 * Modelo ingreso
 */
class Login
{
	private $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new Conexion;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function validateUser($data)
	{
        try {
        	$strSql = "SELECT d.*,p.NOMBRE as perfil FROM docentes d
        	INNER JOIN perfil p ON p.ID_PERFIL = d.ID_PERFIL WHERE d.CORREO = '{$data['CORREO']}' AND d.CLAVE = '{$data['CLAVE']}'";
        	$query = $this->pdo->select($strSql);
        	if (isset($query[0]->ID_DOCENTE)) {
        		$_SESSION['user'] = $query[0];
        		return true;
        	}else{
        		return "Correo y contraseña incorrectos. Verifique sus credenciales/Cuenta Bloqueada";
        	}
        } catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
<?php

/**
 * Modelo docentes
 */
class Teacher
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

	public function getAll()
	{
		try {
			$strSql = "SELECT d.*,p.NOMBRE as perfil FROM docentes d
        	INNER JOIN perfil p ON p.ID_PERFIL = d.ID_PERFIL WHERE d.ID_PERFIL = 1 OR d.ID_PERFIL = 2";
        	$query = $this->pdo->select($strSql);
        	return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newTeacher($data)
	{
		try {
			$data['ESTADO'] = 'Activo';
			$this->pdo->insert('docentes' , $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$strSql = "SELECT d.*,p.NOMBRE as perfil FROM docentes d
        	INNER JOIN perfil p ON p.ID_PERFIL = d.ID_PERFIL WHERE ID_DOCENTE = :ID_DOCENTE";
			$array = ['ID_DOCENTE' => $id ];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function updateTeacher($data)
	{
    	try {
    		$strWhere = "ID_DOCENTE=" .$data['ID_DOCENTE'];
    		$this->pdo->update('docentes' , $data , $strWhere); 
    	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function editStatus($data)
	{
		try {
    		$strWhere = "ID_DOCENTE=" .$data['ID_DOCENTE'];
    		$this->pdo->update('docentes' , $data , $strWhere); 
    	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteTeacher($data)
	{
    	try {
    		$strWhere = "ID_DOCENTE=" .$data['id'];
    		$this->pdo->delete('docentes' , $strWhere); 
    	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
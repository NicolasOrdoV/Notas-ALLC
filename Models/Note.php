<?php

/**
 * Modelo notas
 */
class Note
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
    		$strSql = "SELECT * FROM nota";
    		$query = $this->pdo->select($strSql);
    		return $query;
    	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getStudentCourse($course)
	{
		try {
			$strSql = "SELECT e.*,c.CURSO as curso FROM estudiantes e 
			INNER JOIN cursos c ON c.ID_CURSO = e.ID_CURSO 
			WHERE c.CURSO LIKE '%$course%'";
            $query = $this->pdo->select($strSql);
            return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newNotes($data)
	{
		try {
			$this->pdo->insert('nota' , $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function verifyNotes($id)
	{
		try {
			$strSql = "SELECT n.*,e.NOMBRES as nombres, e.APELLIDOS as apellidos, e.ID_ESTUDIANTE as id, a.NOMBRE as asignatura FROM nota n
			INNER JOIN estudiantes e ON e.ID_ESTUDIANTE = n.ID_ESTUDIANTE
			INNER JOIN asignatura a ON a.ID_ASIGNATURA = n.ID_ASIGNATURA";
			$array = ['ID_NOTA' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function updateNotes($data)
	{
		try {
			$strWhere = "ID_NOTA=" .$data['ID_NOTA'];
			$this->pdo->update('nota' , $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
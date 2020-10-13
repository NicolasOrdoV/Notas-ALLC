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
}
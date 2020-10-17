<?php

/**
 * Modelo estudiantes
 */
class Student
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
			$strSql = "SELECT e.*, c.CURSO as curso FROM estudiantes e
			INNER JOIN cursos c on c.ID_CURSO = e.ID_CURSO";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newStudent($data)
	{
    	try {
    		$this->pdo->insert('estudiantes' ,$data);
    	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$strSql = "SELECT e.*, c.CURSO as curso FROM estudiantes e
			INNER JOIN cursos c on c.ID_CURSO = e.ID_CURSO WHERE ID_ESTUDIANTE = :ID_ESTUDIANTE";
			$array = ['ID_ESTUDIANTE' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
<?php

/**
 * Modelo cursos
 */
class Course
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
			$strSql = "SELECT * FROM cursos ORDER BY CURSO";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newCourse($data)
	{
		try {
			$this->pdo->insert('cursos' , $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteCourse($data)
	{
		try {
			$strWhere = "ID_CURSO=" .$data['id'];
			$this->pdo->delete('cursos' , $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
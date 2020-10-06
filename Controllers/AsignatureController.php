<?php

require 'Models/Asignature.php';

/**
 * Controlador Asignaturas
 */
class AsignatureController
{
	private $model;

	public function __construct()
	{
		$this->model = new Asignature;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$asignatures = $this->model->getAll();
		require 'Views/Asignatures/list.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}
}
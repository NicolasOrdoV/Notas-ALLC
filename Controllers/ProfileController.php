<?php

require 'Models/Profile.php';

/**
 * Controlador perfiles
 */
class ProfileController
{
	private $model;

	public function __construct()
	{
		$this->model = new Profile;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$profiles = $this->model->getAll();
		require 'Views/Profiles/list.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}
}
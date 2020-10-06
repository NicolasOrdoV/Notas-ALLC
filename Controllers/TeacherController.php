<?php

require 'Models/Teacher.php';
require 'Models/Profile.php';

/**
 * Controlador docentes
 */
class TeacherController
{
	private $model;
	private $profile;

	public function __construct()
	{
		$this->model = new Teacher;
		$this->profile = new Profile;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$teachers = $this->model->getAll();
		require 'Views/Teachers/list.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function new()
	{
		require 'Views/Layout.php';
		$profiles = $this->profile->getAll();
		require 'Views/Teachers/new.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function save()
	{
		$this->model->newTeacher($_REQUEST);
		$succesful = "docente registrado con exito!";
		require 'Views/Layout.php';
		$profiles = $this->profile->getAll();
		require 'Views/Teachers/new.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
		return $succesful;
	}

	public function myProfile()
	{
		require 'Views/Layout.php';
		require 'Views/Teachers/MyProfile.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function edit()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->model->getById($id);
			require 'Views/Layout.php';
			$profiles = $this->profile->getAll();
			require 'Views/Teachers/edit.php';
			require 'Views/Footer.php';
			require 'Views/Scripts.php';
		}
	}

	public function editPass()
	{
		require 'Views/Layout.php';
		require 'Views/Teachers/editPass.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function updatePass()
	{
		if ($_POST) {
			$password = $_POST['CLAVE'];
			$confirm_password = $_POST['CLAVEC'];
			$data = [
				'ID_DOCENTE' => $_POST['ID_DOCENTE'],
				'CLAVE'      => $_POST['CLAVE']
			];
			if ($password == $confirm_password) {
				$this->model->updateTeacher($data);
			    header('Location: ?controller=teacher&method=myProfile');
			}else{
				require 'Views/Layout.php';
				$error = [
					'errorMessage' => "Las contraseñas no coinciden, por favor verificar"
				];
				require 'Views/Teachers/editPass.php';
				require 'Views/Footer.php';
				require 'Views/Scripts.php';
			}
		}	
	}

	public function update()
	{
		if ($_POST) {
			$this->model->updateTeacher($_POST);
			header('Location: ?controller=teacher&method=myProfile');
		}
	}

	public function updateStatus()
	{
		$role = $this->model->getById($_REQUEST['id']);
		$data = [];
		if ($role[0]->ESTADO == 'Activo') {
			$data = [
				'ID_DOCENTE' => $role[0]->ID_DOCENTE,
				'ESTADO' => 'Inactivo'
			];
		}elseif ($role[0]->ESTADO == 'Inactivo') {
			$data = [
				'ID_DOCENTE' => $role[0]->ID_DOCENTE,
				'ESTADO' => 'Activo'
			];
		}
		$this->model->editStatus($data);
		header('Location: ?controller=teacher');
	}

	public function delete()
	{
		$this->model->deleteTeacher($_REQUEST);
		header('Location: ?controller=teacher');
	}
}
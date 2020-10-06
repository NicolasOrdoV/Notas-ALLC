<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
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
		$mail = new PHPMailer(true);
		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'nikomegathet666@gmail.com';                     // SMTP username
		    $mail->Password   = '1000464327bat';                               // SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('nikomegathet666@gmail.com');
		    $mail->addAddress($_POST['CORREO']);     // Add a recipient

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'CREACION DE CUENTA';
		    $mail->Body    = '<p>Estimado '.$_POST['NOMBRES'].' :</p><br>
		                     <p>Su cuenta se ha creado con exito, para ingresar se debe tener en cuenta sus siguientes items:</p><br>
		                     <div>
		                     	<h2>Usuario:</h2><br>
		                     	<p>'.$_POST['CORREO'].'</p>
		                     </div>
		                     <div>
		                     	<h2>Contraseña:</h2><br>
		                     	<p>'.$_POST['CLAVE'].'</p>
		                     </div><br>
		                     <p>Recuerde cambiar su contraseña una vez entre por primera vez al sistema</p>
		                     <a href="http://localhost/Notas/">Iniciar Sesion</a>';
		    $mail->send();

		    $succesful = "Docente registrado con exito, correo enviado al docente registrado";
			require 'Views/Layout.php';
			$profiles = $this->profile->getAll();
			require 'Views/Teachers/new.php';
			require 'Views/Footer.php';
			require 'Views/Scripts.php';
			return $succesful;
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
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
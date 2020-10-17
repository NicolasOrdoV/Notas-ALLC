<?php

require 'Models/Note.php';
require 'Models/Course.php';
require 'Models/Asignature.php';
require 'Models/Student.php';

/**
 * Controlador de notas
 */
class NoteController
{
	private $model;
	private $course;
	private $asignature;
	private $student;

	public function __construct()
	{
		$this->model = new Note;
		$this->course = new Course;
		$this->asignature = new Asignature;
		$this->student = new Student;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$courses = $this->course->getAll();
		require 'Views/Notes/notes.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function list()
	{
		if (isset($_REQUEST['course'])) {
			$course = $_REQUEST['course'];
			$students = $this->model->getStudentCourse($course);
			require 'Views/Layout.php';
			require 'Views/Notes/list.php';
			require 'Views/Footer.php';
			require 'Views/Scripts.php';
		}
	}

	public function new()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->student->getById($id);
            require 'Views/Layout.php';
			$asignatures = $this->asignature->getAll();
			require 'Views/Notes/new.php';
			require 'Views/Footer.php';
			require 'Views/Scripts.php';
		}
	}

	public function save()
	{
		$this->model->newNotes($_REQUEST);
		header('Location: ?controller=note');
	}

	public function edit()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$notes = $this->model->verifyNotes($id);
			require 'Views/Layout.php';
			$asignatures = $this->asignature->getAll();
			require 'Views/Notes/edit.php';
			require 'Views/Footer.php';
			require 'Views/Scripts.php';
		}
	}

	public function update()
	{
		if ($_POST) {
			$this->model->updateNotes($_POST);
			header('Location: ?controller=note');
		}
	}
}
<?php

require 'Models/Note.php';
require 'Models/Course.php';

/**
 * Controlador de notas
 */
class NoteController
{
	private $model;
	private $course;

	public function __construct()
	{
		$this->model = new Note;
		$this->course = new Course;
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
}
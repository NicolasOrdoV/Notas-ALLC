<?php

require 'Models/Student.php';
require 'Models/Course.php';

/**
 * Controlador estudiantes
 */
class StudentController
{
	private $model;
	private $course;

	public function __construct()
	{
		$this->model = new Student;
		$this->course = new Course;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$students = $this->model->getAll();
		require 'Views/Students/list.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function new()
	{
		require 'Views/Layout.php';
		$courses = $this->course->getAll();
		require 'Views/Students/new.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function save()
	{
		$this->model->newStudent($_REQUEST);
		header('Location: ?controller=student');
	}
}
<?php

require 'Models/Course.php';

/**
 * Controlador cursos
 */
class CourseController
{
	private $model;

	public function __construct()
	{
		$this->model = new Course;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$courses = $this->model->getAll();
		require 'Views/Courses/list.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function new()
	{
		require 'Views/Layout.php';
		require 'Views/Courses/new.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}

	public function save()
	{
		$this->model->newCourse($_REQUEST);
		header('Location: ?controller=course');
	}

	public function delete()
	{
		$this->model->deleteCourse($_REQUEST);
		header('Location: ?controller=course');
	}
}
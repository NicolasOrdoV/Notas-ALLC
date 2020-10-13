<?php

/**
 * Clase principal
 */
class Homecontroller
{
	public function index()
	{
		if (isset($_SESSION['user'])) {
			require 'Views/Layout.php';
			require 'Views/Home.php';
			require 'Views/Footer.php';
			require 'Views/Scripts.php';
		}else{
			header('Location: ?controller=login');
		}
		
	}
}
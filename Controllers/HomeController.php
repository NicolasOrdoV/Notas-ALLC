<?php

/**
 * Clase principal
 */
class Homecontroller
{
	public function index()
	{
		require 'Views/Layout.php';
		require 'Views/Home.php';
		require 'Views/Footer.php';
		require 'Views/Scripts.php';
	}
}
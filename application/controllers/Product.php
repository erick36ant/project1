<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	
	public function index()
	{
		echo "List of Product";
	}
	
	public function shoes($name, $size){
		echo "This product  is{$name} size {$size}";
		
	}
	
	
}

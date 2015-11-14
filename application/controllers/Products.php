<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	
	public function index()
	{
		$data["title"] = heading("List of Product", 3);
		$data["products"] = $this->Products_model->showAllProducts();
		$this->load->view("view_products",$data);
		//var_dump($data->result_array());
		//$data2->ProductsName;
		//$x ='<ol>';
		//foreach ($data->result() as $row){
		//	$x .='<li>' .$row->ProductName. '</li>';
		//}
		//$x .= '</ol>';
		//echo $x;
	}
	
	public function shoes($name, $size){
		$this->load->helper("string");
		echo "This product {$name} size {$size}";
		
		$uri = '<ol>';
		$uri .= '<li>' .$this->uri->segment(1).'</li>';
		$uri .= '<li>' .$this->uri->segment(2).'</li>';
		$uri .= '<li>' .$this->uri->segment(3).'</li>';
		$uri .= '<li>' .$this->uri->segment(4).'</li>';
		$uri .= '<li>' .$this->uri->segment(5).'</li>';
		$uri .= '<li>' .$this->uri->segment(6,'oye').'</li>';
		echo $uri;
		echo "Price : " .duit($this->harga(4000000));
		
	}
	
	private function harga($harga){
		return $harga - ((diskon/100) * $harga );
		
	}
}

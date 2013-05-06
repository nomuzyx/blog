<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class hello extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		echo"this is a initialisation.<br>";
	}	
	public function index()
	{
		echo"this is my index";
	}
	public function one($param1,$param2)
	{
		echo"This is the one.</br>";
		echo"these are paramaters $param1 $param2";
	}

	public function one1($name)
	{	
		$data = array("name" => $name);
		$this->load->view('header');
		$this->load->view('one',$data);
	}

	public function two()
	{
		echo"this is two";
	}
}
?>
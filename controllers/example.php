<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('message');
	}
	
	function index()
	{
		$this->load->view('example_view');
	}
	
	function message()
	{
		$this->message->set('message','this is just a message');
		$this->index();
	}

	function notice()
	{
		$data = array(
			'message'=>'this is just a message',
			'notice'=>'this is just a notice'
		);

		$this->message->set($data);
		$this->index();
	}

	function error()
	{
		$this->message->set('message','this is just a message');
		$this->message->set('error','this is an error');

		redirect('example');
	}
	
}

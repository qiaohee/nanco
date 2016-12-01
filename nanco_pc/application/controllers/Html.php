<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Html extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('comm_model','comm');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function html_tutorial()
	{
		//分类
		$type = $this->comm->findAll("type",array("parentid"=>0));
		$data['type'] = $type;

		$this->load->view('header',$data);
		$this->load->view('html/tutorial');
		$this->load->view('footer');
	}
}

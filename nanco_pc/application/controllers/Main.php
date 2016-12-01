<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index()
	{
		//分类
		$type = $this->comm->findAll("type",array("parentid"=>0));

		//html分类
		foreach($type as $k=>$v)
		{
			$html_type = $this->comm->findAll("type",array("parentid"=>$v['id']));
			$type[$k]['son_type'] = $html_type;
			$type[$k]['son_num'] = count($html_type);
		}
		$data['type'] = $type;

		$data['title'] = "W3CRUN - 查BUG , 从这里开始!";
		$data['keywords'] = "w3crun,w3c,w3cschool,HTML,CSS,PHP,DOM,JavaScript,jQuery,XML,AJAX,ASP.NET,W3C,MySQL,SQL,jquery mobile,bootstrap,Python,jquery easyui,jquery ui,angularjs";
		$data['description'] = "w3crun是一个BUG查询及文档查询网站, 包括HTML、CSS、Javascript、Python，Java，Ruby，C，PHP , MySQL等各种编程语言的基础知识文档和BUG实例。";

		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function search()
	{
		$this->load->view('header');
		$this->load->view('search');
		$this->load->view('footer');
	}
}

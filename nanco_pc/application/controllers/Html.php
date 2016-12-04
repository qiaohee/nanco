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
		$type = $this->comm->find("type",array("id"=>11));
		$son_type = $this->comm->findAll("type",array("parentid"=>$type['id']));

		$data['type'] = $type;
		$data['son_type'] = $son_type;

		$data['title'] = "HTML 教程";
		$data['keywords'] = "w3crun,w3c,w3cschool,HTML";
		$data['description'] = "HTML 教程- (HTML5 标准)您可以使用 HTML 来建立自己的 WEB 站点。在w3crun教程中，您将学习如何使用 HTML 来创建站点。HTML 易学习！相信您能很快学会它！，切记注意细节，w3crun。";

		$type_all = $this->comm->findAll("type",array("parentid"=>1));
		$data['type_all'] = $type_all;

		$this->load->view('header',$data);
		$this->load->view('html/tutorial');
		$this->load->view('footer');
	}

	public function html_intro()
	{
		//分类
		$type = $this->comm->find("type",array("id"=>11));
		$son_type = $this->comm->findAll("type",array("parentid"=>$type['id']));

		$data['type'] = $type;
		$data['son_type'] = $son_type;

		$data['title'] = "HTML 教程";
		$data['keywords'] = "w3crun,w3c,w3cschool,HTML,CSS,PHP,DOM,JavaScript,jQuery,XML,AJAX,ASP.NET,W3C,MySQL,SQL,jquery mobile,bootstrap,Python,jquery easyui,jquery ui,angularjs";
		$data['description'] = "HTML 教程- (HTML5 标准)您可以使用 HTML 来建立自己的 WEB 站点。在本教程中，您将学习如何使用 HTML 来创建站点。HTML 很容易学习！相信您能很快学会它！HTML 实例本教程包含了数百个 HTML 实例。使用本站的编辑器，您可以轻松实现在线修改 HTML，并查看实例运_来自HTML教程，w3crun。";

		$type_all = $this->comm->findAll("type",array("parentid"=>1));
		$data['type_all'] = $type_all;

		$this->load->view('header',$data);
		$this->load->view('html/intro');
		$this->load->view('footer');
	}

	public function html_editors()
	{
		//分类
		$type = $this->comm->find("type",array("id"=>11));
		$son_type = $this->comm->findAll("type",array("parentid"=>$type['id']));

		$data['type'] = $type;
		$data['son_type'] = $son_type;

		$data['title'] = "HTML 教程";
		$data['keywords'] = "w3crun,w3c,w3cschool,HTML,CSS,PHP,DOM,JavaScript,jQuery,XML,AJAX,ASP.NET,W3C,MySQL,SQL,jquery mobile,bootstrap,Python,jquery easyui,jquery ui,angularjs";
		$data['description'] = "HTML 教程- (HTML5 标准)您可以使用 HTML 来建立自己的 WEB 站点。在本教程中，您将学习如何使用 HTML 来创建站点。HTML 很容易学习！相信您能很快学会它！HTML 实例本教程包含了数百个 HTML 实例。使用本站的编辑器，您可以轻松实现在线修改 HTML，并查看实例运_来自HTML教程，w3crun。";

		$type_all = $this->comm->findAll("type",array("parentid"=>1));
		$data['type_all'] = $type_all;

		$this->load->view('header',$data);
		$this->load->view('html/editors');
		$this->load->view('footer');
	}
}

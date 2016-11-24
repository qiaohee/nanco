<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

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
		//连接本地的 Redis 服务
		$redis = new Redis();
		$redis->connect('127.0.0.1', 6379);
		echo "Connection to server sucessfully";

		header("content-type:text/html;charset=utf-8");
		$mywatchkey = $redis->get("mywatchkey");
		$rob_total = 100;   //抢购数量
		if($mywatchkey<$rob_total){
			$redis->watch("mywatchkey");
			$redis->multi();

			//设置延迟，方便测试效果。
			sleep(5);
			//插入抢购数据
			$redis->hSet("mywatchlist","user_id_".mt_rand(1, 9999),time());
			$redis->set("mywatchkey",$mywatchkey+1);
			$rob_result = $redis->exec();
			if($rob_result){
				$mywatchlist = $redis->hGetAll("mywatchlist");
				echo "抢购成功！<br/>";
				echo "剩余数量：".($rob_total-$mywatchkey-1)."<br/>";
				echo "用户列表：<pre>";
				var_dump($mywatchlist);
			}else{
				echo "手气不好，再抢购！";exit;
			}
		}
		exit;
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
}

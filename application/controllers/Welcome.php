<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends Front_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database ();

	}
	
	function index()
	{

		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行
		$this->view('index',array());
	}
	
	function about()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('about',array());
	}

	function about2()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('about2',array());
	}

	function about3()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('about3',array());
	}

	function about4()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('about4',array());
	}
	

	function news($years=0,$page = 1)
	{
		// $type = ($newstype == 'company' || $newstype == '') ? "公司新闻":"产品新闻";
		$allyears = $this->db->query("select distinct years from `t_aci_news` order by years desc")->result_array();
		$years = $years == 0 || $years == ""? $allyears[0]['years']:$years;

		$number = 3;
		// $allnews = $this->db->query("select * from `t_aci_news` where years='{$years}' and type='{$type}'")->result_array();
		$allnews = $this->db->query("select * from `t_aci_news` where years='{$years}'")->result_array();
		$maxpage = ceil(count($allnews)/$number);
		$page = $page == ""||$page < 1 ? 1 : $page;
		$page = $page > $maxpage? $maxpage:$page;
		$start = $number * ($page-1);

		if(count($allnews) == 0)
		{
			$news = $allnews;
		}else{
			// $news = $this->db->query("select * from `t_aci_news` where years='{$years}' and type='{$type}' limit {$start},{$number}")->result_array();	
			$news = $this->db->query("select * from `t_aci_news` where years='{$years}' limit {$start},{$number}")->result_array();	
		}


		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		// $this->view('news',array('news'=>$news,'newstype'=>$newstype, 'years'=>$years,'allyears'=>$allyears,'page'=>$page,'maxpage'=>$maxpage));
		$this->view('news',array('news'=>$news, 'years'=>$years,'allyears'=>$allyears,'page'=>$page,'maxpage'=>$maxpage));
	}

	function newsdetail($news_id)
	{
		$allnews = $this->db->query("select * from `t_aci_news` where news_id={$news_id}")->result_array()[0];
		$allnews['content'] = htmlspecialchars_decode(html_entity_decode(stripslashes($allnews['content'])));
		echo json_encode($allnews);
	}

	
	function experience()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行
		$questions = array();
		$result = $this->db->query("select * from `t_aci_question` order by createtime desc")->result_array();
		foreach ($result as $key => $value) {
			if(array_key_exists($value['type'], $questions))
			{
				array_push($questions[$value['type']], $value);
			}else{
				$questions[$value['type']] = array($value);
			}
		}
		$this->view('experience',array('questions'=>$questions));
	}

	function experience2()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('experience2',array());
	}

	function contactus()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('contactus',array());
	}

	function mystyle()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行
		$hairs = array();
		$result = $this->db->query("select * from `t_aci_fashionhair` order by fashionhair_id asc")->result_array();
		foreach ($result as $key => $value) {
			if(array_key_exists($value['type'], $hairs))
			{
				array_push($hairs[$value['type']], $value);
			}else{
				$hairs[$value['type']] = array($value);
			}
		}
		$this->view('mystyle',array('hairs'=>$hairs));
	}

	function mystyle2()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$hairs = array();
		$result = $this->db->query("select * from `t_aci_fashionhair` order by fashionhair_id asc")->result_array();
		foreach ($result as $key => $value) {
			if(array_key_exists($value['type'], $hairs))
			{
				array_push($hairs[$value['type']], $value);
			}else{
				$hairs[$value['type']] = array($value);
			}
		}
		$this->view('mystyle2',array('hairs'=>$hairs));
	}

	function mystyle3($type=1,$page=1)
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行
		$typename = "";
		switch ($type) {
			case '1':
				$typename = "烫发器";
				break;
			case '2':
				$typename = "电吹风";
				break;
			case '3':
				$typename = "理发器";
				break;
			case '4':
				$typename = "美容健康";
				break;
			default:
				$typename = "烫发器";
				break;
		}
		$shows = $this->db->query("select * from `t_aci_magicshow` where type='{$typename}' order by magicshow_id asc")->result_array();

		$number =10;
		$allshows = $this->db->query("select * from `t_aci_magicshow` where type='{$typename}' order by magicshow_id asc")->result_array();
		$maxpage = ceil(count($allshows)/$number);
		$page = $page == ""||$page < 1 ? 1 : $page;
		$page = $page > $maxpage? $maxpage:$page;
		$start = $number * ($page-1);

		if(count($allshows) == 0)
		{
			$shows = $allshows;
		}else{
			$shows = $this->db->query("select * from `t_aci_magicshow` where type='{$typename}' order by magicshow_id asc  limit {$start},{$number}")->result_array();
		}


		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('mystyle3',array('shows'=>$shows,'type'=>$type,'page'=>$page,'maxpage'=>$maxpage));
	}

	function mystyle4()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行
		$showgrouds = $this->db->query("select * from `t_aci_showgroud` order by showgroud_id asc")->result_array();

		$this->view('mystyle4',array('showgrouds'=>$showgrouds));
	}

	function pro()
	{
		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$this->view('pro',array());
	}


	function prolist($type=1,$page = 1)
	{
		switch ($type) {
			case '1':
				$typename = "烫发器";
				break;
			case '2':
				$typename = "电吹风";
				break;
			case '3':
				$typename = "理发器";
				break;
			case '4':
				$typename = "美容健康";
				break;
			default:
				$typename = "烫发器";
				break;
		}


		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行

		$number =11;
		$allproducts = $this->db->query("select * from `t_aci_product` where type='{$typename}'")->result_array();
		// print_r($allproducts);
		$maxpage = ceil(count($allproducts)/$number);
		$page = $page == ""||$page < 1 ? 1 : $page;
		$page = $page > $maxpage? $maxpage:$page;
		$start = $number * ($page-1);

		if(count($allproducts) == 0)
		{
			$products = $allproducts;
		}else{
			$products = $this->db->query("select * from `t_aci_product` where type='{$typename}' limit {$start},{$number}")->result_array();	
		}

		$this->view('prolist',array('products'=>$products,'type'=>$type,'page'=>$page,'maxpage'=>$maxpage));
	}

	function prodetail($type=1,$product_id)
	{
		switch ($type) {
			case '1':
				$typename = "烫发器";
				break;
			case '2':
				$typename = "电吹风";
				break;
			case '3':
				$typename = "理发器";
				break;
			case '4':
				$typename = "美容健康";
				break;
			default:
				$typename = "烫发器";
				break;
		}

		$allproducts = $this->db->query("select * from `t_aci_product` where type='{$typename}' and product_id <> {$product_id} order by sort limit 0,3")->result_array();

		$images = $this->db->query("select * from `t_aci_productimage` where product_id='{$product_id}' limit 0,8")->result_array();

		$this->reload_all_cache();//更新全局菜单缓存，可以去掉这行
		$product = $this->db->query("select * from `t_aci_product` where product_id='{$product_id}'")->result_array()[0];
		$memos = explode("\n", $product['memo']);
		$this->view('prodetail',array('type'=>$type,'product'=>$product,'images'=>$images,'memos'=>$memos,'allproducts'=>$allproducts));
	}
	
}
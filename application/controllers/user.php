<?php

class User extends MY_Controller{
	public function index(){
		$this->load->helper('form');

		$this->load->model('articlesmodel', 'articles');

		$this->load->library('pagination');
		$config=[	
					'base_url' 				=> base_url('user/index'),
					'per_page' 				=> 5,
					'total_rows' 			=> $this->articles->count_all_articles(),
					'full_tag_open' 		=> "<ul class='pagination'>",
					'full_tag_close' 		=> "</ul>",
					'next_tag_open' 		=> '<li class="page-link">',
					'next_tag_close' 		=> '</li>',
					'prev_tag_open' 		=> '<li class="page-link">',
					'prev_tag_close' 		=> '</li>',
					'num_tag_open'			=> "<li class='page-link'>",
					'num_tag_close'			=> '</li>',
					'cur_tag_open'			=> "<li class='page-item active'><a class='page-link'>",
					'cur_tag_close'			=> '</a></li>',
					'last_tag_open'			=> '<li class="page-link">',
					'last_tag_close'		=> '</li>',
					'first_tag_open'		=> '<li class="page-link">',
					'first_tag_close'		=> '</li>',
 
 		];
		$this->pagination->initialize($config);
		$articles = $this->articles->all_articles_list($config['per_page'],  $this->uri->segment(3));
		//echo "<pre>"; print_r($articles); exit;


		$this->load->view('public/article_list', compact('articles'));
	}

	public function search(){
		
		$query = $this->input->post('query');
		return redirect("user/search_result/$query");
		//print_r($query);
		//$this->load->model('articlesmodel', 'articles');
		//$articles = $this->articles->search($query);
		//$this->load->view('public/search', compact('articles'));

	}

	public function search_result($query){
		$this->load->helper('form');
		$this->load->model('articlesmodel', 'articles');
		$this->load->library('pagination');
		$config=[	
					'base_url' 				=> base_url("user/search_result/$query"),
					'per_page' 				=> 5,
					'total_rows' 			=> $this->articles->count_search_all_articles($query),
					'full_tag_open' 		=> "<ul class='pagination'>",
					'full_tag_close' 		=> "</ul>",
					'next_tag_open' 		=> '<li class="page-link">',
					'next_tag_close' 		=> '</li>',
					'prev_tag_open' 		=> '<li class="page-link">',
					'prev_tag_close' 		=> '</li>',
					'num_tag_open'			=> "<li class='page-link'>",
					'num_tag_close'			=> '</li>',
					'cur_tag_open'			=> "<li class='page-item active'><a class='page-link'>",
					'cur_tag_close'			=> '</a></li>',
 
 		];
		$this->pagination->initialize($config);
		$articles = $this->articles->search_articles_list($config['per_page'],  $this->uri->segment(4),$query);
		$this->load->view('public/search', compact('articles'));
	}

	public function article_body($id){
		$this->load->helper('form');
		$this->load->model('articlesmodel', 'articles');
		$articles = $this->articles->find($id);
		$this->load->view('public/article_details', compact('articles'));
	}

}
?>
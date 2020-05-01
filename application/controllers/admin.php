<?php

class Admin extends MY_Controller{
	public function dashboard(){
		$this->load->library('pagination');
		$config=[	
					'base_url' 				=> base_url('admin/dashboard'),
					'per_page' 				=> 5,
					'total_rows' 			=> $this->articles->num_rows(),
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
		$articles = $this->articles->articles_list($config['per_page'],  $this->uri->segment(3));

		$this->load->view('admin/dashboard', ['articles'=>$articles]);
	}

	public function add_article(){
		
		$this->load->view('admin/add_article');
	}

	public function store_article(){
		$config = [
						'upload_path'	=> './upload',
						'allowed_types'	=> 'jpg|png|gif|jpeg',
		];
		$this->load->library('upload', $config);
		if($this->upload->do_upload()){
		$post = $this->input->post();
		unset($post['submit']);
		//echo "<pre>"; print_r($post); exit;
		
		$data = $this->upload->data();
		//print_r($data); exit;
		$image_path = base_url("upload/".$data['orig_name']);
		$post['image_path'] = $image_path;

		return $this->_flashAndRedirect($this->articles->insert_articles($post),
										'Article Added Successfully',
										'Article Failed to Add' );
		}
		else
			$upload_error=$this->upload->display_errors();
			$this->load->view('admin/add_article',compact('upload_error'));
	}

	public function edit_article($article_id){
		$article = $this->articles->edit_articles($article_id);
		$this->load->view('admin/edit_article', ['articles'=>$article]);		
	}

	public function update_article($article_id){
		$post = $this->input->post();
		unset($post['submit']);
		return $this->_flashAndRedirect($this->articles->update_articles($article_id, $post),
										'Article Updated Successfully',
										'Article Failed to Update' );
	}

	public function delete_articles(){
		$post = $this->input->post('article_id');
		return $this->_flashAndRedirect( $this->articles->delete_articles($post),
								  'Article Deleted Successfully',
								  'Article Failed to Delete' );
		}

	
	private function _flashAndRedirect($success, $successmsg, $failmsg){
		if($success){
			$this->session->set_flashdata('feedback', $successmsg);
			$this->session->set_flashdata('feedback_class','alert alert-success');
		}
		else{
			$this->session->set_flashdata('feedback', $failmsg);
			$this->session->set_flashdata('feedback_class', 'alert alert-danger');
		}
		return redirect('admin/dashboard');
	}

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata['id'])
			return redirect('login');
		$this->load->helper('form');
		$this->load->model('articlesmodel','articles');
	}
}
?>
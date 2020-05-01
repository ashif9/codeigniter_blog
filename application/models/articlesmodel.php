<?php

class Articlesmodel extends CI_Model{
	public function articles_list($limit, $offset){
		$user_id = $this->session->userdata('id');
		$qry = $this->db
					->select('id, title,body')
					->from('articles')
					->where('user_id', $user_id)
					->limit( $limit, $offset)
					->get();
		return $qry->result();
	}


	public function num_rows(){
		$qry = $this->db
					->select('id, title,body')
					->from('articles')
					->get();
		return $qry->num_rows();
	}

	public function insert_articles($array){
		return $this->db->insert('articles',$array);
	}

	public function edit_articles($id){
		$qry = $this->db
					->select()
					->where('id', $id)
					->get('articles');
		return $qry->row();

	}
	
	public function update_articles($article_id, $article_body){
		$qry = $this->db
						->where('id', $article_id)
						->update('articles', $article_body);
		return $qry;
	}

	public function delete_articles($article_id){
		$qry = $this->db
						->where('id',$article_id)
						->delete('articles');
		return $qry;
	}

	public function count_all_articles(){
		$qry = $this->db
					->select('id, title,body')
					->from('articles')
					->get();
		return $qry->num_rows();

	}
	public function all_articles_list($limit, $offset){
		$qry = $this->db
					->select()
					->from('articles')
					->limit( $limit, $offset)
					->order_by('created', 'DESC')
					->get();
		return $qry->result();
	}

	public function count_search_all_articles($query){
		$qry = $this->db
						->like('title', $query)
						->get('articles');
		return $qry->num_rows();
	}

	public function search_articles_list($limit, $offset, $query){
		$qry = $this->db
						->like('title', $query)
						->limit($limit, $offset)
						->get('articles');
		return $qry->result();
	}

	public function find($id){
		$qry = $this->db
						->select()
						->where('id',$id)
						->get('articles');
		return $qry->row();
	}
}
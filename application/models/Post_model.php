<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model{
	
	function insert_post($title,$contents){
		$data = array(
			'title'    => $title,
			'contents' => $contents
		);
		$this->db->insert('article',$data);
	}

	function get_article_by_id($id){
		$query = $this->db->get_where('article', array('id' =>  $id));
		return $query;
	}
}
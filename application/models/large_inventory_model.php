<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function loadLargeInventory()
	{
		$query = $this->db->get('public_inventory');
		return $query; 
	}
	
	
	/*public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
		public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
	}

	public function view($slug)
	{
		$data['news'] = $this->news_model->get_news($slug);
	}*/

}
<?php
class Pages extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct(); 
	}
	// Be default the view function goes to home.php
	public function view($page = 'index')
	{
		if ( ! file_exists('application/views/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			
			print($page); 
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view($page, $data);
	}
}
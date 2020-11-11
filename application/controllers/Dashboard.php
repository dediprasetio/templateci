<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
        // $this->load->view('welcome_message');
        $data = array(
            'page_content' 	=> 'dashboard',
            'ribbon' 		=> '<li class="active">Dashboard</li>',
            'page_name' 	=> 'Dashboard',
        );
        $this->render_view($data);
    }

    function render_view($data)
	{
		$this->template->load('template', $data);
	}
}
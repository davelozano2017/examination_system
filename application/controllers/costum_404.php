<?php 

class costum_404 extends CI_Controller
{

	public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 

    	$data['res'] = array(
			'page_title' 	=> 'Online Examination System',
			'message'		=> 'EoW pFv3!! YhvN6 P463 Nv4H H!nH4H4N4pFk MhV3 4y H!nDk!3 Mh4Th46pFv4N.<br> Hv3 hV3 hV3.</h1>'
			);
        $this->output->set_status_header('404'); 
        $data['url'] = base_url();
        $data['content'] = 'error_404'; // View name 
        $this->load->view('template/pages/404',$data);//loading in my template 
    } 

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Csv@easy';
        $data['content'] = 'crud';
        $this->load->view('master',$data);
	}

    public function crud_dev()
    {





	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_learn extends CI_Controller {

	public function index()
	{

	}

    public function csv($a='')
    {
        if($a != '') {
            // get file csv
            header('Content-type:text/csv');
            header('Content-Dis:text/csv');
        }
        $data['title'] = 'Csv@easy';
        $data['content'] = 'csv_learn';

        $this->load->model('order_detail_model');
        $data['orders'] = $this->order_detail_model->get_orders();

        $this->load->view('master',$data);
	}

}

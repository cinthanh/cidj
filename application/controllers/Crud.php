<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_learn extends CI_Controller {

	public function index()
	{

	}

    public function csv($a='')
    {
        $data['title'] = 'Csv@easy';
        $data['content'] = 'csv_learn';

        $this->load->model('order_detail_model');
        $data['orders'] = $this->order_detail_model->get_orders();

        if($a != '') {
            // get file csv
            $filename = 'csv_dev_'.date('YmdH_i_s').'.csv';
            header('Content-type:text/csv');
            header('Content-Disposition: attachment;filename='. $filename);
            header('Cache-Control: no-store, no-cache, must-revalidate');
            header('Cache-Control: post-check=0,pre-check=0');
            header('Pragma: no-cache');
            header('Expires: 0');

            $handle = fopen('php://output','w');
            fputcsv($handle,array(
                'ID',
                'UserID',
                'Create Date',
                'Name User',
                'Ship Date'
            ));

            foreach ($data['orders'] as $row) {
                fputcsv($handle,$row);
            }
            fclose($handle);
            exit();
        }
        $this->load->view('master',$data);

	}

}

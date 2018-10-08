<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {

	public function one_file()
	{
	    $this->load->helper('form');
        $data['title'] = 'Upload | Files';
        $data['content'] = 'files';

        if (isset($_REQUEST['btn_up_file'])) {
            echo "<pre>";
            print_r($_FILES['up_file']);
            echo "</pre>";
            $files['name']  = $_FILES['up_file']['name'];
            $files['type']  = $_FILES['up_file']['type'];
            $files['size']  = $_FILES['up_file']['size'];
            $files['tmp_name']  = $_FILES['up_file']['tmp_name'];
            $files['errors']  = $_FILES['up_file']['error'];
            $ext        = pathinfo($files['name'], PATHINFO_EXTENSION);
            $config['allowed'] = array('jpg', 'png','csv');
            $config['size'] = 866740;
            if ($_FILES['up_file']['error'] === UPLOAD_ERR_NO_FILE) {
                return 'file is required';
            }

            if (!in_array(pathinfo($_FILES['up_file']['name'], PATHINFO_EXTENSION), $config['allowed'])) {
                return 'file type not allowed';
            }

            if ($_FILES['up_file']['size'] > $config['size']) {
                return 'file so big';
            }



//            if (!empty($files['errors'])) {
//                echo "<pre>";
//                print_r($files['errors']);
//                echo "</pre>";
//            }
            // get extension of file


        }
        $this->load->view('master',$data);
	}




}

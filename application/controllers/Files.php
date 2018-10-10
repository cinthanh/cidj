<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
	public function one_file()
	{
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

    public function process_code()
    {
        // action : insert: update
        $act =  $this->uri->segment(3);
        // params : id
        $id =  $this->uri->segment(4);
        $data = array();

        $rules = array('edit','insert');
        if (!in_array($act,$rules)) {
           // redirect(search); flash_session: request invalid
            $this->session->set_flashdata('error_link', 'please don\'t hacking me');
            redirect(site_url());
        }
        if ($act == 'edit') {
            // redirect page edit va show form chua data
            //$data['render_data'] = $this->model->getInfor(id); vao form
            echo 1;
        }
        if ($this->input->post('update')) {

            $this->form_validation->set_rules('sys_name', 'sys_name', 'required');
            $this->form_validation->set_rules('sys_detail_name', 'sys_detail_name', 'required');
            $this->form_validation->set_rules('code1', 'Code', 'required|integer');
            $this->form_validation->set_rules('column_name', 'Email', 'required');
            // get params
            if (!$this->form_validation->run() == FALSE) {
                die('dssssssss');
            }


            $query = '';
            //echo 'you can edit me';
            // get session
            //$user = $this->session->userdata['user'];
            // => person_id update to table system_code_detail.lastup_account_id

            //system_code.name
            //system_code_detail.name
            //system_code_detail.code1
            //system_code_detail.lastup_account_id
//            $query = "
//                UPDATE system_code
//                INNER JOIN
//                  system_code_detail ON system_code.id = system_code_detail.system_code_id
//                  AND system_code.disable = 0
//                  AND system_code_detail.disable = 0
//                SET
//                  system_code.`name` = 'dddd',
//                  system_code_detail.`name` = 'fff',
//                  system_code_detail.code1 = '23',
//                  system_code_detail.lastup_account_id = '2000'
//                WHERE
//                  system_code_detail.id = '2'
//            ";
            //where system_code_detail.id = person_id

//            if (!$this->db->simple_query($query)) {
//                $this->session->set_flashdata('error_link', 'please try again update');
//                redirect(site_url());
//            }
        }

        if ($act == 'insert') {
            echo 'insert me vao db';
        }
        $this->load->view('boot36',$data);

	}

    public function show_detail($id)
    {
        if (!is_numeric($id)) {
            $this->session->set_flashdata('error_link', 'please don\'t hacking me');
            redirect(site_url());
        }
        $id = (int)$id;
        // get data from model
        // show view
        $this->load->view('boot36');
	}



}

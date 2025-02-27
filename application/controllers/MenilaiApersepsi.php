<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenilaiApersepsi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model
        $this->load->model('Menilaiapersepsi_model');
        $this->load->model('Kelolapertemuan_model');
        $this->load->model('Chat_model');
        $this->load->library('user_agent');
        checkRole(1);

    }

    public function index($id = '')
    {
            $pertemuan = $this->Kelolapertemuan_model->getPertemuanbyId($id);

            if($pertemuan){
                $data['title'] = "Hasil Apersepsi Pertemuan " . $id;
                $data['user'] = $this->Menilaiapersepsi_model->getUserByEmail($this->session->userdata('email'));
                $data['notifchat'] = $this->Chat_model->getChatData();
                $data['refleksi'] = $this->Menilaiapersepsi_model->getHasilApersepsi($id);
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/menilaiapersepsi/menilaiapersepsi', $data);
                $this->load->view('admin/template/footer');
            }else{
                redirect('Menilai');
            }
    }
}

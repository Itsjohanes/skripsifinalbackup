<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaMateri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelolamateri_model'); // Load the KelolaMateri_model
        $this->load->model('Kelolapertemuan_model');
        $this->load->model('Chat_model');
        checkRole(1);
    }

    public function index()
    {
        
        $data['title'] = "Materi";
        $data['user'] = $this->Kelolamateri_model->getUserByEmail($this->session->userdata('email'));
        $data['materi'] = $this->Kelolamateri_model->getMateri();
        $data['notifchat'] = $this->Chat_model->getChatData();
        $data['pertemuan'] = $this->Kelolapertemuan_model->getPertemuan();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/kelolamateri/materi', $data);
        $this->load->view('admin/template/footer');
       
    }

    public function tambahMateri()
    {
        
            $pertemuan = $this->input->post('pertemuan');
            $materi = $_FILES['materi']['name'];

            if ($materi) {
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '8192';
                $config['upload_path'] = './assets/materi/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('materi')) {
                    $materi = $this->upload->data('file_name');
                    $this->Kelolamateri_model->tambahMateri($pertemuan, $materi);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Materi berhasil ditambahkan</div>');
                    redirect('KelolaMateri');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Materi gagal ditambahkan</div>');
                    redirect('KelolaMateri');
                }
            }
        
    }

    public function hapusMateri($id)
    {
        
            $materi = $this->Kelolamateri_model->getMateriById($id);
            $pdf = $materi['materi'];
            unlink(FCPATH . 'assets/materi/' . $pdf);
            $this->Kelolamateri_model->hapusMateri($id);
            $this->session->set_flashdata('category_success', 'Materi berhasil dihapus');
            redirect('KelolaMateri');
        
    }

    public function editMateri($id)
    {
        
            $data['title'] = "Edit Materi";
            $data['notifchat'] = $this->Chat_model->getChatData();
            $data['user'] = $this->Kelolamateri_model->getUserByEmail($this->session->userdata('email'));
            $data['materi'] = $this->Kelolamateri_model->getMateriById($id);

            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/kelolamateri/editmateri', $data);
            $this->load->view('admin/template/footer');
        
    }

    public function runEditMateri()
    {
        
            $id = $this->input->post('id_materi');
            $pertemuan = $this->input->post('pertemuan');
            $materiLama = $this->input->post('file_lama');
            $materi = $_FILES['materi']['name'];
            if ($materi) {
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '8192';
                $config['upload_path'] = './assets/materi/';
                $this->load->library('upload', $config);
                unlink(FCPATH . './assets/materi/' . $materiLama);
                if ($this->upload->do_upload('materi')) {
                    $materi = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Materi gagal diubah</div>');
                }
               
            }

                $data = array(
                    'id_pertemuan' => $pertemuan,
                    'materi' => $materi
                );

                $this->Kelolamateri_model->updateMateri($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Materi berhasil diubah</div>');
                redirect('KelolaMateri');
            
        
    }

}

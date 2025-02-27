<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }

  public function index()
  {
    $data['title'] = 'Login';
    if ($this->session->userdata('email') == '') {
      $this->load->view('auth/header', $data);
      $this->load->view('auth/login');
      $this->load->view('auth/footer');
    } else {
      if ($this->session->userdata('role') == 1) {
        redirect('Admin');
      } else {
        redirect('Siswa');
      }
    }
  }

  public function login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->Auth_model->get_user_by_email($email);

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data = [
          'id' => $user['id'],
          'email' => $user['email'],
          'nama' => $user['nama'],
          'role' => $user['role']
        ];
        $this->session->set_userdata($data);
        if ($user['role'] == 1) {
          redirect('Admin');
        } else {
          redirect('Siswa');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
        redirect('Auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
      redirect('Auth');
    }
  }

  public function register()
  {
    $data['title'] = 'Register';
    $this->load->view('auth/header', $data);
    $this->load->view('auth/register');
    $this->load->view('auth/footer');
  }

  public function registration()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_akun.email]', [
      'is_unique' => 'This email has already been registered!'
    ]);
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Passwords do not match!',
      'min_length' => 'Password is too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password1]');

    if ($this->form_validation->run('registration') == false) {
      $data['title'] = 'Register';
      $this->load->view('auth/header', $data);
      $this->load->view('auth/register');
      $this->load->view('auth/footer');
    } else {
      $email = htmlspecialchars($this->input->post('email', true));
      $nama = htmlspecialchars($this->input->post('nama', true));
      $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
      $role = 0;

      $this->Auth_model->register_user($email, $nama, $password, $role);
      $idSiswa = $this->Auth_model->getIdAkun($email, $nama, $password);
      $this->Auth_model->RegisterNilai($idSiswa);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please login.</div>');
      redirect('Auth');
    }
  }
  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('nama');
    $this->session->unset_userdata('role');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
    redirect('Auth');
  }

  public function backLogin()
  {
    redirect('Auth');
  }
}

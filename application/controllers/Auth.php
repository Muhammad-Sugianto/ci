<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function login_user()
    {
        // Your reCAPTCHA secret key
        $recaptchaSecretKey = '6LcNk0AoAAAAANi6a4lqi6XVQEaUguOSEsaV37t0';

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus Diisi!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            $recaptchaResponse = $this->input->post('g-recaptcha-response');

            // Verify reCAPTCHA response
            $recaptchaVerify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecretKey}&response={$recaptchaResponse}");
            $recaptchaData = json_decode($recaptchaVerify);

            if (!$recaptchaData->success) {
                // reCAPTCHA verification failed
                $this->session->set_flashdata('error', 'RECAPTCHA verification failed. Please try again !');
                redirect(base_url('auth/login_user'));
            } else {
                // reCAPTCHA verification succeeded
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user_data = $this->user_login->login($username, $password);

                if ($user_data) {
                    // Login berhasil, arahkan ke halaman yang sesuai
                    if ($user_data['level'] == 'admin') {
                        redirect('admin/dashboard');  // Ganti 'admin/dashboard' dengan rute aktual ke dashboard admin
                    } else {
                        redirect('user/dashboard');   // Ganti 'user/dashboard' dengan rute aktual ke dashboard pengguna
                    }
                } else {
                    // Login gagal, tampilkan pesan kesalahan
                    $this->session->set_flashdata('error', 'Login failed. Please check your credentials and try again.');
                    redirect(base_url('auth/login_user'));
                }
            }
        }

        $data = array(
            'title' => 'Login User',
        );
        $this->load->view('v_login_user', $data, FALSE);
    }

    public function logout()
    {
        // Hapus semua data sesi
        $this->session->sess_destroy();

        // Alihkan ke halaman login atau halaman lain yang sesuai
        redirect('auth/login_user');
    }
}

<?php defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/register');
    }

    public function register()
    {
        // Memuat library form validation
        $this->load->library('form_validation');

        try {
            //code...
            // Jika validasi berhasil, proses pendaftaran
            // Ambil data dari formulir
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT); // Hash password sebelum menyimpan
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $company = $this->input->post('company');
            $phone = $this->input->post('phone');
            $role = $this->input->post('role');

            // Data untuk dimasukkan ke database
            $data = array(
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'first_name' => $firstname,
                'last_name' => $lastname,
                'company' => $company,
                'phone' => $phone,
                'active' => 1,
                'role' => $role
            );

            // Insert data ke dalam tabel pengguna (users)
            $this->db->insert('users', $data);

            // Redirect ke halaman login atau tampilkan pesan sukses
            $this->session->set_flashdata('message', 'Registration successful. Please login.');
            return redirect('/auth/login'); // Ganti 'login' dengan URL halaman login yang sesuai
        } catch (\Throwable $th) {
            //throw $th;
            var_dump($th);
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        //cara sediakn data session dlm database
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //cara amik data dari session yg atas ni
        echo 'Selamat Datang ' . $data['user']['name'];
    }
}

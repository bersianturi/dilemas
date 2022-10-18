<?php
class Datasiswa extends CI_Controller
{

    public function index()
    {

        $this->load->view('view-form-datasiswa');
    }

    public function cetak()
    {
        $data = [
            'namasiswa' => $this->input->post('namasiswa'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'tmplahir' => $this->input->post('tmplahir'),
            'alamat' => $this->input->post('alamat'),
            'jnskelamin' => $this->input->post('jnskelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('view-datasiswa', $data);
    }
}
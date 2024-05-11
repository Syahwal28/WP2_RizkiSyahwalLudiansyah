<?php
class Dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_dlemas');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 
        'required[min_length[3]',['required'=> 'Nama siswa Harus Diisi', 'min_length'=> 'Nama Terlalu pendek']);
      
        $this->form_validation->set_rules('nis', 'NIS', 
        'required[min_length[3]',['required'=> 'NIS Harus Diisi', 'min_length'=> 'NIS Terlalu pendek']);

        $this->form_validation->set_rules('kelas', 'Kelas', 
        'required[min_length[3]',['required'=> 'Kelas Harus Diisi', 'min_length'=> 'Kelas Terlalu pendek']);

        $this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 
        'required[min_length[3]',['required'=> 'Tanggal Lahir Harus Diisi', 'min_length'=> 'Tanggal Lahir Terlalu pendek']);
        
        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 
        'required[min_length[3]',['required'=> 'Tempat Lahir Harus Diisi', 'min_length'=> 'Tempat Lahir Terlalu pendek']);

        $this->form_validation->set_rules('alamat', 'Alamat', 
        'required[min_length[3]',['required'=> 'Alamat Harus Diisi', 'min_length'=> 'Alamat Terlalu pendek']);

        $this->form_validation->set_rules('jenis', 'Jenis', 
        'required',['required'=> 'Jenis Kelamin Harus Diisi']);
        
        $this->form_validation->set_rules('agama', 'Agama', 
        'required',['required'=> 'Agama Harus Diisi']);
        
        if ($this->form_validation->run() !=true) {
            $this->load->view('view_form_dlemas');
        }else{
            $data=[
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'jenis' => $this->input->post('jenis'),
                'agama' => $this->input->post('agama')
            ];     
        $this->load->view('view_data_dlemas', $data);
        }
    }
}
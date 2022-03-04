<?php

class About extends Controller
{
    public function index($n = 'Dzaky faishalariq', $nama2 = 'Dzaky', $perkerjaan = 'Mahasiswa', $umur = 19)
    {
        $data = [
            'nama' => $n,
            'nama2' => $nama2,
            'perkerjaan' => $perkerjaan,
            'umur' => $umur
        ];
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}

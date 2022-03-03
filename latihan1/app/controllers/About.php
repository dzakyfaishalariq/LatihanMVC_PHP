<?php

class About
{
    public function index($nama = 'Dzaky faishalariq', $perkerjaan = 'Mahasiswa')
    {
        echo "Nama saya " . $nama . " dan saya " . $perkerjaan;
    }
    public function page()
    {
        echo "About/Page";
    }
}

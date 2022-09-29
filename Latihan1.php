<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar web programming";
        // $this->load->view('view-latihan');
    }

    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->Model_latihan1->penjumlahan($nil1, $nil2);

        $this->load->view('view-latihan', $data);
        // $hasil = $this->Model_latihan1->penjumlahan($nil1, $nil2);
        // echo "Hasil penjumlahan dari " . $nil1 . " + " . $nil2 . " = " . $hasil;
    }
}

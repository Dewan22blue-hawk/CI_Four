<?php

namespace App\Controllers;

use App\Models\Model_latihan1;

class Latihan extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Model_latihan1(); // Ganti dengan model yang sesuai
    }
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        // return view('welcome_message');
    }
    public function penjumlahan($n1, $n2)
    // {
    //     $this->model('Model_latihan1');
    //     $result = $this->Model_latihan1->jumlah->jumlah($n1, $n2);
    //     echo "Hasil dari penjumlahan tersebut dari " . $n1 . "+" . $n2 . "adalah" . $result;
    // }
    {
        $result = $this->model->jumlah($n1, $n2);
        echo "Hasil dari penjumlahan tersebut dari " . $n1 . "+" . $n2 . " adalah " . $result;
    }
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        $data['nama'] = 'Denny Irawan';
        return view('contact', $data);
    }
    public function faqs()
    {
        $data['data_faqs'] = [
            [
                'question' => 'Apa itu Codeigniter?',
                'answer' => 'Codeigniter adalah framework untuk membuat web'
            ],
            [
                'question' => 'Siapa yang membuat Codeiginter?',
                'answer' => 'CI awalnya dibuat oleh Ellislab'
            ],
            [
                'question' => 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',
                'answer' => 'Codeigniter versi 4.0.4'
            ]
        ];

        return view('faqs', $data);
    }
    public function page()
    {
        return view('page');
    }
}

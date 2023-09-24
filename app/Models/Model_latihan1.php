<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_latihan1 extends Model
{
    //membuat variable untuk menampung nilai
    // public $nilai1, $nilai2, $hasil;
    // //method penjumlahan
    // public function jumlah($n1 = null, $n2 = null)
    // {
    //     $this->nilai1 = $nil1;
    //     $this->nilai2 = $nil2;
    //     $this->hasil = $this->nilai1 + $this->nilai2;
    //     return $this->hasil;
    // }
    // Method penjumlahan
    public function jumlah($nilai1 = null, $nilai2 = null)
    {
        if ($nilai1 === null || $nilai2 === null) {
            return null; // Atau tindakan lain sesuai kebutuhan Anda saat parameter kosong
        }

        $hasil = $nilai1 + $nilai2;
        return $hasil;
    }
}

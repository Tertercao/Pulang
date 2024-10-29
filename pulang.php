<?php
    class Ce {
        public $nama;
        public $umur;
        public $kerjaan;

        public function info($nama, $umur, $kerjaan) {
            $this->nama = $nama;
            $this->umur = $umur;
            $this->kelas = $kelas;
        }
    }

    $rizky = new Ce("kyy", "19", "Mahasiswa");

    echo "Nama: ". $rizky->nama . "<br>";
    echo "Umur: ". $rizky->umur . "<br>";
    echo "Kelas: ". $rizky->kelas . "<br>";
?>
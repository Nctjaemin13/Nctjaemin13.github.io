<?php

class Induk
{
    public $nilaiRandom;
    public function __construct($jumlah)
    {
        $this->nilaiRandom = $jumlah;
    }
    public function total()
    {
        $total = 0;
        foreach ($this->nilaiRandom as $angka) {
            $total += $angka;
        }
        return $total;
    }
    public function rata_rata()
    {
        $jumlahNilai = count($this->nilaiRandom);
        $total = $this->total();
        return $total / $jumlahNilai;
    }
    public function NilaiTerendah()
    {
        $nilaiTerendah = $this->nilaiRandom[0];
        foreach ($this->nilaiRandom as $nilai) {
            if ($nilai < $nilaiTerendah) {
                $nilaiTerendah = $nilai;
            }
        }
        return $nilaiTerendah;
    }
    public function NilaiTertinggi()
    {
        $nilaiTertinggi = $this->nilaiRandom[0];
        foreach ($this->nilaiRandom as $nilai) {
            if ($nilai > $nilaiTertinggi) {
                $nilaiTertinggi = $nilai;
            }
        }
        return $nilaiTertinggi;
    }
    public function baGanjil()
    {
        $a = $this->nilaiRandom[0];
    
        foreach ($this->nilaiRandom as $val) {
            if ($val % 2 == 1) {
                $a++;
            }
        }
        return $a;
    }
    public function baGenap()
    {
        $b = $this->nilaiRandom[0];
        foreach ($this->nilaiRandom as $val) {
            if ($val % 2 == 0) {
                $b++;
            }
        }
        return $b;
    }
}
class Anak extends Induk
{
    public function __construct()
    {
        $nilaiRandom = [];
        for ($kim = 0; $kim < 50; $kim++) {
            $nilaiRandom[] = rand(1, 300);
        }
        parent::__construct($nilaiRandom);
    }
}
$taehyng = new Anak(50);
echo "Nilai Random: " . implode(", ", $taehyng->nilaiRandom);
echo "</br>";
echo "Total: " . $taehyng->total();
echo "</br>";
echo "Rata - rata: " . $taehyng->rata_rata();
echo "</br>";
echo "Nilai tertinggi: " . $taehyng->NilaiTertinggi();
echo "</br>";
echo "Nilai terendah: " . $taehyng->NilaiTerendah();
echo "</br>";
echo "Banyaknya bilangan ganjil : " . $taehyng->baGanjil();
echo "</br>";
echo "Banyaknya bilangan genap : " . $taehyng->baGenap();

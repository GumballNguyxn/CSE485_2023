<?php
class Songs
{
    private $ma_bviet ;
    private $ten_bhat;
    private $ten_tloai;
    private $tomtat;
    private $ten_tgia;

    public function __construct($ma_bviet, $ten_bhat, $ten_tloai, $tomtat, $ten_tgia)
    {   
        $this->ma_bviet = $ma_bviet ;
        $this->ten_bhat = $ten_bhat;
        $this->ten_tloai = $ten_tloai;
        $this->tomtat = $tomtat;
        $this->ten_tgia = $ten_tgia;
    }
    public function getMaBaiViet()
    {
        return $this->ma_bviet;
    }
    public function getTenBhat()
    {
        return $this->ten_bhat;
    }


    public function setTenBhat($ten_bhat)
    {
        $this->ten_bhat = $ten_bhat;
    }


    public function getTenTloai()
    {
        return $this->ten_tloai;
    }


    public function setTenTloai($ten_tloai)
    {
        $this->ten_tloai = $ten_tloai;
    }


    public function getTomtat()
    {
        return $this->tomtat;
    }


    public function setTomtat($tomtat)
    {
        $this->tomtat = $tomtat;
    }


    public function getTenTgia()
    {
        return $this->ten_tgia;
    }


    public function setTenTgia($ten_tgia)
    {
        $this->ten_tgia = $ten_tgia;
    }
}

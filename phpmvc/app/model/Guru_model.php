<?php
class Guru_model
{
    protected $guru = [
        "Pak Ivan",
        "Pak Labib",
        "Bu estri",
        "Bu Wulan",
        "Bu Novi"
    ];

    public function getAllGuru()
    {
        return $this->guru;
    }
}
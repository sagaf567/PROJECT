<?php

class guru extends Controller
{
    public function index(){
        $data = [
            "judul" => "Data Guru",
            "guru" => $this->model("Guru_model")->getAllGuru()
        ];
        $this->view('template/header', $data);
        $this->view('guru/index', $data);
        $this->view('template/footer');
        return $this->view("guru/index", $data);
    }
}
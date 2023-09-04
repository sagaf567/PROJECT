<?php
class Blog_model
{
    private $blog = [
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "model"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "view"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "controller"
        ]
        ];
        private $table = 'data_siswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
        public function getAllBlog()
        {
            return $this->blog;
        }
        public function tambahData($data)
        {
            $query = " INSERT INTO siswa VALUES('', :nama, :jenis_kelamin, :alamat )";
            $this->db->query($query);
            $this->db->bind('nama' , $data['nama']);
            $this->db->bind('jenis_kelamin' , $data['jenis_kelamin']);
            $this->db->bind('alamat' , $data['alamat']);
            $this->db->execute();
            return $this->db->rowCount();
            }
}
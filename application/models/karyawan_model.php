<?php defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $karyawan_id;
    public $name;
    public $address;
    public $telp;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["karyawan_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->karyawan_id = uniqid();
        $this->name = $post["name"];
        $this->address = $post["address"];
        $this->telp = $post["telp"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->karyawan_id = $post["id"];
        $this->name = $post["name"];
        $this->address = $post["address"];
        $this->telp = $post["telp"];
        $this->db->update($this->_table, $this, array('karyawan_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("karyawan_id" => $id));
    }
}

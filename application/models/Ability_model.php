<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ability_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('ability');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('ability', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama         = $post["nama"];
        $this->keterangan   = $post["keterangan"];
        $this->db->insert('ability', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->nama         = $post["nama"];
        $this->keterangan   = $post["keterangan"];
        $this->db->update('ability', $this, array('id' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('ability', array("id" => $id));
    }

}
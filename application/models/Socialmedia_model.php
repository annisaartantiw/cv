<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Socialmedia_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            ['field' => 'icon',
            'label' => 'Icon',
            'rules' => 'required'],
            ['link' => 'link',
            'label' => 'link',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        $hasil = $this->db->get('socialmedia');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('socialmedia', ["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->nama         = $post["nama"];
        $this->icon         = $post["icon"];
        $this->link   = $post["link"];
        $this->db->insert('socialmedia', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->nama         = $post["nama"];
        $this->icon         = $post["icon"];
        $this->link   = $post["link"];
        $this->db->update('socialmedia', $this, array('id' => $post['id']));        
    }
    public function delete($id)
    {
        return $this->db->delete('socialmedia', array("id" => $id));
    }
}
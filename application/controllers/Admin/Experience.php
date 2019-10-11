<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Experience extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("experience_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["experience"] = $this->experience_model->getAll();
        $this->load->view("admin/experience/list", $data);
    }
    public function add()
    {
        $experience = $this->experience_model;
        $validation = $this->form_validation;
        $validation->set_rules($experience->rules());
        if ($validation->run()) {
            $experience->save();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil ditambahkan');
            redirect(site_url('admin/experience'));
        }
        $this->load->view("admin/experience/new_form");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/experience');
       
        $experience = $this->experience_model;
        $validation = $this->form_validation;
        $validation->set_rules($experience->rules());
        
        if ($validation->run()) {
            $experience->update();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil dirubah');            
            redirect(site_url('admin/experience'));
            
        }
        $data["experience"] = $experience->getById($id);
        if (!$data["experience"]) show_404();
        
        $this->load->view("admin/experience/edit_form", $data);
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->experience_model->delete($id)) {
            redirect(site_url('admin/experience'));
        }
    }
}
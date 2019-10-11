<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Socialmedia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("socialmedia_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["socialmedia"] = $this->socialmedia_model->getAll();
        $this->load->view("admin/socialmedia/list", $data);
    }

    public function add()
    {
        $socialmedia = $this->socialmedia_model;
        $validation = $this->form_validation;
        $validation->set_rules($socialmedia->rules());

        if ($validation->run()) {
            $socialmedia->save();
            $this->session->set_flashdata('success', 'Data Socialmedia Berhasil ditambahkan');
            redirect(site_url('admin/socialmedia'));
        }

        $this->load->view("admin/socialmedia/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/socialmedia');
       
        $socialmedia = $this->socialmedia_model;
        $validation = $this->form_validation;
        $validation->set_rules($socialmedia->rules());
        
        if ($validation->run()) {
            $socialmedia->update();
            $this->session->set_flashdata('success', 'Data Socialmedia Berhasil dirubah');            
            redirect(site_url('admin/socialmedia'));
            
        }

        $data["socialmedia"] = $socialmedia->getById($id);
        if (!$data["socialmedia"]) show_404();
        
        $this->load->view("admin/socialmedia/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->socialmedia_model->delete($id)) {
            redirect(site_url('admin/socialmedia'));
        }
    }
}
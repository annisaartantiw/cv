<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ability extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ability_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ability"] = $this->ability_model->getAll();
        $this->load->view("admin/ability/list", $data);
    }

    public function add()
    {
        $ability = $this->ability_model;
        $validation = $this->form_validation;
        $validation->set_rules($ability->rules());

        if ($validation->run()) {
            $ability->save();
            $this->session->set_flashdata('success', 'Data Ability Berhasil ditambahkan');
            redirect(site_url('admin/ability'));
        }

        $this->load->view("admin/ability/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ability');
       
        $ability = $this->ability_model;
        $validation = $this->form_validation;
        $validation->set_rules($ability->rules());
        
        if ($validation->run()) {
            $ability->update();
            $this->session->set_flashdata('success', 'Data Ability Berhasil dirubah');            
            redirect(site_url('admin/ability'));
            
        }

        $data["ability"] = $ability->getById($id);
        if (!$data["ability"]) show_404();
        
        $this->load->view("admin/ability/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->ability_model->delete($id)) {
            redirect(site_url('admin/ability'));
        }
    }
}
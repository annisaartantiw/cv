<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("home_model");
        $this->load->model("education_model");
        $this->load->model("portofolio_model");
        $this->load->model("experience_model");
        $this->load->model("ability_model");
        $this->load->model("socialmedia_model");
    }
	public function index()
	{
        $data["home"] = $this->home_model->getAll();
        $data["education"] = $this->education_model->getAll();
        $data["experience"] = $this->experience_model->getAll();
        $data["portofolio"] = $this->portofolio_model->getAll();
        $data["ability"] = $this->ability_model->getAll();
        $data["socialmedia"] = $this->socialmedia_model->getAll();
        //var_dump($data['info']);
		$this->load->view("home", $data);
    }

	public function biodata()
	{
		$this->load->view('biodata');
	}
	public function education()
	{
		$this->load->view('education');
	}
	public function experience()
	{
		$this->load->view('experience');
	}
	public function portofolio()
	{
		$this->load->view('portofolio');
	}
	public function contact()
	{
		$this->load->view('contact');
	}

}



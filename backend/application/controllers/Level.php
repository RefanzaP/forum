<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller
{
    private $folder = 'kategori/';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $this->load->view($this->folder . 'list', $data);
    }

    public function add()
    {
        $data = array();
        $this->load->view($this->folder . 'add', $data);
    }

    public function add_process()
    {
    }

    public function edit()
    {
        $data = array();
        $this->load->view($this->folder . 'edit', $data);
    }

    public function edit_process()
    {
    }

    public function delete()
    {

    }
}

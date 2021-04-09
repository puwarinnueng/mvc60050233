<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
    }

    //โหลดหน้าสมัครสมาชิก
    public function index()
    {
        $this->load->view('css');
        $this->load->view('navbar');
        $this->load->view('main_view');
        $this->load->view('js');
    }

    //เพิ่มข้อมูลเข้า db
    public function adddata()
    {
        $this->main_model->addmember();
        redirect('main/main_view2', 'refresh');
    }

    //แสดงข้อมูลสมาชิกพรรค
    public function member()
    {
        $data['query'] = $this->main_model->showdata();
        $this->load->view('css');
        $this->load->view('navbar');
        $this->load->view('member_view', $data);
        $this->load->view('js');
    }

    //โหลดสมัครสมาชิกหน้าที่2โดย query พรรคที่สมัครรอบแรกออกมา
    public function main_view2()
    {
        $data['query2'] = $this->main_model->showdata2();
        $this->load->view('css');
        $this->load->view('navbar');
        $this->load->view('main_view2', $data);
        $this->load->view('js');
    }

    //ลบข้อมูลสมาชิก
    public function del($id)
    {
        //   print_r($_POST);
        $this->main_model->del($id);
        redirect('main/member', 'refresh');
    }

    //โหลดหน้า random การ vote
    public function vote()
    {
        $data['query3'] = $this->main_model->vote();
        $this->load->view('css');
        $this->load->view('navbar');
        $this->load->view('vote', $data);
        $this->load->view('js');
    }

    //เพิ่มข้อมูลการrandom vote เข้า db
    public function addvote()
    {
        $this->main_model->addvote();
        redirect('main/votefinal', 'refresh');
    }

    
    //แสดงหน้าคะแนนทุกคน และคะแนนรวม
    public function votefinal()
    {
        $data['query4'] = $this->main_model->votefinal();
        $data['query5'] = $this->main_model->votefinal2();
        $this->load->view('css');
        $this->load->view('navbar');
        $this->load->view('vote_final', $data);
        $this->load->view('js');
    }
}

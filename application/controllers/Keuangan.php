<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model("Proyek_model");
    }

    public function index()
    {
        $data['title'] = 'Daftar Pengeluaran RAB';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['getidrab'] = $this->Proyek_model->groupbyidrab()->result_array();
        $data['rab1'] = $this->Proyek_model->getpekerjaan1('001')->result_array();
        $data['rab2'] = $this->Proyek_model->getpekerjaan2('002')->result_array();
        $data['rab3'] = $this->Proyek_model->getpekerjaan3('003')->result_array();
        $data['rab4'] = $this->Proyek_model->getpekerjaan4('004')->result_array();
        $data['rab5'] = $this->Proyek_model->getpekerjaan5('005')->result_array();
        $data['rab6'] = $this->Proyek_model->getpekerjaan6('006')->result_array();
        $data['rab7'] = $this->Proyek_model->getpekerjaan7('007')->result_array();
        $data['rab8'] = $this->Proyek_model->getpekerjaan8('008')->result_array();
        $data['rab9'] = $this->Proyek_model->getpekerjaan9('009')->result_array();
        $data['rab10'] = $this->Proyek_model->getpekerjaan10('010')->result_array();
        $data['rab11'] = $this->Proyek_model->getpekerjaan11('011')->result_array();
        $data['rab12'] = $this->Proyek_model->getpekerjaan12('012')->result_array();
        $data['rab13'] = $this->Proyek_model->getpekerjaan13('013')->result_array();
        $data['rab14'] = $this->Proyek_model->getpekerjaan14('014')->result_array();


        $data['totalrab1'] = $this->Proyek_model->getpekerjaantotal1('001')->row_array();
        $data['totalrab2'] = $this->Proyek_model->getpekerjaantotal2('002')->row_array();


        // dead($data['totalrab1']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/index', $data);
        $this->load->view('templates/footer');
    }
}

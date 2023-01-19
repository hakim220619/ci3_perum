<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model("Proyek_model");
        $this->load->model("detailpekerjaan_model");
    }

    public function index()
    {
        $data['title'] = 'Daftar Pengeluaran RAB';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['getidrab'] = $this->Proyek_model->groupbyidrab()->result_array();
        $data['detailpekerjaan'] = $this->detailpekerjaan_model->pekerjaanjoin('001');

        $data['rab1'] = $this->detailpekerjaan_model->pekerjaanjoin('001');
        $data['rab2'] = $this->detailpekerjaan_model->pekerjaanjoin('002');
        $data['rab3'] = $this->detailpekerjaan_model->pekerjaanjoin('003');
        $data['rab4'] = $this->detailpekerjaan_model->pekerjaanjoin('004');
        $data['rab5'] = $this->detailpekerjaan_model->pekerjaanjoin('005');
        $data['rab6'] = $this->detailpekerjaan_model->pekerjaanjoin('006');
        $data['rab7'] = $this->detailpekerjaan_model->pekerjaanjoin('007');
        $data['rab8'] = $this->detailpekerjaan_model->pekerjaanjoin('008');
        $data['rab9'] = $this->detailpekerjaan_model->pekerjaanjoin('009');
        $data['rab10'] = $this->detailpekerjaan_model->pekerjaanjoin('010');
        $data['rab11'] = $this->detailpekerjaan_model->pekerjaanjoin('011');
        $data['rab12'] = $this->detailpekerjaan_model->pekerjaanjoin('012');
        $data['rab13'] = $this->detailpekerjaan_model->pekerjaanjoin('013');
        $data['rab14'] = $this->detailpekerjaan_model->pekerjaanjoin('014');


        $data['totalrab1'] = $this->Proyek_model->getpekerjaantotal1('001')->row_array();
        $data['totalrab2'] = $this->Proyek_model->getpekerjaantotal2('002')->row_array();
        $data['totalrab3'] = $this->Proyek_model->getpekerjaantotal3('003')->row_array();
        $data['totalrab4'] = $this->Proyek_model->getpekerjaantotal4('004')->row_array();
        $data['totalrab5'] = $this->Proyek_model->getpekerjaantotal5('005')->row_array();
        $data['totalrab6'] = $this->Proyek_model->getpekerjaantotal6('006')->row_array();
        $data['totalrab7'] = $this->Proyek_model->getpekerjaantotal7('007')->row_array();
        $data['totalrab8'] = $this->Proyek_model->getpekerjaantotal8('008')->row_array();
        $data['totalrab9'] = $this->Proyek_model->getpekerjaantotal9('009')->row_array();
        $data['totalrab10'] = $this->Proyek_model->getpekerjaantotal10('0010')->row_array();
        $data['totalrab11'] = $this->Proyek_model->getpekerjaantotal11('0011')->row_array();
        $data['totalrab12'] = $this->Proyek_model->getpekerjaantotal12('0012')->row_array();
        $data['totalrab13'] = $this->Proyek_model->getpekerjaantotal13('0013')->row_array();
        $data['totalrab14'] = $this->Proyek_model->getpekerjaantotal14('0014')->row_array();


        $data['totalraball'] = $this->Proyek_model->getpekerjaantotalall()->row_array();



        // dead($data['totalrab1']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/index', $data);
        $this->load->view('templates/footer');
    }
}
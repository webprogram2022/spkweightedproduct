<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Get_data');
        $this->load->model('M_alternatif');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['active1'] = 'active';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['title'] = 'Weighted Product';
        $data['titlePage'] = 'Data Testing';
        $data['kriteria'] = $this->Get_data->GetData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/inputDataKriteria', $data);
        $this->load->view('templates/footer', $data);
    }

    public function kriteria()
    {
        $data['active1'] = '';
        $data['active2'] = 'active';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';
        $data['title'] = 'Weighted Product';
        $data['titlePage'] = 'Kriteria';
        $data['kriteria'] = $this->Get_data->GetData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/kriteria', $data);
        $this->load->view('templates/footer', $data);
    }


    public function dashboard()
    {
        $data['active1'] = 'active';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';
        $data['title'] = 'Weighted Product';
        $data['titlePage'] = 'Dashboard';
        $data['kriteria'] = $this->Get_data->GetData();
        $data['total'] = $this->M_alternatif->hitung();
        $data['totalData'] = $this->M_alternatif->sumData();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahBobotKriteria()
    {
        $id = $_GET['id'];
        $data['active1'] = '';
        $data['active2'] = 'active';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';
        $data['title'] = 'Weighted Product';
        $data['titlePage'] = 'Kriteria';
        $data['data'] = $this->db->get_where('kriteria', ['id' => $id])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahBobotKriteria', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahBobot()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'kode_kriteria' => htmlspecialchars($this->input->post('kode_kriteria', true)),
            'nama_kriteria' => htmlspecialchars($this->input->post('nama_kriteria', true)),
            'bobot_kriteria' => htmlspecialchars($this->input->post('bobot_kriteria', true)),
            'atribut_kriteria' => htmlspecialchars($this->input->post('atribut_kriteria', true)),
        ];
        $this->Get_data->ubahData($id, $data, 'kriteria');
        redirect('admin/kriteria');
    }

    public function proses()
    {
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = 'active';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['title'] = 'Weighted Product';
        $data['titlePage'] = 'Proses Perhitungan';

        $data['kriteria'] = $this->Get_data->GetData();
        $data['alternatif'] = $this->Get_data->Alter();
        $data['total'] = $this->M_alternatif->hitung();
        $data['totalS'] = $this->M_alternatif->totalS();
        $data['pBobot'] = $this->M_alternatif->pBobot();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses', $data);
        $this->load->view('templates/footer', $data);
    }



    public function alternatif()
    {
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = 'active';
        $data['active5'] = '';

        $data['title'] = 'Weighted Product';
        $data['titlePage'] = 'Alternatif';
        $data['kriteria'] = $this->Get_data->GetData();
        $data['alternatif'] = $this->Get_data->Alter();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/dataAlter', $data);
        $this->load->view('templates/footer', $data);
    }



    public function tambahAlternatif()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'type' => htmlspecialchars($this->input->post('type', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'b1' => htmlspecialchars($this->input->post('b1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'b2' => htmlspecialchars($this->input->post('b2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'b3' => htmlspecialchars($this->input->post('b3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'b4' => htmlspecialchars($this->input->post('b4', true)),
            'c5' => htmlspecialchars($this->input->post('c5', true)),
            'b5' => htmlspecialchars($this->input->post('b5', true)),
        ];

        $this->db->insert('alternatif', $data);
        redirect('admin/alternatif');
    }

    public function hapusAlternatif()
    {
        $id = $_GET['id'];
        $this->db->delete('alternatif', ['id' => $id]);
        redirect('admin/alternatif');
    }

    public function ubahAlter()
    {
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = 'active';
        $data['active5'] = '';

        $id = $_GET['id'];

        $data['title'] = 'Ubah Alternatif';
        $data['titlePage'] = 'Ubah Alternatif';

        $data['data'] = $this->db->get_where('alternatif', ['id' => $id])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahAlter', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubah()
    {
        $id = ['id' => $this->input->post('id', true)];

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'type' => htmlspecialchars($this->input->post('type', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'b1' => htmlspecialchars($this->input->post('b1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'b2' => htmlspecialchars($this->input->post('b2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'b3' => htmlspecialchars($this->input->post('b3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'b4' => htmlspecialchars($this->input->post('b4', true)),
            'c5' => htmlspecialchars($this->input->post('c5', true)),
            'b5' => htmlspecialchars($this->input->post('b5', true)),
        ];

        $this->Get_data->ubahData($id, $data, 'alternatif');
        redirect('admin/alternatif');
    }

    public function ubahPassword()
    {
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = 'active';

        $data['title'] = 'Weighted Product';
        $data['titlePage'] = 'Ubah Password';

        $this->form_validation->set_rules('password', 'Paswword', 'required|trim');
        $this->form_validation->set_rules('password2', 'Paswword2', 'required|trim');
        $this->form_validation->set_rules('password3', 'Paswword3', 'required|trim|matches[password2]', [
            'matches' => 'Password dont match!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/ubahPassword', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->proses_password();
        }
    }

    private function proses_password()
    {
        $password1 = htmlspecialchars($this->input->post('password', true));
        $password2 = htmlspecialchars($this->input->post('password2', true));
        $password3 = htmlspecialchars($this->input->post('password3', true));
        $password = $this->db->get('admin')->result_array();

        $where = [
            'id' => $password[0]['id']
        ];

        $data = [
            'username' => 'admin',
            'password' => $password2
        ];
        if ($password1 == $password[0]['password']) {
            if ($password2 == $password3) {
                $this->M_user->ubah_password($where, $data, 'admin');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Telah Berubah !</div>');
                redirect('admin/ubahPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Harus Sama !</div>');
                redirect('admin/ubahPassword');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
            redirect('admin/ubahPassword');
        }
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['alternatif'] = $this->M_alternatif->get_alternatif();
        $data['total'] = $this->M_alternatif->hitung();


        $this->load->view('admin/exportLaporan', $data);

        $paper_size = 'A4';
        $oremtation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $oremtation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_laptop.pdf", ['attachment' => 0]);
    }

    public function export()
    {
        $data['alternatif'] = $this->M_alternatif->get_alternatif();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/exportXls', $data);
    }

    public function exportAlt()
    {
        $data['alternatif'] = $this->M_alternatif->get_alternatif();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/exportAlt', $data);
    }
}

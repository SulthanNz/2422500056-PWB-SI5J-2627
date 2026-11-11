<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspedisi056_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('ekspedisi056_model');
    }

    public function index()
    {
        $data['list_ekspedisi'] = $this->ekspedisi056_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/ekpedisi056/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_ekspedisi()
    {
        $data['title'] = 'Tambah Ekspedisi';

        $this->form_validation->set_rules('nama_ekspedisi_056', 'Nama Ekspedisi', 'required');
        $this->form_validation->set_rules('jenis_layanan_056', 'Jenis Layanan', 'required');
        $this->form_validation->set_rules('tarif_per_kg_056', 'Tarif per kg', 'required|numeric');
        $this->form_validation->set_rules('status_056', 'Status', 'required');
        if ($this->form_validation->run() !== FALSE) {
            $this->_simpan_ekspedisi();
        } else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/ekpedisi056/tambah_ekpedisi');
            $this->load->view('administrator/templates/footer');
        }
    }

    private function _simpan_ekspedisi()
    {
        $data = [
            'nama_ekspedisi_056' => ucwords($this->input->post('nama_ekspedisi_056')),
            'jenis_layanan_056' => $this->input->post('jenis_layanan_056'),
            'tarif_per_kg_056' => $this->input->post('tarif_per_kg_056'),
            'status_056' => $this->input->post('status_056')
        ];
        $simpan = $this->ekspedisi056_model->tambah($data);
        if ($simpan) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
              </svg>
              <div>
                Berhasil menambahkan ekspedisi!!
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
              </svg>
              <div>
                Gagal menambahkan ekspedisi!!
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect('admin/ekspedisi');
    }

    public function ubah_ekspedisi($id)
    {
        // check dulu apakah id dengan ekspedisi ada?
        $ekspedisi = $this->ekspedisi056_model->get_by_id($id);
        if ($ekspedisi) {
            $this->form_validation->set_rules('nama_ekspedisi_056', 'Nama Ekspedisi', 'required');
            $this->form_validation->set_rules('jenis_layanan_056', 'Jenis Layanan', 'required');
            $this->form_validation->set_rules('tarif_per_kg_056', 'Tarif per kg', 'required|numeric');
            $this->form_validation->set_rules('status_056', 'Status', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->_ubah_ekspedisi($id);
            } else {
                $data['title'] = 'Ubah Ekspedisi';
                $data['ekspedisi'] = $ekspedisi;
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/ekpedisi056/ubah_ekpedisi', $data);
                $this->load->view('administrator/templates/footer');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Ekspedisi tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/ekspedisi');
        }
    }

    private function _ubah_ekspedisi($id)
    {
        $data = [
            'nama_ekspedisi_056' => ucwords($this->input->post('nama_ekspedisi_056')),
            'jenis_layanan_056' => $this->input->post('jenis_layanan_056'),
            'tarif_per_kg_056' => $this->input->post('tarif_per_kg_056'),
            'status_056' => $this->input->post('status_056')
        ];
        $ubah = $this->ekspedisi056_model->ubah($data, $id);
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil mengubah ekspedisi!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Gagal mengubah ekspedisi!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect('admin/ekspedisi');
    }

    public function hapus_ekspedisi($id)
    {
        // check apakah ada ekspedisi
        $ekspedisi = $this->ekspedisi056_model->get_by_id($id);
        if ($ekspedisi) {
            $hapus = $this->ekspedisi056_model->hapus($id);
            if ($hapus) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        Berhasil menghapus ekspedisi!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ');
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        Gagal menghapus ekspedisi!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ');
            }
            redirect('admin/ekspedisi');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Ekspedisi tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/ekspedisi');
        }
    }
}
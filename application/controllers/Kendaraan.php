<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('GoodsModel', 'Kendaraan');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }

    public function Index() {
        $data['Kendaraan'] = $this->db->get('kendaraan')->result();

        $this->load->view('templates/admin_header');
        $this->load->view('kendaraan/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function Create() {
        // Config form validation
        $config = array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required|min_length[5]'
            ),
            array(
                'field' => 'spesifikasi',
                'label' => 'Spesifikasi',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'brand',
                'label' => 'Brand',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'transmisi',
                'label' => 'Transmisi',
                'rules' => 'trim|required|min_length[5]'
            ),
            array(
                'field' => 'stok',
                'label' => 'Stok',
                'rules' => 'trim|required|min_length[1]'
            ),
            array(
                'field' => 'price',
                'label' => 'Harga',
                'rules' => 'trim|required|min_length[5]'
            )
        );

        // Set rules of form validation libraries
        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header');
            $this->load->view('kendaraan/create');
            $this->load->view('templates/admin_footer');
        } else { 
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'spesifikasi' => $this->input->post('spesifikasi', TRUE),
                'brand' => $this->input->post('brand', TRUE),
                'transmisi' => $this->input->post('transmisi', TRUE),
                'stok' => $this->input->post('stok', TRUE),
                'price' => $this->input->post('price', TRUE)
            );

            $this->Kendaraan->Store($data);

            redirect('kendaraan');
        }
    }

    public function Edit($id = NULL) {
        if($id == NULL) {
            redirect('kendaraan');
        }

        $kendaraan = $this->Kendaraan->Find($id);

        if($kendaraan) {
            // Konfigurasi form validation
            $config = array(
                array(
                    'field' => 'nama',
                    'label' => 'Nama',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'spesifikasi',
                    'label' => 'Spesifikasi',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'brand',
                    'label' => 'Brand',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'transmisi',
                    'label' => 'Transmisi',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'stok',
                    'label' => 'Stok',
                    'rules' => 'trim|required|min_length[1]'
                ),
                array(
                    'field' => 'price',
                    'label' => 'Harga',
                    'rules' => 'trim|required|min_length[5]'
                )
            );

            // Set aturan form validation
            $this->form_validation->set_rules($config);

            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/admin_header');
                $this->load->view(
                    'kendaraan/edit',
                    array(
                        'data' => $kendaraan
                    )
                );
                $this->load->view('templates/admin_footer');
            } else { 
                $data = array(
                    'nama' => $this->input->post('nama', TRUE),
                    'spesifikasi' => $this->input->post('spesifikasi', TRUE),
                    'brand' => $this->input->post('brand', TRUE),
                    'transmisi' => $this->input->post('transmisi', TRUE),
                    'stok' => $this->input->post('stok', TRUE),
                    'price' => $this->input->post('price', TRUE)
                );

                $this->Kendaraan->Update($id, $data);

                redirect('kendaraan');
            }
        } else {

            redirect('kendaraan');
        }
    }

    public function Delete($id = NULL) {
        if($id == NULL) {
            redirect('kendaraan');
        }

        $this->Kendaraan->Destroy($id);

        redirect('kendaraan');
    }
}
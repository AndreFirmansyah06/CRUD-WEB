<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SparePart extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('AccModel', 'SparePart');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }

    public function Index() {
        $data['SparePart'] = $this->db->get('sparepart')->result();

        $this->load->view('templates/admin_header');
        $this->load->view('sparepart/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function Create() {
        // Config form validation
        $config = array(
            array(
                'field' => 'nama1',
                'label' => 'Nama',
                'rules' => 'trim|required|min_length[5]'
            ),
            
            array(
                'field' => 'brand1',
                'label' => 'Brand',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'stok1',
                'label' => 'Stok',
                'rules' => 'trim|required|min_length[1]'
            ),
            array(
                'field' => 'harga1',
                'label' => 'Harga',
                'rules' => 'trim|required|min_length[5]'
            )
        );

        // Set rules of form validation libraries
        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header');
            $this->load->view('sparepart/create');
            $this->load->view('templates/admin_footer');
        } else { 
            $data = array(
                'nama1' => $this->input->post('nama1', TRUE),
                
                'brand1' => $this->input->post('brand1', TRUE),
                'stok1' => $this->input->post('stok1', TRUE),
                'harga1' => $this->input->post('harga1', TRUE)
            );

            $this->SparePart->Store($data);

            redirect('sparepart');
        }
    }

    public function Edit($id_barang = NULL) {
        if($id_barang == NULL) {
            redirect('sparepart');
        }

        $sparepart = $this->SparePart->Find($id_barang);

        if($sparepart) {
            // Konfigurasi form validation
            $config = array(
                array(
                    'field' => 'nama1',
                    'label' => 'Nama',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'brand1',
                    'label' => 'Brand',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'stok1',
                    'label' => 'Stok',
                    'rules' => 'trim|required|min_length[1]'
                ),
                array(
                    'field' => 'harga1',
                    'label' => 'Harga',
                    'rules' => 'trim|required|min_length[5]'
                )
            );

            // Set aturan form validation
            $this->form_validation->set_rules($config);

            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/admin_header');
                $this->load->view(
                    'sparepart/edit',
                    array(
                        'data' => $sparepart
                    )
                );
                $this->load->view('templates/admin_footer');
            } else { 
                $data = array(
                    'nama1' => $this->input->post('nama1', TRUE),
                    
                    'brand1' => $this->input->post('brand1', TRUE),
                    'stok1' => $this->input->post('stok1', TRUE),
                    'harga1' => $this->input->post('harga1', TRUE)
                );

                $this->SparePart->Update($id_barang, $data);

                redirect('sparepart');
            }
        } else {

            redirect('sparepart');
        }
    }

    public function Delete($id_barang = NULL) {
        if($id_barang == NULL) {
            redirect('sparepart');
        }

        $this->SparePart->Destroy($id_barang);

        redirect('sparepart');
    }
}
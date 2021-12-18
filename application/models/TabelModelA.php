<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelModelA extends CI_Model {
    public function Store($data) {
        $accessories = $this->db->where('id', $data['id'])->get('accessories')->row();

        if(empty($accessories)) {
            $this->db->insert('accessories', array(
                'id_barang' => $data['id'],
                'nama1' => $data['nama']
            ));
        }

        return $this->db->affected_rows();
    }
}
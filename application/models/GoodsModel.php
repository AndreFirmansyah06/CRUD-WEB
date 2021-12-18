<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GoodsModel extends CI_Model {
    public function Store($data) {
        $this->db->insert('kendaraan', $data);

        return $this->db->affected_rows();
    }

    public function Find($id) {
        return $this->db->where('id', $id)
            ->get('kendaraan')
            ->row();
    }

    public function Update($id, $data) {
        $this->db->where('id', $id)
            ->update('kendaraan', $data);

        return $this->db->affected_rows();
    }

    public function Destroy($id) {
        $this->db->where('id', $id)
            ->delete('kendaraan');

        return $this->db->affected_rows();
    }
   
}
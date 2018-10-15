<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Am extends CI_Model {
    function insert_data($tabel, $data) {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }
    function update_data($tabel, $data, $where) {
        $update = $this->db->update($tabel, $data, $where);
        return $update;
    }
    function delete_data($tabel, $where) {
        $delete = $this->db->delete($tabel, $where);
        return $delete;
    }

}



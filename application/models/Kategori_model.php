<?php

class Kategori_model extends CI_Model {

        public function get_all()
        {
                $query = $this->db->get('kategori');
                return $query->result_array();
        }

}
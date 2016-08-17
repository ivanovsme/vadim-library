<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_library extends CI_Model {

        public function __construct() {
            parent::__construct();
        }

    public function getAuthors() {

        $sql = "SELECT author_id,author_name FROM author";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    
    public function getBooks($author) {
        $sql = "SELECT `book` FROM `books` WHERE `author_id` = $author";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>
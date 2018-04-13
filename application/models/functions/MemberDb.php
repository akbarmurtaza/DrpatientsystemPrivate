<?php
    class MemberDb extends CI_Model
    {
        function getAllRecords($n)
        {
            $this->load->database();
            $this->db->select('*');
            $q = $this->db->get('members');
        }
    }
?>

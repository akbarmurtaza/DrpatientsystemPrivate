<?php
    class InternattendanceDb extends CI_Model
    {
        function getAllRecords($n)
        {
            $this->load->database();
            $this->db->select('*');
            $q = $this->db->get('interneeattendance');
        }
    }
?>

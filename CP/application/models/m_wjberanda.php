<?php
    class m_wjberanda extends CI_Model{

    function input_data($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function getNav()
    {
    return $this->db->query("SELECT * from tbl_nav_bar ")->result();  
    }
    

}
?>
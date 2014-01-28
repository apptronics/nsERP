<?php
/*
 * Customer_model
 * 고객정보 
  *
 * @author ks.moon
 */
class Customer_model extends MY_Model 
{
 
    function __construct()
    {       
        parent::__construct();
    }
 
    function gets(){
        // return $this->db->query("SELECT * FROM ns_customer")->result();
        // return $this->db->query("SELECT * FROM ns_customer")->result_array();
        return $this->db->get('customer')->result();
    }
 
    function get($customer_id){
        // 값이 하나일때는 row()함수를 사용한다
        return $this->db->get_where('customer', array('id'=>$customer_id))->row();
    }
}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */
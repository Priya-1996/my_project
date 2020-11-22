<?php
class MyModel extends CI_Model
{
	function saverecords($reg_data)
	{
		$q=$this->db->insert("signup",$reg_data);
		if($q)
		{
			return true;
		}
		else{
			return false;
		}
	}
	function search($search)
	{
		$this->db->like('pname',$search);
		$q=$this->db->get('productlist');
		return $q->result();

	}
	function login($email,$password)
	{
		$this->db->select("*");
		$this->db->from('signup');
		$q=$this->db->where('email',$email,'password',$password);
		if($q)
		{
			return true;
		}
		else{
			return false;
		}
	}
	function product_list($data)
	{
		$q=$this->db->insert("productlist",$data);
		if($q)
		{
			return true;
		}
		else{
			return false;
		}
	}
	function display()
	{
		$this->db->select('*');
		$this->db->from('productlist');
		$q=$this->db->get();
		if($q->num_rows()>0)
		{
			return $q->result_array();
		}
		else{
			return false;
		}
	}
	function editdata($id)
	{
		$this->db->select('*');
		$this->db->from('productlist');
		$this->db->where('id',$id);
		$q=$this->db->get();
		if($q->num_rows()>0)
		{
			return $q->result_array();
		}
		else{
			return false;
		}
	}
	function update_product($id,$data)
	{
		$this->db->where('id',$id);
		if($this->db->update("productlist",$data))
		{
			return true;
		}
		else{
			return false;
		}
	}
	function deldata($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('productlist'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
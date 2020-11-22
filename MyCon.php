<?php
class MyCon extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('MyModel');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('signup');
		if($this->input->post('Signup'))
		{
			$fname=$this->input->post('fname');
			$lname=$this->input->post('lname');
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			$reg_data=array('fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 'password'=>$password);
			$result= $this->MyModel->saverecords($reg_data);
			if($result==false)
			{
				echo "Sorry!!! Something went wrong";
			}
			else{
				redirect('MyCon/login');
			}
		}
	}
	public function searchname()
	{
		$searchname=$this->input->post('pname');
		$data['result']=$this->MyModel->searchname($searchname);
		$this->load->view('search_display',$data);
	}
	public function searchdate()
	{
		$searchdate=$this->input->post('date');
		$data['result']=$this->MyModel->searchdate($searchdate);
		$this->load->view('search_display',$data);
	}
	public function login()
	{
		$this->load->view('login');
		if($this->input->post('Login'))
		{
			$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$result=$this->MyModel->login($email,$password);
		if($result==false)
			{
				echo "Sorry!!! Something went wrong";
			}
			else{
				redirect('MyCon/display');
			}
		}
	}
	public function product_list()
	{
		$this->load->view('product_detail');
		if($this->input->post('Add'))
		{
			$pname=$this->input->post('pname');
			$price=$this->input->post('price');
			$availability=$this->input->post('available');
			$filename=$_FILES['image']['name'];
			$tempname=$_FILES['image']['tmp_name'];
			$pimage="images/".$filename;
			move_uploaded_file($tempname,$pimage);
			$pdate=$this->input->post('date');
			$data=array('pname'=>$pname, 'price'=>$price, 'available'=>$availability,'image'=>$pimage, 'createdate'=>$pdate);
			$result= $this->MyModel->product_list($data);
			if($result==false)
			{
				echo "Sorry!!! Something went wrong";
			}
			else{
				redirect('MyCon/display');
			}
		}
	}
	public function display()
	{
		$result['data']=$this->MyModel->display();
		if($result)
		{
			$this->load->view('product_display',$result);
		}
		else{
			echo "Failed to display the content";
		}
	}
	public function editdata()
	{
		$id=$this->input->get('id');
		$result['data']=$this->MyModel->editdata($id);
		$this->load->view('update_product',$result);
		if($this->input->post('Update'))
		{
			$pname=$this->input->post('pname');
			$price=$this->input->post('price');
			$availability=$this->input->post('available');
			$filename=$_FILES['image']['name'];
			$tempname=$_FILES['image']['tmp_name'];
			$pimage="images/".$filename;
			move_uploaded_file($tempname,$pimage);
			$pdate=$this->input->post('date');
			$data=array('pname'=>$pname, 'price'=>$price, 'available'=>$availability,'image'=>$pimage, 'createdate'=>$pdate);
			$result= $this->MyModel->update_product($id,$data);
			redirect('MyCon/display');
		}
	}
	public function deletedata()
	{
		$id=$this->input->get('id');
		if($this->MyModel->deldata($id))
		{
			redirect('MyCon/display');
		}
		else
		{
			echo "failed";
		}
	}
}
?>
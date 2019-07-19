<?php
class Books extends CI_Model{
	public function book_list()
	{
		$query=$this->db
			->SELECT('NAME,PRICE,IMG_NAME,id')
			->FROM('books')
			->get();
		$result = $query->result();
		return $result;
	}
	public function create_user($data)
	{
		echo "<script>console.log('in the model');</script>"; 
		return $this->db->insert('users',$data);
	}
	public function login_check($uid,$pw)
	{
		$q = $this->db->
				where(['username'=>$uid,'password'=>$pw])->
						get('users');
		if($q->num_rows())
		{
			$email = $this->db
							->where(['username'=>$uid])
							->get('users')->result();

			$this->session->set_userdata('email',$email[0]->email);
			echo $this->session->userdata('email');

			return true;
		}
		else
		{
			return false;
		}
	}
	public function feedback($data)
	{
		return $this->db
						->INSERT('feedback',$data);
	}

	public function add_to_cart($product)
	{
		$i=0;
		
		for($i=0;$i<sizeof($product)/3;$i++) {
						$data = array(
									
							        'BOOK_NAME' => $product["bname".$i],
							        'B_QTY' => $product["bqty".$i],
							        'T_PRICE' => $product["tprice".$i],
							        'username'=>$this->session->userdata('user_id')
							);
						$this->db->insert('cart',$data);
						unset($data['BOOK_NAME']);
						unset($data['B_QTY']);
						unset($data['T_PRICE']);
		}
		return true;
	}

	public function add_to_order($order)
	{
		print_r($order);
		$six_digit_random_number = mt_rand(1000000, 9999999);
		$date = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + 5, date('Y')));
			for($i=0;$i<(sizeof($order)-8)/3;$i++) {
						$data = array(
							        'BOOK_NAME' => $order["bname".$i],
							        'B_QTY' => $order["bqty".$i],
							        'T_PRICE' => $order["tprice".$i],
							        'exp_del' => $date,
							        'ORDER_ID'=>$six_digit_random_number ,
							        'username'=>$this->session->userdata('user_id'),
							);
						$this->db->insert('orders',$data);
						unset($data['BOOK_NAME']);
						unset($data['B_QTY']);
						unset($data['T_PRICE']);
		}
				

				$data = array(
									'ORDER_ID'=>$six_digit_random_number ,
							        'F_NO' => $order['F_NO'],
							        'S_NAME' => $order['S_NAME'],
							        'CITY' => $order['CITY'],
							        'STATE' => $order['STATE'],
							        'P_CODE' => $order['P_CODE'],
							        'LANDMARK' => $order['LANDMARK'],
							        'addtype' => $order['addtype'],
							);
					$this->db->insert('address_of_order',$data);	
	}
			
	public function get_order()
	{
		$query = $this->db->SELECT('*')
						->FROM('orders')
						->WHERE('username',$this->session->userdata('user_id'))
						->get();
		 return $result = $query->result();
		
	}
		public function get_cart()
	{
		$query = $this->db->SELECT('*')
						->FROM('cart')
						->WHERE('username',$this->session->userdata('user_id'))
						->get();
		 return $result = $query->result();
		
	}	
	public function delete_ord($arr)
	{
		return $this->db->delete('orders',$arr);
							
	}
	public function delete_crt($arr)
	{
		return $this->db->delete('cart',$arr);
							
	}
}
?>
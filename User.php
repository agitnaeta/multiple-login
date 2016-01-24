<?php 
	/**
	* this is model user
	*/
	class User extends CI_Model
	{
		
		public function auth($u,$p)
		{
			$this->db->where('username',$u);
			$this->db->where('password',$p);
			return $this->db->get('user');
		}
	}

<?<?php 

class login_model extends CI_Model
{
	public function login($data)
	{ 
		$this -> db -> select('id_usuario, correo, password');
		$this -> db -> from('usuarios');
		$this -> db -> where('correo', $data['correo']);
		$this -> db -> where('password', $data['password']);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}else
		{
			return false;
		}
	}

	//Leer los datos para devolverlas en variable de sesion
	public function user_information($data) 
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('correo', $data);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return $query->result();
		} else 
		{
			return false;
		}
	}
}
?>
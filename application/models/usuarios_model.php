<?php

class usuarios_model extends CI_Model
{

	//Consultar todo
	public function verTodo()
	{

		$consulta=$this->db->query("SELECT * FROM usuarios;");

		return $consulta->result();
	}

	//INSERTAR USUARIO
	public function agregarUsuario($nombre,$apellido,$telefono,$genero,$correo,$password)
	{
		$consulta=$this->db->query("SELECT correo FROM usuarios WHERE correo LIKE '$correo'");
		if($consulta->num_rows()==0)
		{
			$consulta=$this->db->query("INSERT INTO usuarios VALUES('$nombre','$apellido','$telefono','$genero','$correo','$password');");
			if($consulta==true)
			{
				return true;
			}else
			{
				return false;
			}
		}else
		{
			return false;
		}
	}

	public function actualizarUsuario($id_usuario,$modificar="NULL",$nombre="NULL",$apellido="NULL",$telefono="NULL",$genero="NULL",$correo="NULL",$password="NULL")
	{
        if($modificar=="NULL")
        {
            $consulta=$this->db->query("SELECT * FROM usuarios WHERE id_usuario = $id_usuario");
            return $consulta->result();
        }else
        {
          $consulta=$this->db->query("UPDATE usuarios SET nombre='$nombre', apellido='$apellido',
              telefono='$telefono', genero='$genero', correo='$correo', password=$password WHERE id_usuario = $id_usuario; ");
          if($consulta==true)
          {
              return true;
          }else
          {
              return false;
          }
        }
    }

    public function eliminarUsuario($id_usuario)
    {
       $consulta=$this->db->query("DELETE FROM usuarios WHERE id_usuario=$id_usuario");
       
       if($consulta==true)
       {
           return true;
       }else
       {
           return false;
       }
    }

}

?>
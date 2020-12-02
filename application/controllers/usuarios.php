<?php

class usuarios extends CI_Controller
{
	public function __construct() 
	{
        //llamamos al constructor de la clase padre
		parent::__construct();


        //llamo o incluyo el modelo
		$this->load->model("usuarios_model");
	}

	
	 //controlador por defetco
	public function index()
	{
        //array asociativo con la llamada al metodo
        //del modelo
		$usuarios["ver"]=$this->usuarios_model->verTodo();

        //cargo la vista y le paso los datos
		$this->load->view("usuarios_view",$usuarios);
	}

    //controlador para añadir
	public function agregar()
	{     
        //compruebo si se ha enviado submit
		if($this->input->post("submit"))
		{
        //llamo al metodo add y le paso los datos
			$add=$this->usuarios_model->agregarUsuario(
				$this->input->post("nombre"),
				$this->input->post("apellido"),
				$this->input->post("telefono"),
				$this->input->post("genero"),
				$this->input->post("correo"),
				$this->input->post("password")
			);
		}
		if($add==true)
		{
            //Sesion de una sola ejecución
			$this->session->set_flashdata('correcto', 'Usuario añadido correctamente');
			echo "agregado";
		}else{
			$this->session->set_flashdata('incorrecto', 'Usuario no se añadió correctamente');
			echo "No agregado";
		}

        //redirecciono la pagina a la url por defecto
		//redirect(base_url());
	}

	 //controlador para modificar al que
    //le paso por la url un parametro
	public function actualizar($id_usuario)
	{
		if(is_numeric($id_usuario))
		{
			$datos["actualizarUsuario"]=$this->usuarios_model->actualizarUsuario($id_usuario);

			//Cargo vista de modificar
			$this->load->view("modificar_view",$datos);
			if($this->input->post("submit"))
			{
				$mod=$this->usuarios_model->mod(
					$id_usuario,
					$this->input->post("submit"),
					$this->input->post("nombre"),
					$this->input->post("apellido"),
					$this->input->post("telefono"),
					$this->input->post("genero"),
					$this->input->post("correo"),
					$this->input->post("password")
				);
				if($mod==true)
				{
                    //Sesion de una sola ejecución
					$this->session->set_flashdata('correcto', 'Usuario modificado correctamente.');
				}else
				{
					$this->session->set_flashdata('incorrecto', 'Usuario no modificado.');
				}
				redirect(base_url());
			}
		}else
		{
			redirect(base_url());
		}
	}

	//Controlador para eliminar
    public function eliminar($id_usuario)
    {
    	$titulo['titulo']= 'Borrado - RRB';//Crear variable de nombre a la página
    	$this->load->view("plantillasistema/header",$titulo);
    	
    	$usuarios["ver"]=$this->usuarios_model->verTodo();
        if(is_numeric($id_usuario))
        {
          $eliminar=$this->usuarios_model->eliminarUsuario($id_usuario);
          if($eliminar==true)
          {
          	  $this->load->view("alertas/borradoexitosousuario");
          	  $this->load->view("sistema/usuarios",$usuarios);

              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente.');

          }else
          {
          	  $this->load->view("alertas/errors");
          	  $this->load->view("sistema/usuarios",$usuarios);
              $this->session->set_flashdata('incorrecto', 'Usuario no eliminado.');
          }
          
        }
        $this->load->view("plantillasistema/footer");
    }




}

?>
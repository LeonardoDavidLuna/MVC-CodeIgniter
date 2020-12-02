<?<?php 

class login extends CI_Controller
{
	
	public function __construct() 
	{
        //llamamos al constructor de la clase padre
		parent::__construct();
        //llamo o incluyo el modelo
		$this->load->model("login_model");
	}

//user_login_process
public function index() 
{
    $titulo['titulo']= 'XD';
	$this->load->view('plantillasistema/header');
      //Valida los campos 
        $this->form_validation->set_rules('correo','correo','required');
        $this->form_validation->set_rules('password','password','required');
        
        if ($this->form_validation->run() == FALSE) 
        {
            if(isset($this->session->userdata['logged_in'])){	
                header('Location:'.base_url().'inicio_view.php');
            }else
            {	
                $this->load->view('alertas/usuarioinexistente');
                $this->load->view('inicio_view');
            }
			
        }else{		
                $data = array(    'correo' => $this->input->post('correo'),
                                'password' => $this->input->post('password'));
				//print_r($data);
                $result = $this->login_model->login($data);
				
                if ($result == TRUE)
                {
                    $correo = $this->input->post('correo');
                    $result = $this->login_model->user_information($correo);
                
                    if ($result != false) 
                    {
                        $session_data = array(
                                                
                                                'correo' => $result[0]->correo,
                                                'id_usuario'=> $result[0]->id_usuario,
                                        );                                        
                        // Pasa el arreglo a la vista
                        $data['titulo']= 'Bienvenido';//Crear variable de nombre a la página
                        $this->session->set_userdata('logged_in', $session_data);    
                        $this->load->view('sistema/bienvenida',$titulo);
                        //header('Location:'.base_url().'sistema/bienvenida');                                    
                       
                    }
                }else{
                    $data = array('error_message' => 'Usuario o Password No válidos.');
                    $this->load->view('inicio_view',$titulo);
                }
        }
        $this->load->view('plantillasistema/footer');
    }

	public function logout() 
	{

        // Elimina los datos de la sesión
		$sess_array = array('correo' => '');
		$this->session->unset_userdata('logged_in', $sess_array);
		//$data['message_display'] = 'La sesión finalizó correctamente.';
        $data['titulo']= 'Bienvenido';//Crear variable de nombre a la página    //

        $this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('inicio_view');
        $this->load->view('plantilla/footer');
	}




}

?>
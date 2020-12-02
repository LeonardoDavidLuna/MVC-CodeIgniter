<?php

class Form extends CI_Controller 
{
        public function __construct() 
        {
        //llamamos al constructor de la clase padre
                parent::__construct();

        //llamo o incluyo el modelo
                $this->load->model("usuarios_model");
        }

        public function index()
        {
                $data['titulo']= 'Registro';//Crear variable de nombre a la página
                $usuarios["ver"]=$this->usuarios_model->verTodo();
                $this->load->view('plantilla/header',$data);//Pasar la variable a una página
                
                //Reglas del formulario
                $this->form_validation->set_rules('nombre', '"Nombre"', 'required');
                $this->form_validation->set_rules('apellido', '"Apellido"', 'required');
                $this->form_validation->set_rules('telefono', '"Teléfono"', 'required[min_length[10]]');
                $this->form_validation->set_rules('genero', '"Genero"', 'required');
                $this->form_validation->set_rules('password', '"Contraseña"', 'required[min_length[5]]');
                $this->form_validation->set_rules('passconf', '"Confirma Contraseña"', 'required[min_length[5]|matches[password]');
                $this->form_validation->set_rules('correo', '"Correo"', 'required');
                
                if ($this->form_validation->run() == FALSE)
                {
                        //Muestro el mensaje de error
                        $this->load->view('alertas/errors');
                        $this->load->view('inicio_view',$usuarios);
                }
                else
                {
                        //Muestro el mensaje de correcto
                        $this->load->view('alertas/formsuccess');
                        $this->load->view('inicio_view');

                        //Inserto en la DB
                        $data = array(
                                'nombre'   => $_POST['nombre'],
                                'apellido' => $_POST['apellido'],
                                'telefono' => $_POST['telefono'],
                                'genero'   => $_POST['genero'],
                                'correo'   => $_POST['correo'],
                                'password' => $_POST['password']
                        );
                        $this->db->insert('usuarios',$data);
                        $this->session->set_flashdata("success","Tu cuenta ha sido creada");
                }

                $this->load->view('plantilla/footer');
        }
}
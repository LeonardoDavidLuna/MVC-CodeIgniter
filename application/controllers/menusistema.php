<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menusistema extends CI_Controller
{
	public function __construct() 
	{
        //llamamos al constructor de la clase padre
		parent::__construct();

        //llamo o incluyo el modelo
		$this->load->model("usuarios_model");
	}
	

	public function usuarios()
	{
        //array asociativo con la llamada al metodo
        //del modelo
		$usuarios["ver"]=$this->usuarios_model->verTodo();

        //cargo la vista y le paso los datos
		$data['titulo']= 'Usuarios';//Crear variable de nombre a la página
		
		$this->load->view('plantillasistema/header',$data);//Pasar la variable a una página
		$this->load->view("sistema/usuarios",$usuarios);
		$this->load->view('plantillasistema/footer');
	}
	




	public function contacto()
	{
		$data['titulo']= 'Contacto';//Crear variable de nombre a la página

		$this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('contacto_view');
		$this->load->view('plantilla/footer');
	}
	public function servicio1()
	{
		$data['titulo']= 'Servicio 1';//Crear variable de nombre a la página

		$this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('servicios/servicio1_view');
		$this->load->view('plantilla/footer');
	}
	public function servicio2()
	{
		$data['titulo']= 'Servicio 2';//Crear variable de nombre a la página

		$this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('servicios/servicio2_view');
		$this->load->view('plantilla/footer');
	}
	public function servicio3()
	{
		$data['titulo']= 'Servicio 3';//Crear variable de nombre a la página

		$this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('servicios/servicio3_view');
		$this->load->view('plantilla/footer');
	}
	public function ayuda()
	{
		$data['titulo']= 'Ayuda';//Crear variable de nombre a la página

		$this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('ayuda_view');
		$this->load->view('plantilla/footer');
	}
	public function prueba()
	{
		$data['titulo']= 'Prueba';//Crear variable de nombre a la página

		$this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('prueba_view');
		$this->load->view('plantilla/footer');
	}
	
	public function registro()
	{
		$data['titulo']= 'Registro';//Crear variable de nombre a la página

		$this->load->model('Usuarios_model','UM',true);

		$this->load->view('plantilla/header',$data);//Pasar la variable a una página
		$this->load->view('logeo/registro_view');
		$this->load->view('plantilla/footer');
	}

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	 
	public function index()
	{
		$this->load->view('headerInicio_vista');
		$this->load->model('principal_modelo');
		$this->load->helper('file');
		$this->load->view('principal_vista');
		$this->load->view('footer_vista');
	}
	
	public function categorias($idCategoria)
	{
		$datos=array('categoria'=>$idCategoria);
		$this->load->view('headerCategorias_vista');
		$this->load->helper('file');
		$this->load->model('principal_modelo');
		$this->load->view('categorias_vista',$datos);
		$this->load->view('footer_vista');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
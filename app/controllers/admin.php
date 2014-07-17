<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

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
		$this->load->view('headerLogin_vista');
		$this->load->model('tiendas_modelo');
		$this->load->view('login_vista');
		$this->load->helper('file');
		$this->load->view('footer_vista');
	}
	
	
	
	public function logout()
	{
	
		$datos= array(
				'login'=>false);
	
	          $this->db->where('login',true);
              $this->db->update('usuarios',$datos); 
			  
              redirect(base_url());
	}
	
public function enviarEmail($nombreUsuario)
{
		$this->load->helper('email');
	    $this->db->select('correo,contraseña');
        $this->db->from('usuarios');
        $this->db->where('nombreUsuario',$nombreUsuario);
	    $resultado=$this->db->get();
		
  if($resultado->num_rows()>0)
  {  
    foreach($resultado->result() as $fila)
    {
	  if(valid_email($fila->correo))
	  {
	    $this->load->library('email');

        $this->email->from('dookiechump@gmail', 'Your Name');
        $this->email->to($fila->correo); 

        $this->email->subject('Contraseña de usuario');
        $this->email->message('Tu contraseña es: '.$fila->contraseña);	
      
        if(!$this->email->send())
	    {
		  echo 'Hubo un error en el envio del email :/ <br/>';
		  echo $this->email->print_debugger();
	    }
	    else
	    {
		  ob_start(); 
          header("refresh:5; url =".site_url()."/admin"); 
   
          echo 'Contrase&ntilde;a enviada correctamente <br/>';
          echo 'Espere un momento y sera redireccionado...'; 

          ob_end_flush();  
		  
	    }
	  }#if de correo valido
	
	  else
	  {
		  ob_start(); 
           header("refresh:5; url =".site_url()."/admin");
   
          echo 'El correo registrado del usuario <b>"'.$nombreUsuario.'"</b> no es valido <br/>';
		  echo 'Espere un momento y sera redireccionado...'; 

          ob_end_flush(); 
	  }#else correo no valido
	  }#if de foreach
	}#if de verificacion d eexistencia del usuario
  else {
		ob_start(); 
           header("refresh:5; url =".site_url()."/admin"); 
   
          echo 'El usuario ingresado, no existe en la base de datos <br/>';
		  echo 'Espere un momento y sera redireccionado...'; 

          ob_end_flush();
       }#else de verificacion de existencia de usuario
}
	
	public function tiendas($usuario)
	{   
	    $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {
		  $datos=array('usuario'=>$fila->idUsuario);
	      $this->load->view('headerAdmin_vista',$datos);
		  $this->load->model('tiendas_modelo');
		  $this->load->view('principalAdmin_vista');  
		 }
		 else
		 {
			redirect('admin');
		 }
		}
		
}
	
	public function banners($usuario)
	{
	 $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->load->view('banners_vista');
		 }
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function eliminarBanner($id,$usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->tiendas_modelo->eliminarBanner($id);
		$this->load->view('banners_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function subirBanner($usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->load->view('subirBanner_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function categorias($usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->load->view('categoriasAdmin_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function crearCategoria($usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->load->view('crearCategoria_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function categoriaCreada($usuario)
	{   
	$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
	    $datos=array('usuario'=>$usuario);
		$this->load->model('tiendas_modelo');
		$this->load->view('categoriaHecho_vista',$datos);
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function crearTienda($usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->load->view('crearTienda_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function eliminarTienda($id,$usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->tiendas_modelo->id=$id;
		$this->load->view('eliminarTienda_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function eliminarCategoria($id,$usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->tiendas_modelo->eliminarCategoria($id);
		$this->load->view('categoriasAdmin_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	
	public function tiendaEliminada($id,$usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
		$this->load->model('tiendas_modelo');
		$this->tiendas_modelo->id=$id;
		$this->load->view('tiendaEliminada_vista',$datos);
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function editarTienda($id,$usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
	    $this->load->view('headerAdmin_vista',$datos);
		$this->load->model('tiendas_modelo');
		$this->tiendas_modelo->id=$id;
		$this->load->view('editarTienda_vista');
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	public function tiendaEditada($id,$usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
		$this->load->model('tiendas_modelo');
		$this->tiendas_modelo->id=$id;
		$this->load->view('tiendaEditada_vista',$datos);
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}
	
	function do_upload($usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
		$this->db->select_max('idTienda');
        $noTiendas = $this->db->get('tiendas');
		
		
		foreach ($noTiendas->result() as $fila)
        {
		    $config['file_name']=($fila->idTienda+1).'.png';
		}
		
		$config['upload_path'] = './img/logos de tiendas';
		$config['allowed_types'] = 'png';
		$config['overwrite'] = true;
		$config['max_size']	= '0';
		$config['max_width']  = '205';
		$config['max_height']  = '205';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->load->view('registroFallido_vista',$datos);
		}
		else
		{
			$this->load->model('tiendas_modelo');
			$this->tiendas_modelo->crearTienda();
		    $this->load->view('registroHecho_vista',$datos);
           		
		}
		}
		 else
		 {
			redirect('admin');
		 }
		}
		
	}
	
	function do_upload_banner($usuario)
	{
		$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
		$datos=array('usuario'=>$usuario);
		$this->db->select_max('idBanner');
        $noBanners = $this->db->get('banners');
		
		
		foreach ($noBanners->result() as $fila)
        {
		    $config['file_name']=($fila->idBanner+1).'.png';
		}
		
		$config['upload_path'] = './img/banners';
		$config['allowed_types'] = 'png';
		$config['overwrite'] = true;
		$config['max_size']	= '0';
		$config['max_width']  = '540';
		$config['max_height']  = '270';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->load->view('bannerNoSubido_vista',$datos);
		}
		else
		{
			$this->load->model('tiendas_modelo');
			$this->tiendas_modelo->subirBanner();
		    $this->load->view('bannerSubido_vista',$datos);
           		
		}
		}
		 else
		 {
			redirect('admin');
		 }
		}
		
	}
	
	function do_upload_E($idTienda,$usuario)
	{
     
	  $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario',$usuario);
	    $consulta=$this->db->get();
	   
	    foreach($consulta->result() as $fila)
		{
		 if($fila->login==true)
		 {	
	  if($_FILES['userfile']['name']=='')
	  {
		  $datos=array('usuario'=>$usuario);
		  $this->load->model('tiendas_modelo');
		  $this->tiendas_modelo->editarTienda($idTienda);
		  $this->load->view('tiendaEditada_vista',$datos);
	  }
	  else
	  {
		
		$datos=array('usuario'=>$usuario);
		$config['file_name']=$idTienda.'.png';
		$config['upload_path'] = './img/logos de tiendas';
		$config['allowed_types'] = 'png';
		$config['overwrite'] = true;
		$config['max_size']	= '0';
		$config['max_width']  = '205';
		$config['max_height']  = '205';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->load->view('editadoFallido_vista',$datos);
		}
		else
		{
			
			$this->load->model('tiendas_modelo');
			$this->tiendas_modelo->editarTienda($idTienda);
		    $this->load->view('tiendaEditada_vista',$datos);
           		
		}
	  }
		}
		 else
		 {
			redirect('admin');
		 }
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
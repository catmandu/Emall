<?

class Tiendas_modelo extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
    function buscarUsuario()
    {			
		return $this->db->get('usuarios');
    }
	
    function crearTienda()
    {
       
	    $this->db->select_max('idTienda');
        $noTiendas = $this->db->get('tiendas');
		
		foreach ($noTiendas->result() as $fila)
        { 
		$datos= array(
		        'idTienda'=>$fila->idTienda+1,
				'nombreTienda'=>$this->input->post('nombreTienda'),
				'etiquetas'=>$this->input->post('etiquetasTienda'),
				'categoria'=>$this->input->post('categoriaTienda'),
				'logo'=>$fila->idTienda+1,
				'url'=>$this->input->post('urlTienda'));
		}
		$this->db->insert('tiendas',$datos);
		
    }
	
	
	
	function crearCategoria()
    {   
	   
		
		$this->db->trans_start();
		$this->db->select_max('idCategoria');
        $noCategoria = $this->db->get('categorias');
		
		foreach ($noCategoria->result() as $fila)
        { 
		$datos= array(
		        'idCategoria'=>$fila->idCategoria+1,
				'nombreCategoria'=>$this->input->post('nombreCategoria'));
		}
				
		$this->db->insert('categorias',$datos);
		$this->db->trans_complete();
		
		
		if($this->db->trans_status() === FALSE)
		{
			$error=1;
		}
		else{
		  $error=0;
		}
		return $error;
    }
	
	function subirBanner()
    {   
	   
		$this->db->trans_start();
		$this->db->select_max('idBanner');
        $noBanners = $this->db->get('banners');
		
		foreach ($noBanners->result() as $fila)
        { 
		$datos= array(
		        'idBanner'=>$fila->idBanner+1,
				'imagen'=>$fila->idBanner+1);
		}
				
		$this->db->insert('banners',$datos);
		$this->db->trans_complete();
		
		
		if($this->db->trans_status() === FALSE)
		{
			$error=1;
		}
		else{
		  $error=0;
		}
		return $error;
    }
	
	function mostrarCategorias()
    {			
		return $this->db->get('categorias');
    }
	
	function mostrarBanners()
    {			
		return $this->db->get('banners');
    }
	
	function mostrarTiendaSeleccionada($idTienda)
    {			
	    $this->db->select('*');
        $this->db->from('tiendas');
		$this->db->join('categorias', 'categorias.idCategoria = tiendas.categoria');
        $this->db->where('idTienda',$idTienda);
		
		return $this->db->get();
		       
    }
	
	function eliminarTienda($idTienda)
    {			
	   $this->db->where('idTienda',$idTienda);
       $this->db->delete('tiendas'); 
    }
	
	function eliminarCategoria($idCategoria)
    {			
	   $this->db->where('idCategoria',$idCategoria);
       $this->db->delete('categorias'); 
    }
	
	function eliminarBanner($idBanner)
    {			
	   $this->db->where('idBanner',$idBanner);
       $this->db->delete('banners'); 
	   unlink('./img/banners/'.$idBanner.'.png');
    }
	
	function editarTienda($idTienda)
    {		
	   $this->db->select('*');
	   $this->db->from('tiendas');
	   $this->db->where('idTienda',$idTienda);
	   $consulta=$this->db->get();
	    echo $this->input->post('userfile');
	foreach($consulta->result() as $fila)
	{
	   if($this->input->post('nombreTiendaNuevo')=="")
	   {
		 $nuevoNombre=$fila->nombreTienda;   
	   }else
	   {
		   $nuevoNombre=$this->input->post('nombreTiendaNuevo');
	   }
	   
	    if($this->input->post('etiquetasTiendaNuevo')=="")
	   {
		   $nuevaEtiqueta=$fila->etiquetas;
	   }else
	   {
		   $nuevaEtiqueta=$this->input->post('etiquetasTiendaNuevo');
	   }
	    if($this->input->post('categoriaTiendaNuevo')==0)
	   {
		   $nuevaCategoria=$fila->categoria;
	   }else
	   {
		   $nuevaCategoria=$this->input->post('categoriaTiendaNuevo');
	   }
	    if($this->input->post('urlTiendaNuevo')=="")
	   {
		   $nuevaUrl=$fila->url;
	   }else
	   {
		   $nuevaUrl=$this->input->post('urlTiendaNuevo');
	   }
	}
	   $datos= array(
				'nombreTienda'=>$nuevoNombre,
				'etiquetas'=>$nuevaEtiqueta,
				'categoria'=>$nuevaCategoria,
				'url'=>$nuevaUrl);
	
	   $this->db->where('idTienda',$idTienda);
       $this->db->update('tiendas',$datos); 
    }
	
	function mostrarTiendas()
    {			
	    $this->db->select('*');
        $this->db->from('tiendas');
        $this->db->join('categorias', 'categorias.idCategoria = tiendas.categoria');
		
		return $this->db->get();
		       
    }
}

?>
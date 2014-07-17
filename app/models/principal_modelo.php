<?

class Principal_modelo extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function mostrarTiendas()
    {			
	    $this->db->distinct();
		return $this->db->get('tiendas');    
    }
	
	function mostrarCategorias()
    {			
		return $this->db->get('categorias');
    }
	
	function mostrarTiendaCategoria($idCategoria)
    {	if($idCategoria==0)
	    {
		   $this->db->select('nombreTienda,logo,url');
           $this->db->from('tiendas');
		   $this->db->join('categorias', 'categorias.idCategoria = tiendas.categoria');
		
		   return $this->db->get();
		}
		
		else
		{
	       $this->db->select('nombreTienda,logo,url');
           $this->db->from('tiendas');
		   $this->db->join('categorias', 'categorias.idCategoria = tiendas.categoria');
           $this->db->where('idCategoria',$idCategoria);
		
		   return $this->db->get();
		}
		       
    }
	
	
}

?>
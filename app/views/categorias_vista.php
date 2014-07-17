</div>
<div class="l-container">
<div class="sidebar" >
<div class="sidebar-header">
Categorías
</div>
<nav class="sidebar-items">
<? 
   $consulta=$this->principal_modelo->mostrarCategorias();
   foreach($consulta->result() as $fila){ $datos=array(
                                                  'categoria'=>$fila->idCategoria); 
												  if($fila->idCategoria!=$categoria){?>
<a href="<?=site_url()?>/principal/categorias/<?=$datos['categoria'];?>" class="sidebar-item"><?=$fila->nombreCategoria?></a>
<? }else{?>
<a href="<?=site_url()?>/principal/categorias/<?=$datos['categoria'];?>" class="categoriaActiva"><?=$fila->nombreCategoria?></a>
<? }}?>
</nav>
</div>
<div>
<div class="stores-grid">
<div class="opaqued-background">&nbsp;</div>
<div class="stores-grid-list">
<!-- ngRepeat: store in stores -->




<? if(isset($categoria)){}else{$categoria=0;}
   $consulta=$this->principal_modelo->mostrarTiendaCategoria($categoria);
   if($consulta->num_rows()>0)
   {
   foreach($consulta->result() as $fila){ ?>

<div class="stores-grid-item" style="width:25%">
<a href="<?=$fila->url?>">
<img src="<?=base_url();?>img/logos de tiendas/<?=$fila->logo?>.png">
</a>
<h2 class="ng-binding">
<?=$fila->nombreTienda?>
</h2>
<p class="ng-binding">

</p>
<a href="<?=$fila->url?>">Leer más</a>
</div>
<? }#foreach
}#if
else
{
?>
<center>
<h2><font color="#FFFFFF" size="+2">No hay tiendas en esta categoria</font></h2>
</center>
<? }?>
</div>
</div>
</div>


</div>

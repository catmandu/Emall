<?
$consulta=$this->tiendas_modelo->mostrarTiendaSeleccionada($this->tiendas_modelo->id);
$atributos= array('name' => 'form1', 'id' => 'form1');
 ?>

<div class="row">
<h2>
Eliminar tienda
</h2>

<label>Nombre</label>
<?
foreach($consulta->result() as $fila)
{?>
<input value="<?=$fila->nombreTienda?>" readonly="readonly" name="nombreTienda" size="50" type="text">
<label>Etiquetas</label><input readonly="readonly" value="<?=$fila->etiquetas?>" name="etiquetasTienda" size="50" type="text">
<label>Categoria</label><input readonly="readonly" value="<?=$fila->nombreCategoria?>"  size="50" type="text">
<br />
<label>Imagen/Logo</label><img src="<?=base_url()?>img/logos de tiendas/<?=$fila->logo?>.png" height="200px" width="200px">
<br/><br/>
<label>Url</label><input readonly="readonly" value="<?=$fila->url?>" size="50" type="text">
<label id="alertaNombre" style="color:#F00;">¿Esta seguro que desea eliminar la tienda?</label>
<a  href="<?=site_url()?>/admin/tiendaEliminada/<?=$fila->idTienda;?>/<?=$usuario?>"><input name="subir" type="button" value="Eliminar"></a><a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>"><input name="subir" type="button" value="Cancelar"></a>
<br /><br /><br />
<? }?>
</div>

</body></html>
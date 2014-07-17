<?
$atributos= array('name' => 'form1', 'id' => 'form1');
 ?>
<script language="javascript" src="<?=base_url()?>js/validacion.js"></script>

<div class="row">
<h2>
Editar tienda
</h2>
<?
$consulta=$this->tiendas_modelo->mostrarTiendaSeleccionada($this->tiendas_modelo->id);
foreach($consulta->result() as $resultado)
{
?>
<?php echo form_open_multipart('admin/do_upload_E/'.$this->tiendas_modelo->id.'/'.$usuario,$atributos);?>
<label><abbr >*</abbr> <font color="#0000CC">Nombre actual:</font> <?=$resultado->nombreTienda?></label><label id="alertaNombre" style="visibility:hidden; color:#F00;"> Debe ingresar este campo</label><input name="nombreTiendaNuevo" size="50" type="text">
<label><font color="#0000CC">Etiquetas actuales:</font> <?=$resultado->etiquetas?></label><input name="etiquetasTiendaNuevo" size="50" type="text">
<div><label><abbr>*</abbr> <font color="#0000CC">Categoria actual:</font> <?=$resultado->nombreCategoria?></label><label id="alertaCategoria" style="visibility:hidden; color:#F00;"> Debe seleccionar una opcion</label><select name="categoriaTiendaNuevo"><option value="0">Seleccione una Categoría</option>
<? 
$consulta=$this->tiendas_modelo->mostrarCategorias();
foreach($consulta->result() as $fila)
{?><option value="<?=$fila->idCategoria;?>"><?=$fila->nombreCategoria;?></option>
<? }?></select></div>
<br />
<div><label><abbr>*</abbr><font color="#0000CC"> Imagen/Logo actual:</font> <img src="<?=base_url()?>img/logos de tiendas/<?=$resultado->logo?>.png" height="200px" width="200px"></label><label id="alertaLogo" style="visibility:hidden; color:#F00;"> Debe seleccionar una imagen</label><input  name="userfile" id="userfile" type="file" size="20"></div>
<br/>
<label><font color="#0000CC">URL actual:</font> <?=$resultado->url?></label><input name="urlTiendaNuevo" size="50" type="url">
<? }?>
<input name="subir" type="submit" value="Editar tienda"><a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>"><input name="subir" type="button" value="Cancelar"></a>
<br/>
<br/>
</form>
</div>

</body></html>
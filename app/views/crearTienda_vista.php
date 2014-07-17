<?
$atribuos= array('name' => 'form1', 'id' => 'form1');
 ?>
<script language="javascript" src="<?=base_url()?>js/validacion.js"></script>
<div class="row">
<h2>
Nueva Tienda
</h2>
<?php echo form_open_multipart('admin/do_upload/'.$usuario,$atribuos);?>
<label><abbr >*</abbr> Nombre</label><label id="alertaNombre" style="visibility:hidden; color:#F00;"> Debe ingresar este campo</label><input placeholder="nombre de la tienda" name="nombreTienda" size="50" type="text">
<label>Etiquetas</label><input placeholder="cocina, automotriz, textil, etc..." name="etiquetasTienda" size="50" type="text">
<div><label><abbr>*</abbr> Categoria</label><label id="alertaCategoria" style="visibility:hidden; color:#F00;"> Debe seleccionar una opcion</label><select name="categoriaTienda"><option value="0">Seleccione una Categoría</option>
<? 
$consulta=$this->tiendas_modelo->mostrarCategorias();
foreach($consulta->result() as $fila)
{?><option value="<?=$fila->idCategoria;?>"><?=$fila->nombreCategoria;?></option>
<? }?></select></div>
<br />
<div><label><abbr>*</abbr> Imagen/Logo</label><label id="alertaLogo" style="visibility:hidden; color:#F00;"> Debe seleccionar una imagen</label><input  name="userfile" type="file" size="20"></div>
<br/>
<label>Url</label><input placeholder="http://www.mitiendita.com"  name="urlTienda" size="50" type="url">
<input name="subir" onclick="validar();" type="button" value="Crear tienda">
</form>

</div>

</body></html>
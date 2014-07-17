
<div id="l-container">
<div class="row">
<a href="<?=site_url()?>/admin/crearTienda/<?=$usuario?>" class="button small success">Crear Tienda</a>
<table>
<thead>
<tr>
<th>Nombre</th>
<th>Categoría</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?
   $consulta=$this->tiendas_modelo->mostrarTiendas();
   
foreach($consulta->result() as $fila)
{?><tr><td><?=$fila->nombreTienda;?></td><td><?=$fila->nombreCategoria;?></td>
<td>
<a href="<?=site_url()?>/admin/editarTienda/<?=$fila->idTienda;?>/<?=$usuario;?>" class="button small">Editar</a>
<a href="<?=site_url()?>/admin/eliminarTienda/<?=$fila->idTienda;?>/<?=$usuario;?>" class="button small alert"  rel="nofollow">Eliminar</a>
</td>
</tr>
<? }?></td>
</tr>

</tbody>
</table>

</div>

</div>
<div id="l-footer">

</div>
<script src="<?=base_url()?>js/shared-4efc5124091f8c5b1343ec2a695c44cc.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/application-de24ed20368270fb89040bde9e965bc5.js" type="text/javascript"></script>

<? echo $this->input->post('usuarioLogin')?>
</body></html>

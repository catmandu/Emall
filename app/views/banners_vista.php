<div id="l-container">
<div class="row">
<a>Banners subidos hasta el momento</a>
<table>
<thead>
<tr>
<th colspan="2"><b>Banner</b></th>
</tr>
</thead>
<tbody>
<?
   $consulta=$this->tiendas_modelo->mostrarBanners();
   
foreach($consulta->result() as $fila)
{?><tr><td><img height="100" width="250" src="<?=base_url('img/banners/'.$fila->imagen.'.png');?>" /></td><td><a href="<?=site_url()?>/admin/eliminarBanner/<?=$fila->idBanner?>/<?=$usuario?>" class="button small alert"  rel="nofollow">Eliminar</a></td>
</tr>
<? }?>
</tbody>
</table>

</div>

</div>
<div id="l-footer">

</div>
<script src="<?=base_url()?>js/shared-4efc5124091f8c5b1343ec2a695c44cc.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/application-de24ed20368270fb89040bde9e965bc5.js" type="text/javascript"></script>





</body></html>
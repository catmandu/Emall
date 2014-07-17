<html>
<head>
<title>Reporte de registro</title>
</head>
<body>

<?
 if($this->tiendas_modelo->crearCategoria()==1)
{	 
?>
<h3>La categoria no se agrego correctamente</h3>
<a href="<?=site_url()?>/admin/crearCategoria/<?=$usuario?>">&nbsp;Intentarlo de nuevo&nbsp;</a>
<a href="<?=site_url()?>/admin/Tiendas/<?=$usuario?>"> &nbsp;Regresar a la pagina principal&nbsp;</a>

<? }else{ ?>
<h3>Categoria agregada correctamete</h3>
<a href="<?=site_url()?>/admin/crearCategoria/<?=$usuario?>">&nbsp;Crear otra categoria &nbsp;</a>
<a href="<?=site_url()?>/admin/Tiendas/<?=$usuario?>"> &nbsp;Regresar a la pagina principal&nbsp;</a>
<? }?>
</body>
</html>
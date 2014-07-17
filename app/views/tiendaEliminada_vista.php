<html>
<head>
<title>Reporte de registro</title>
</head>
<body>

<?
$this->tiendas_modelo->eliminarTienda($this->tiendas_modelo->id);
unlink('./img/logos de tiendas/'.$this->tiendas_modelo->id.'.png');
?>

<h3>Tienda eliminada correctamete</h3>
<a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>"> &nbsp;Regresar a la pagina principal&nbsp;</a>
</body>
</html>
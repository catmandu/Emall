<!DOCTYPE html>
<html lang="en" ng-app="emallclq" class="ng-scope">

<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Emall Colima</title>

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="authenticity_token" name="csrf-param">
<meta content="Tf+2mYQ3ZCaPqMBDoBdTXytCZUuNL91EDTWQ4UYZaRQ=" name="csrf-token">
<link href="<?=base_url()?>css/css.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/shared-67db30c5ef4f0b0f3a3898543e3d61f4.css" media="screen" rel="stylesheet" type="text/css">
<script src="<?=base_url()?>js/custom.modernizr-a6a44595af662b8609659982df558920.js" type="text/javascript"></script><style type="text/css"></style>
<link href="<?=base_url()?>css/admin-a7f4dc53ebf155512622ff6462007704.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>img/icono.png" rel="icon">
<body>
<div id="l-header">
<nav class="top-bar">
<ul class="title-area">
<li class="name">
<h1>
<a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>">Emall Colima - Admin</a>
</h1>
</li>
<li class="toggle-topbar menu-icon">
<a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>">
<span>Menu</span>
</a>
</li>
</ul>

<section class="top-bar-section">
<ul class="left">
<li class="divider"></li>
<li class="has-dropdown">
<a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>">Categorías</a>
<ul class="dropdown"><li class="title back js-generated"><h5><a>« Back</a></h5></li>
<li>
<a href="<?=site_url()?>/admin/categorias/<?=$usuario?>">Mostrar Categorías</a>
</li>
<li>
<a href="<?=site_url()?>/admin/crearCategoria/<?=$usuario?>">Crear Categoría</a>
</li>
</ul>
</li>
<li class="has-dropdown">
<a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>">Tiendas</a>
<ul class="dropdown"><li class="title back js-generated"><h5><a>« Back</a></h5></li>
<li>
<a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>">Mostrar Tiendas</a>
</li>
<li>
<a href="<?=site_url()?>/admin/crearTienda/<?=$usuario?>">Crear Tienda</a>
</li>
</ul>
</li>

<li class="has-dropdown">
<a href="<?=site_url()?>/admin/tiendas/<?=$usuario?>">Banners</a>
<ul class="dropdown"><li class="title back js-generated"><h5><a>« Back</a></h5></li>
<li>
<a href="<?=site_url()?>/admin/banners/<?=$usuario?>">Mostrar Banners</a>
</li>
<li>
<a href="<?=site_url()?>/admin/subirBanner/<?=$usuario?>">Subir Banner</a>
</li>
</ul>
</li>

<li><a href="<?=site_url()?>/admin/logout" data-method="delete" rel="nofollow">Logout</a></li>
</ul>
</section></nav>


</div>

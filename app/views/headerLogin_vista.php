<!DOCTYPE html>
<html lang="en" ng-app="emallclq" class="ng-scope">

<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Emall Colima</title>

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="authenticity_token" name="csrf-param">
<meta content="giXkMg4eC0h5dChPXGOWEmnADUWZF0gS0ttyWJ1IH3A=" name="csrf-token">
<link href="<?=base_url()?>css/css.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/shared-67db30c5ef4f0b0f3a3898543e3d61f4.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/application-fc9405bb4d94a89e44fbe2f4048a31f3.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/index-a93b054dcb291c261707a88a884f8a9d.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/index-c9d74fadf44e5fbb490556a4d05fec4d.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>img/icono.png" rel="icon">

</head>
<?
$datos=array('categoria'=>0);
?>
<body>
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="<?=base_url()?>html fb/xd_arbiter.htm" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="<?=base_url()?>html fb/xd_arbiter(1).htm" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="f1efca4888" frameborder="0" allowtransparency="true" scrolling="no" src="<?=base_url()?>html fb/ping.htm" style="display: none;"></iframe></div></div></div>
<script id="facebook-jssdk" src="<?=base_url()?>js/all.js"></script>

<div id="l-header">
<div class="blue-colors-stripe"></div>
<div class="l-container">
<div class="like-button">
<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-font="arial" data-href="http://emallclq.dev/" data-layout="button_count" data-send="true" data-show-faces="false" data-width="450" fb-xfbml-state="rendered"></div>
</div>
<nav class="main-menu">
<a id="contacto" class="main-menu-item" href="mailto:info@emallclq.com">Contacto</a>
<a id="categorias" class="main-menu-item" href="<?=site_url()?>/principal/categorias/<?=$datos['categoria']?>">Categorías</a>
<a id="inicio" class="main-menu-item" href="<?=base_url()?>">Inicio</a>
</nav>
</div>


</div>
<div id="l-container">
<div class="l-container">
<div class="main-logo">
<img alt="Logo" src="<?=base_url()?>img/logo-651f1a5449c6d0e94dafec4bbd24d0ab.png">
</div>
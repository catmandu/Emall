
<?

        $datos=array('categoria'=>0);

        $visitas=read_file('./cnt/visitas.txt');
		$actualizar=$visitas+1;
		write_file('./cnt/visitas.txt',$actualizar);
		$visitas=read_file('./cnt/visitas.txt');
		$longitud=strlen($visitas);
?>
<div id="l-footer">
<div class="l-container">
<div class="l-top-background">
<img alt="Colima" src="<?=base_url()?>img/colima-ca24ed2e42b687d9fd759299dc2c3a86.png">
</div>
</div>
<div class="l-container last">
<div class="l-footer-item">
<nav class="footer-navigation l-horizontal">
<a href="<?=base_url()?>">Inicio</a>
<a href="<?=site_url()?>/principal/categorias/<?=$datos['categoria']?>">Categorías</a>
<a class="main-menu-item" href="mailto:info@emallclq.com">Contacto</a>
</nav>
<nav class="footer-social-navigation l-horizontal">
<a href="<?=base_url()?>"><img alt="Logo-facebook" src="<?=base_url()?>img/logo-facebook-ca4e907a38ab1f3c45802636f7bd6ebf.png">
</a><a href="<?=base_url()?>"><img alt="Logo-twitter" src="<?=base_url()?>img/logo-twitter-dbc69c4dba8f335b752a2e3e50758d16.png">
</a></nav>
</div>
<div class="l-footer-item">
<nav class="footer-sponsor-logos l-horizontal">
<a href="http://www.itcolima.edu.mx"><img alt="Logo-tec" src="<?=base_url()?>img/logo-tec-96f68ce3461d4a69f24ce65d048fbdeb.png">
</a><a href="http://www.sefome.gob.mx/psefome/"><img alt="Logo-sefome" src="<?=base_url()?>img/logo-sefome-331803ccff2f319b4cf55d0e6c36df3e.png">
</a></nav>
<span class="footer-copyright">© 2013 EmallClq, Colima, Colima, México</span>
</div>
<div class="l-footer-item last">
<div class="visits">
<div class="visits-header">
<span class="visits-header-icon"></span>
visitas
</div>
<div class="visits-numbers l-horizontal">
<?
for ($i=0; $i<$longitud ;$i++)
		{
   ?>     
<div class="visits-number">
<span><?=$visitas{$i};?></span>
</div>
<? }?>
</div>
</div>
</div>
</div>


</div>
<script src="<?=base_url()?>js/shared-4efc5124091f8c5b1343ec2a695c44cc.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/application-99338a6d89a9622f41aaaeda4f91a128.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/index-b00086b2ca7a6909175c28902e709bb6.js" type="text/javascript"></script>
</body></html>
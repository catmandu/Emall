<div id="l-container">
<div class="row">
<h1 class="row">
Nueva categoria
</h1>
<form name="form1" accept-charset="UTF-8" action="<?=site_url()?>/admin/categoriaCreada/<?=$usuario?>" class="simple_form row ng-pristine ng-valid" id="new_category" method="post" novalidate><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="Tf+2mYQ3ZCaPqMBDoBdTXytCZUuNL91EDTWQ4UYZaRQ="></div>
<div class="input string optional category_name"><label class="string optional control-label" for="category_name">Nombre</label><label id="alertaNombre" style="visibility:hidden; color:#F00;"> Debe ingresar este campo</label><input class="string optional" id="category_name" name="nombreCategoria" size="50" type="text"></div>
<input name="commit" onclick="validarCat();" type="button" value="Crear Categoria">
</form>


</div>

</div>
<div id="l-footer">

</div>
<script src="<?=base_url()?>js/shared-4efc5124091f8c5b1343ec2a695c44cc.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/application-de24ed20368270fb89040bde9e965bc5.js" type="text/javascript"></script>
<script language="javascript" src="<?=base_url()?>js/validacion.js"></script>

</body></html>
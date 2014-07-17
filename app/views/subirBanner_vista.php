<?
$atribuos= array('name' => 'form1', 'id' => 'form1');
 ?>
<script language="javascript" src="<?=base_url()?>js/validacion.js"></script>
<div class="row">
<h2>
Nuevo Banner
</h2>
<?php echo form_open_multipart('admin/do_upload_banner/'.$usuario,$atribuos);?>
<div><label><abbr>*</abbr>Banner</label><label id="alertaBanner" style="visibility:hidden; color:#F00;"> Debe seleccionar una imagen</label><input  name="userfile" type="file" size="20"></div>
<br />
<input name="subir" onclick="validarBanner();" type="button" value="Subir Banner">
</form>

</div>

</div>
<div id="l-footer">

</div>
<script src="<?=base_url()?>js/shared-4efc5124091f8c5b1343ec2a695c44cc.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/application-de24ed20368270fb89040bde9e965bc5.js" type="text/javascript"></script>
<script language="javascript" src="<?=base_url()?>js/validacion.js"></script>

</body></html>
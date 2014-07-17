<script language="javascript" src="<?=base_url()?>js/validacion.js"></script>

<div id="l-container">
<h2><b>Iniciar sesion</b></h2>
<br />
<form name="form1" accept-charset="UTF-8" class="new_user ng-pristine ng-valid" id="new_user" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="Tf+2mYQ3ZCaPqMBDoBdTXytCZUuNL91EDTWQ4UYZaRQ="></div>
  <div><label for="usuarioLogin">Usuario</label><br /><label id="alertaUsuario" style="visibility:hidden; color:#F00;"> Debe ingresar este campo</label><br />
  <input autofocus id="contraseñaLogin" name="usuarioLogin" size="30" type="email" value=""></div>
<br />
  <div><label for="passwordLogin">Contraseña</label><br /><label id="alertaPassword" style="visibility:hidden; color:#F00;"> Debe ingresar este campo</label><br />
  <input id="passwordLogin" name="passwordLogin" size="30" type="password"></div>

   <!-- <div><input name="user[remember_me]" type="hidden" value="0"><input id="user_remember_me" name="user[remember_me]" type="checkbox" value="1"> <label for="user_remember_me">Recordarme</label></div> --><br />

  <div><input name="login" onclick="validarLogin();" type="button" value="Sign in"></div>
</form>

 <!-- <a href="http://www.emallclq.com.mx/users/sign_up">Registrarse</a><br> -->
   <br />
   
   
   <form name="form2" method="post">
   <input id="checkUsuario" onchange="recuperar();" type="checkbox">
   <label for="checkUsuario" style="color:#00C;">¿Olvidaste tu contraseña?</label>
   <br> <br>
    <label id="instruccion" for="nombreEmailUsuario" style="visibility:hidden; color:#00C;">Ingresa el nombre de usuario y se mandara al correo registrado</label> 
   <input style="visibility:hidden;" type="text" id="nombreEmailUsuarioId" name="nombreEmailUsuario" />
    <input style="visibility:hidden;" type="button" onclick="enviar();" id="enviarNombreEmailUsuario" value="Enviar contraseña" />
    </form>
</div>
<?
  if(isset($_POST['nombreEmailUsuario']))
  {
	 redirect('admin/enviarEmail/'.$_POST['nombreEmailUsuario']);
  }
  
  if(isset($_POST['usuarioLogin']))
  {
	  
	  $consulta=$this->tiendas_modelo->buscarUsuario();
	  $loginCorrecto=false;
	  foreach($consulta->result() as $fila)
	  {
		  
		  if($fila->nombreUsuario==$_POST['usuarioLogin']&&$fila->contraseña==$_POST['passwordLogin'])
		  {
			  $datos= array(
				'login'=>true);
	          $this->db->where('idUsuario',$fila->idUsuario);
              $this->db->update('usuarios',$datos);        
			  $loginCorrecto=true;
			  break;    
		  }
	  }
	  if($loginCorrecto)
	  {
		  redirect('admin/tiendas/'.$fila->idUsuario);
	  }
	  else
	  {
	    echo "<script language='javascript'> 
             alert('Ingrese con un usuario y contraseña validos'); 
             </script>";
	  }
  }
  
   
  
?>
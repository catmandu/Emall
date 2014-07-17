function validar(){

		if(document.form1.nombreTienda.value ==''){
			document.getElementById("alertaNombre").style.visibility="visible";
			document.form1.nombreTienda.focus();
			return false;
		}else{
			document.getElementById("alertaNombre").style.visibility="hidden";
			if(document.form1.categoriaTienda.value ==0){
			document.getElementById("alertaCategoria").style.visibility="visible";
			document.form1.nombreTienda.focus();
			return false;
			}
			else{
				document.getElementById("alertaCategoria").style.visibility="hidden";
				if(document.form1.userfile.value==''){
			document.getElementById("alertaLogo").style.visibility="visible";
			document.form1.nombreTienda.focus();
			return false;
		    }
			 else{
				 document.getElementById("alertaLogo").style.visibility="hidden";
				 document.form1.submit();
			 }
			}
			
		}

}

function validarBanner(){

	
		if(document.form1.userfile.value==''){
			document.getElementById("alertaBanner").style.visibility="visible";
			document.form1.userfile.focus();
			return false;
		    }
			 else{
				 document.getElementById("alertaBanner").style.visibility="hidden";
				 document.form1.submit();
			 }
}

function validarCat(){

		if(document.form1.nombreCategoria.value ==''){
			document.getElementById("alertaNombre").style.visibility="visible";
			document.form1.nombreCategoria.focus();
			return false;
		}else{
			 document.getElementById("alertaNombre").style.visibility="hidden";
			 document.form1.submit();
		}
}

function validarLogin(){

		if(document.form1.usuarioLogin.value ==''){
			document.getElementById("alertaUsuario").style.visibility="visible";
			document.form1.usuarioLogin.focus();
			return false;
		}else{
			     if(document.form1.passwordLogin.value ==''){
				 document.getElementById("alertaUsuario").style.visibility="hidden";
			     document.getElementById("alertaPassword").style.visibility="visible";
			     document.form1.passwordLogin.focus();
			     return false;
		     }
			 else{
				 document.getElementById("alertaPassword").style.visibility="hidden";
			     document.form1.submit();
			 }
		}
}

function recuperar()
{
	if(document.getElementById("checkUsuario").checked)
	{
		document.getElementById("instruccion").style.visibility="visible";
		document.getElementById("nombreEmailUsuarioId").style.visibility="visible";
		document.getElementById("enviarNombreEmailUsuario").style.visibility="visible";
	}
	else
	{
		document.getElementById("instruccion").style.visibility="hidden";
		document.getElementById("nombreEmailUsuarioId").style.visibility="hidden";
		document.getElementById("enviarNombreEmailUsuario").style.visibility="hidden";
	}
}

function enviar()
{
	if(document.getElementById("nombreEmailUsuarioId").value=="")
	{
		alert('Debes de ingresar un usuario');
	}
	else
	{
		document.form2.submit();
	}
}
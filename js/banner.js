var contador=0;
var cambiar=1;
var timer;
var numeroBanners=0;

function cambiarBanner(noBanners)
{ 
	numeroBanners=noBanners;
	
 if(numeroBanners>0)
 {
	if(contador==0||contador == noBanners)
	{
	    contador=1;
	}
	else
	{
		contador++;
	}
	
		
		if(cambiar==1)
		{
			document.getElementById("banner").style.background="url('./img/banners/"+contador+".png')";
			document.getElementById("banner").style.backgroundRepeat="no-repeat";
			document.getElementById("banner").style.backgroundPosition="center";
			timer=setTimeout("cambiarBanner("+noBanners+")",3000);
		}
		else
		{
			document.getElementById("banner").style.background="url('./img/banners/"+contador+".png')";
			document.getElementById("banner").style.backgroundRepeat="no-repeat";
			document.getElementById("banner").style.backgroundPosition="center";
		}
 }
}

function retroceder()
{
  if(numeroBanners>0)
 {	
	document.getElementById("reanudar").style.visibility="visible";
	if(contador-2>=0)
	{
	  contador=contador-2;
	}
	else
	{
		contador=numeroBanners-1;
	}
	cambiar=0;
	clearTimeout(timer);
	cambiarBanner(numeroBanners);
 }
}

function avanzar()
{
 if(numeroBanners>0)
 {
	document.getElementById("reanudar").style.visibility="visible";
	cambiar=0;
	clearTimeout(timer);
	cambiarBanner(numeroBanners);
 }
}
function reanudar()
{
  if(numeroBanners>0)
  {	
	document.getElementById("reanudar").style.visibility="hidden";
	cambiar=1;
	cambiarBanner(numeroBanners);
  }
}
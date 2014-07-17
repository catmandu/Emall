
<div class="promos-carousel ng-scope">

<style>

#banner
{
	transition-property:all;
	transition-duration: .5s;
    transition-timing-function:ease-out;
	border-radius:20px;
}
#reanudar
{
	color:#00C;
	visibility:hidden;
}
#reanudar:hover
{
	color:#FFF;
	cursor:pointer;
}
</style>
<?
if($this->db->count_all('banners')>0)
{?>
<div id="banner" class="promos-carousel-images" style="background-repeat:no-repeat; background-position:center;">

</div>
<label id="reanudar" onclick="reanudar();" for="banner">Reanudar presentación</label>

<a onclick="retroceder();" class="prev" href="javascript:void(0)">
<span>&nbsp;</span>
</a>
<a onclick="avanzar();" class="next" href="javascript:void(0)" >
<span>&nbsp;</span>
</a>
<? }?>
</div>
</div>

<div style="position:relative; bottom:50px;" class="l-container">
<div class="top-stores">
<div class="opaqued-background">&nbsp;</div>

<?
		
		
        $noTiendas = $this->db->count_all('tiendas');
        $consulta=$this->principal_modelo->mostrarTiendas();
		
		if($noTiendas>4)
		{
		      $num=array();
             reset($num);
             for($i=1;$i<=4;$i++) 
             {
                $num[$i]=rand(1,$noTiendas);
				
                 if($i>1) 
                 {
                  for($x=1; $x<$i; $x++)
                  {
                     if($num[$i]==$num[$x]) 
                     { 
                      $i--; 
                      break; 
                      }
                  }
                }
            }
			
			$tienda1=$consulta->row($num[1]-1);
			$tienda2=$consulta->row($num[2]-1);
			$tienda3=$consulta->row($num[3]-1);
			$tienda4=$consulta->row($num[4]-1);
			
			
			?>
            <table width="100%">
            <tr> 
            <td  style="margin-right:22px; margin-left:22px;" class="stores-grid-item">
              <div  style="max-width:100%;">
            <a href="<?=$tienda1->url?>" target="_blank"><img src="<?=base_url()?>img/logos de tiendas/<?=$tienda1->logo?>.png"></a>
            <h2><?=$tienda1->nombreTienda?></h2>
            <p><?=$tienda1->etiquetas?></p>
            <a href="<?=$tienda1->url?>" target="_blank">Leer más</a></div>
            </td>
            
            <td style="margin-right:22px;" class="stores-grid-item">
            <div  style="max-width:100%;">
            <a href="<?=$tienda2->url?>" target="_blank"><img src="<?=base_url()?>img/logos de tiendas/<?=$tienda2->logo?>.png"></a>
            <h2><?=$tienda2->nombreTienda?></h2>
            <p><?=$tienda2->etiquetas?></p>
            <a href="<?=$tienda2->url?>" target="_blank">Leer más</a></div>
            </td>
            
            <td style="margin-right:22px;" class="stores-grid-item">
             <div style="max-width:100%;">
            <a href="<?=$tienda3->url?>" target="_blank"><img src="<?=base_url()?>img/logos de tiendas/<?=$tienda3->logo?>.png"></a>
            <h2><?=$tienda3->nombreTienda?></h2>
            <p><?=$tienda3->etiquetas?></p>
            <a href="<?=$tienda3->url?>" target="_blank">Leer más</a></div>
            </td>

            <td style="margin-right:1px;" class="stores-grid-item">
            <div style="max-width:100%;">
            <a href="<?=$tienda4->url?>" target="_blank"><img src="<?=base_url()?>img/logos de tiendas/<?=$tienda4->logo?>.png"></a>
            <h2><?=$tienda4->nombreTienda?></h2>
            <p><?=$tienda4->etiquetas?></p>
            <a href="<?=$tienda4->url?>" target="_blank">Leer más</a></div>
            </td>
            </tr>
            </table>
		<? }
		else
		{?> 
           <table width="100%">
            <tr> <?
			foreach($consulta->result() as $fila)
			{
				
?>         
            <td style="margin-right:17px;" class="stores-grid-item">
            <div style="max-width:100%;">
            <a href="<?=$fila->url?>" target="_blank"><img src="<?=base_url()?>img/logos de tiendas/<?=$fila->logo?>.png"></a>
            <h2><?=$fila->nombreTienda?></h2>
            <p><?=$fila->etiquetas?></p>
            <a href="<?=$fila->url?>" target="_blank">Leer más</a></div>
            </td>
       
<? } }?>
</tr>
</table>


<a href="<?=site_url()?>/principal/categorias/0" class="top-stores-more"><span>Ver más</span>
<span class="icon"></span>
</a></div>
</div>

</div>


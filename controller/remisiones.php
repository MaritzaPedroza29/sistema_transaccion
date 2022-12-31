<?php
require_once ("../Alegra_remisiones.php");
require_once ("../model/Remisiones_model.php");
require_once ("../conexion.php");

class Remision{
   public function alegra ()
  {
    $i=0;
    $suma=[];
    echo $i;
    while($i<=90){
      $url = "https://api.alegra.com/api/v1/remissions?order_direction=desc&order_field=id&start=".$i;
      $vector_remisiones=leer_api_alegra($url);
      $cuantos=count($vector_remisiones);
      $suma=array_merge($suma,$vector_remisiones);
          if($cuantos==30) 
              $i+=30;
          else break;
    }
  }
}
?>
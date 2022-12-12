<?php

  /**
  * Funciones 
  *
  * @author Escriba aquí su nombre
  */

  /*
  * Función que devuelve el valor del campo recibido como párametro
  * @param {string} $campo - Nombre del campo a comprobar en el REQUEST
  * @param {string} $valor - Valor del campo recibido como parámetro
  */
  function obtenerValorCampo(string $campo): string{
    // Comprobamos si nos llega el nombre del campo en el REQUEST
    if (!isset($_REQUEST[$campo])) 
    {
      $valor = "";
    } 
    else 
    {
      // Limpiamos el campo de etiquetas y espacios
      $valor = trim(strip_tags($_REQUEST[$campo]));
    }
    return $valor;
  }


  // ESCRIBA AQUI EL CÓDIGO PHP NECESARIO

  function validarIban(string $iban): bool{
    $longitud=strlen($iban);
    $validar=false;
    if($longitud==24){
        
        $ibanSin4=substr($iban,4);
        $letra=substr($iban,0,2);
        
          if($letra="ES" AND is_numeric($ibanSin4) ){
              $primeros2=substr($iban,2,2);
              
              $ibanCambiado=$ibanSin4."1428".$primeros2;

             

              $modulo=bcmod($ibanCambiado,"97");
              if($modulo==1){
                $validar=true;
              }
            
          }
      
   }
   return $validar;
  }

  function validarNumero(string $numeroFilas):bool{
    $validacion=false;
    if((filter_var($numeroFilas, FILTER_VALIDATE_INT))){
      if($numeroFilas<=15 AND $numeroFilas>0){
        $validacion=true;
      }
    }
    return $validacion;
  }

?>
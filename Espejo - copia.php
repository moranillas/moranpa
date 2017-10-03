<?php
		// Son todos negativos?
		function fEspejo($a){

        // Hacerme una copia del array en cadena para hacer comparaciones..
				$strCadena = implode($a);
				// INCORPORAR CUERPO FUNCIÓN ESPEJO.
				 $arr_res = array();
				 for($i=0;$i<10;$i++)
				    $arr_res[$i]=array();
				 if(count($a)==2) // Espejo de 2 elementos
				 {
				   if($a[0]==$a[1])
				       return 1;//Espejo máximo es de 1 elemento.
				 }else if(count($a)==3 && $a[0]==$a[2])//Espejo de 3 elelemtnos.
			   {
				       return 3;//Espejo máximo es de 3 elementos.
				 }else
				 { //  Cuando ya interviene una secuencia superior,gestionar.

					$n=3;// Cada vuelta,cuantos elementos cojeré.
					$num_els=count($a);//Numero combinaciones de n elementos.
					$repes = ($num_els-$n)+ 1;//Numero de secuencias.
					$tablas = (int)$num_els/2;
					for($i=0;$i<$repes;$i++)
				  {
						  for($c=0;$c<$n;$c++)
						  {
						  	$val =$a[$c+$i];
						  	$arr_res[$i][$c] = $val;
							}
				 }//Tengo formado el array 21,55,21
				  //                       55,21,15
					//En el primer verctor de los dos.Vuelvo a guardarlo xo al revés.
					//$arr_res[0]=fRevers($arr_res[0]);

				 //Devuelvo array formado.
				 echo"Realizado!!!:". $arr_res[0][0].",".$arr_res[0][1].",".$arr_res[0][2]."<br/>".
                                      $arr_res[1][0].",".$arr_res[1][1].",".$arr_res[1][2];
				//Array temporal contiene secuencia del array pero al revés.
				$temp = fRevers($arr_res[0]);
				//El implode me pasa array to string sin la coma.
				$str=implode($temp);
				echo "<br>";
				if(strpos($strCadena,$str)!==false)
			       	echo "Espejo localizado!!!!.Nivel ".count($arr_res[0] ); //"<br>String = $str ,$strCadena";
				else {
						  echo "Espejo no localizado!!!";
				}
				}//end-function.



	  }
		//Recibe Array y devuelve otro array con orden invertido.;
    function fRevers($a){
					 // Trabajo con Array.
						$l=count($a);
						$resp[]=array();
						for($i=$l-1,$c=0;$i>=0;$i--,$c++){
							  $resp[$c]=$a[$i];
						}
					  return $resp;
		}

		// Dada cadena,inicio y cantidad,crea otro array con los elementos desde inicio, n cars.
		// DEVUELVE String.
		function fSubstr($a,$ini,$cant)
		{

				 // Numero total elementos array.
				 $tot_el=count($a);
				 // Obtenemos posición índice de la mitad.
			   $coc = (int)count($a)/2;
         $str="";
			   $swap = array();
				 for($i=$ini,$rps=0;($rps<$cant) && ($i<$tot_el);$i++,$rps++)
				 {
					 	//if( ($ini+$cant)<=count($a) )
					     	$swap[$i]=$a[$i];

				 }
				 //Convertimos Array to String junto con las comas....
				 //Si incluyo la comoa,me pasa a formar parte del array,sinó no.
				 $str=implode(",",$swap );
		     return $str;

				 ////////////////////////////////////////////////////////////////////////////
		}               // ESTOY EN ESTA FUNCIÓN..........
		// Dado array $a y $cant:
		/*Crear array con elementos de long. n.
		function fParejas($a,$cant){

          $iMax = (int)count($a)/2;//Obtengo nº de pares,trios,cuatrios....
					$resp[]=array();
					// Nos da el n de repeticiones o secuencias dentro de la cadena inicial.
					$reps=(count($a)-$cant) + 1;
					$pares = count($a)-$cant;
					echo "<center>Pares = $pares<br>";
					echo "cadena = ";
					for($i=0;)
							for($i=0;$i<$reps;$i++)
							{
								  $resp[$i]=$a[$i];
                  //echo $a[$i];
							}
							// Devuelvo cadena.
							return $resp;

				 }else {
							//Codigo error.
							$resp[0]="error";
							return $resp;

				}
				echo"</center>";

		}*/

?>

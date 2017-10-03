<?php
		// Son todos negativos?
		function fEspejo($a){

        $num_els=count($a);//Numero combinaciones de n elementos.
        // Hacerme una copia del array en cadena para hacer comparaciones..
				$strCadena = implode($a);
				echo"<br>Cadena en funcion String = $strCadena" ;
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

					  // Comenzamos con máximo igual a 2.
						$nivel_max = 2;
						//Parte entera del numero.
					  $tab = floor(count($a)/2);
						//$n=2;// Cada vuelta,cuantos elementos cojeré.
						echo "Numero tablas = $tab";
		        for($n=2,$t=0;$t<$tab;$n++,$t++)
						{
              echo" <br><br>CAMBIO DE TABLA. $strCadena ,valor= $t<br><br>";
							$repes = ($num_els-$n)+ 1;//Numero de secuencias.
							echo "<br>Repes: ";
							var_dump($repes);
							echo("<br>");
							$tablas = (int)$num_els/2;
							//$i=0
							for($i=0;$i<$repes;$i++)
						  {
								  for($c=0;$c<$n;$c++)
								  {
										//$s = $c+$i;
										$V = $c + $i;
										echo "Indice: ";
										//var_dump($V);
								  	$val = $a [ $V ];
								  	$arr_res[$i][$c] = $val;
										echo"Val = ".$arr_res[$i][$c]."<br/>";
									}

									$str="";
									echo "string = ".implode($arr_res[$i]);
		              //
									$reves = implode(fRevers($arr_res[$i]));
									echo "<br>revers = ".$reves;
									//El implode me pasa array to string sin la coma.
									///$str=implode($temp);

									echo "<br>";
									if(strpos($strCadena,$reves)!==false)
									{
								       	echo "Espejo localizado!!!!.Nivel ".count($arr_res[$i]	 ); //"<br>String = $str ,$strCadena";
												if($arr_res[$i]>$nivel_max)
												     $nivel_max = count($arr_res[$i]);
									}else
											  echo "Espejo no localizado!!!<br\>";

								echo"<br\><br\>";

							 }//end-for-repes.

						}//end-for-tablas.


				 }//end-else.
				 //Devuelvo el nivel maximo encontrado.
				 return $nivel_max;

		}//end-function.




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

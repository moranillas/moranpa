<?php
        require_once 'Espejo.php';
        //Parte donde va3subcadena.
        $subparte="";
        $arr=[1];//,3,4,3,2,1];
        //$str = fRevers($arr);
        echo "<div style='border:12px inset green;width:450px;height:150px;position:absolute;top:15%;left:30%'>";
        echo"<center>";
        // Imprime si tiene algo
        if( count($arr)!=0)
            echo "Cadena original formato String = '";
        else {
          echo "Cadena original formato String = VACIA'";
        }
        // Mediante un foreach,imprimo los valores  del array.1 línea de todas.
        foreach($arr as $el)
        {
          echo "$el";
        }
        echo"'";
        echo"<br><br>";

        $res = fEspejo($arr);

        if( $res==="n") // N LO HALLA.
        {

            echo"<br><br><br> NO SE HALLA ESPEJO ALGUNO.VUÉLVELO A INTENTAR!!";
            //echo " : "."<span style='font-weight:bold'>".count($res)." elementos.</span>";
            echo "</center>";

        }else if($res===-2) {
          // CADENA VACIA.
          echo"<br><br><br> CADENA VACÍA!!! ";
          //echo " : "."<span style='font-weight:bold'>".count($res)." elementos.</span>";
          echo "</center>";

        }else if($res==="s1") {
          // CADENA VACIA.
          echo"<br><br><br> NO PUEDE SER SÓLO UN NÚMERO!!! <br>";
          echo"INTÉNTALO DE NUEVO!!!!";
          //echo " : "."<span style='font-weight:bold'>".count($res)." elementos.</span>";
          echo "</center>";

        }else   // NOS INDICA Q LO HA HALLADO.
        {
          // CUANDO NO HALLA NINGÚN ERROR.
          echo"<br><br><br> EL ESPEJO MÁXIMO LOCALIZADO ES ";
          for($i=0;$i<count($res);$i++)
					{
							echo "$res[$i]";
							if($i< count($res)-1 )
							      echo",";

					}
          echo " : "."<span style='font-weight:bold'>[".count($res)." elementos.]</span>";
          echo "</center>";
          echo"</div>";
        }

?>

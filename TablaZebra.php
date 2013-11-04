  <?php
   $filas=10;
   $columnas=10;
   $numero=1;
   $grey=true;
   $clase='';
  ?> 
<html>
<head>
<title>Isaac Murillo Practica3</title>
</head>
  <style>
   tr{
    background-color: cyan;
   }
   tr:nth-child(2n+1){
    background-color: green;
   }
  </style>

<body aling="center">
	<div>
		
		  <table border="5px">
		   <?php
			for($t=0;$t<$filas;$t++){
						echo "<tr>";
						if ($t%2==0){
							$clase='clase=par';
						}
						else{
							$clase='clase=impar';
						} 
					for($y=0;$y<$columnas;$y++){
						if($grey){
							echo "<td style=padding:5px;.$clase;>".$numero."</td>";
							$grey=false;
							$numero++;
						}
						else{
							echo "<td style=padding:5px;>".$numero."</td>";
							$grey=true;
							$numero++;
						}
					}
				echo "</tr>";
			}
		   ?>
		  </table>
	</div>
 </body>                                                                 
</html>

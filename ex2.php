 <!DOCTYPE html>
<script >
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58) || (tecla==46)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Tabuada</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		<h2 align="center">Tabuada</h2>
    </head>     
    <body>
		<form action="ex2.php" method="post" align="center">
		 <label>Número</label>
			<input type="text" name="numero" id="numero" onkeypress='return SomenteNumero(event)'/>	
			
			</br></br>
		<input type="submit" style="width: 200px; height: 40px;" value="Calcular" name="calcular" id="calcular"/>
		</form>
        <?php
		    if(isset($_POST['calcular']))
		    {
				$numero = $_POST['numero'];
				if (($numero == 0) or ($numero > 10)) echo "<script>alert('Número inválido!');</script>";
				else 
				{
					$cont = 1;
					while($cont < 11)
					{
						echo "<h2 align='left'>";
						echo "$numero x $cont = " . $numero*$cont;
						echo "</h2>";
						$cont++;
					}
				}
		    }
        ?>
    </body>
</html>
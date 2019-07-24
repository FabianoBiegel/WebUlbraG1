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
function SomenteLetras(e)
{
	var texto = /[0-9]/;
	if(texto.test(String.fromCharCode(e.keyCode)))	return false;
	else return true;
}
</script>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Hotel Bom Pouso</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		<h2 align="center">Hotel Bom Pouso</h2>
    </head>     
    <body>
		<form action="ex1.php" method="post" align="center">
            <label>Nome</label>
				<input type="text" style="width: 200px;" name="nome" id="nome"  maxlength="100" onkeypress='return SomenteLetras(event)'/>
            
            <label>Nº Diárias</label>
            <input type="text" name="diaria" id="diaria" onkeypress='return SomenteNumero(event)'/>	
			
			</br></br>
			<input type="submit" style="width: 200px; height: 40px;" value="Calcular" name="calcular" id="calcular"/>
		</	>	
        <?php
		   if(isset($_POST['calcular']))
		   {
				$nome = $_POST['nome'];
				$diarias = $_POST['diaria'];
				$calculo = 0.0;
				if ($diarias < 15)
				{ 
					$calculo = (80 * $diarias) + (5 * $diarias); 
				}
				else if ($diarias == 15)
				{
					$calculo = (80 * $diarias) + (3 * $diarias);
				}
				else
				{
					$calculo = (80 * $diarias) + (1.5 * $diarias);
				}
				echo "<h2 align='left'>";
				echo "Hospede: $nome <br>
					  Total da hospedagem: R$" . number_format($calculo,2);
				echo "</h2>";
		   
		   }
        ?>
    </body>
</html>
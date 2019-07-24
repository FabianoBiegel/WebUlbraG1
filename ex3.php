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
        <title>Par e Ímpar</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		<h2 align="center">Par e Ímpar</h2>
    </head>     
    <body>
		<form action="ex3.php" method="post" align="center">
			</br>
			<label>Número 1</label>
				<input type="text" name="numero1" id="numero1" onkeypress='return SomenteNumero(event)'/>
            <label>Número 2</label>
            <input type="text" name="numero2" id="numero2"  onkeypress='return SomenteNumero(event)'/>
			<label>Número 3</label>
				<input type="text" name="numero3" id="numero3"  onkeypress='return SomenteNumero(event)'/>
            <label>Número 4</label>
            <input type="text" name="numero4" id="numero4" onkeypress='return SomenteNumero(event)'/>
			<label>Número 5</label>
				<input type="text" name="numero5" id="numero5" onkeypress='return SomenteNumero(event)'/>
            <label>Número 6</label>
            <input type="text" name="numero6" id="numero6" onkeypress='return SomenteNumero(event)'/>
			</br></br>
			<input type="submit" style="width: 200px; height: 40px;" value="Calcular" name="calcular" id="calcular"/>
		</form>
	</table>
        <?php
		    if(isset($_POST['calcular']))
		    {
				$vetor = array($_POST['numero1'],$_POST['numero2'],$_POST['numero3'],$_POST['numero4'],$_POST['numero5'],$_POST['numero6']);
				$qtimpar = 0;
				$qtpar = 0;
				$somaimpar = 0;
				$somapar = 0;
				for($i = 0; $i < 6; $i++)
				{
					if($vetor[$i] % 2 == 0)
					{
						$qtpar++;
						$somapar += $vetor[$i];
					}
					else
					{
						$qtimpar++;
						$somaimpar += $vetor[$i];
					}
				}
				
				echo "<h2 align='left'>";
				echo "Quantidade de Par: " . $qtpar . "<br>";
				echo "Quantidade de Ímpar: " . $qtimpar . "<br>";
				echo "Somatório de Par: " . $somapar . "<br>";
				echo "Somatório de Ímpar: " . $somaimpar . "<br>";
				echo "</h2>";
				
			}
        ?>
    </body>
</html>
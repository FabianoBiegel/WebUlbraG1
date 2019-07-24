<!DOCTYPE html>
<script >
function GetData(){
    return new Date();
}
function SomenteLetras(e)
{
	var texto = /[0-9]/;
	if(texto.test(String.fromCharCode(e.keyCode)))	return false;
	else return true;
}
function alterarCSS(enviar)
{
	enviar.style.backgroundColor = 'green';
	enviar.value = "Enviado";
}
</script>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Prova G1</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		<h2 align="center">Prova G1</h2>
    </head>     
    <body>
			<a href="ex1.php" target="_blank" style="font-size:50px;">Exercício 1</a>
			<br>
			<a href="ex2.php" target="_blank" style="font-size:50px;">Exercício 2</a>
			<br>
			<a href="ex3.php" target="_blank" style="font-size:50px;">Exercício 3</a>	
			<br>
			<h2> Fabiano Biegelmeyer - Ulbra Canoas</h2>
			
	</table>
        <?php
			echo "<h2 align='left'>";
			$dia=date("d/m/Y");
			$hora=date("G:i"); 
			print ("Data e Hora: ");
			print ($dia);
			print (" ".$hora);
			echo "</h2>";
        ?>
    </body>
</html>
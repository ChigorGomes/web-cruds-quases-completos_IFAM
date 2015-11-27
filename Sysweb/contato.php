<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
       <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo1.css">
     <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
     <script language="javascript" src="java/formulario.js"> </script>
              
</head>
	  
 <body class="body1">
   <form action="cadContato.php" method="post" name="dados" onSubmit="return enviardados();">
   <table>
   <tr>
	<td>Nome Completo:</td>
	<td>
		<input type="text" name="txt_nome" class="formbutton" id="tx_nome" size="52" maxlength="150"></input>
	</td>
	<tr>
		<td>Email:</td>
		<td>
			<input type="text" name="txt_email" id="tx_email" size="52" maxlength="150" class="formbutton"></input>
		</td>
	</tr>
   </tr>
 
  <tr><td>Tipo:
 <select name= "txttipo">
<option value='Criticas'>criticas</option>
<option value='Elogios'>Elogios</option>
<option value='Sugestoes'>Sugestoes</option>
</select>
  
  <tr>
  <td>Mensagem:</td> 
 <td> <textarea name="txtmensagem" cols="50" rows="8" class="formbutton" id="tx_mensagem" input ></textarea> </td> </tr> 
 <tr> 
 <td class="cadastrar"> <input name="Submit" type="submit" value="Enviar dados"> <input name="Reset" type="reset"  value="Redefinir"> 


</body>

</html>
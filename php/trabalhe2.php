<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo1.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
     
	
	   </head>	  
 <body class="body2">
	  <h2 class="centro1"> TRABALHE CONOSCO</h2>
	  <form action="../cadTrabalheConosco2.php" method="post"  onSubmit="return enviardados();">
	  <table class= "tab1">
	 <tr><td>Nome:<input name="txtNome" type="text" class="formbutton" id="tx_nome" size="20" maxlength="150"> </td> </tr> 
	  <tr><td>Email:<input  type="text" name="txtemail" ></td></tr>
	  <tr><td>Telefone:<input  type="text" name="txttelefone" ></td></tr>
	  <tr><td>Sexo:<input  type="radio" name="rdsexo" value="F" id="fem" >
	  <label for="fem">feminino</label><input type="radio" name="rdsexo" value="M" id="mas">
	  <label for="mas">masculino</label>
	  </td></tr>
	  <tr>
	  <td>Data de nascimento: <input type ="date" name="txtnascimento" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9|1[012])/[0-9]{4}"
          placeholder="dd/mm/yyyy" title="dd/mm/yyyy"  ></td> </tr>
	  <tr>
	  <td>
	     <select name="escolaridade" >
		 <option value="">Selecione</option>
		 <option value="1"> Ensino Fundamental</option>
	     <option value="2">Ensino medio </option>
	     <option value="3"> Ensino Superior completo</option>
		 <option value="4">Pos graduado </option>
		 <option value="2">Mestrado </option>
		 <option value="2">Doutorado </option>
		 </select>
		 </td>
	  </tr>
	  <tr><td>Curriculo doc ou pdf<input type="file" name="file" id="file">
	  nenhum arquivo selecionado acima de 2M</td></tr>
	  
	  <tr><td>Ultima Experiencia Profissional</td></tr>
	   <tr><td>Empresa:<input  type="text" name="txtempresa" required></td></tr>
	   <tr><td>Cargo:<input  type="text" name="txtcargo" required></td></tr>
	  <tr><td>Atribuições:<textarea name="txtcomentario" rows="4"  cols="50" placeholder="Deixe seu comentario..."></textarea></td></tr>
	  </tr>
	  <td>Data de admissão: <input type ="date" name="txtdataadmissao" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9|1[012])/[0-9]{4}"
          placeholder="dd/mm/yyyy" title="dd/mm/yyyy" required ></td> </tr>
	  </tr>
	  <tr>
	  <td>Data de demissão: <input type ="date" name="txtdemissao" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9|1[012])/[0-9]{4}"
          placeholder="dd/mm/yyyy" title="dd/mm/yyyy" required ></td> </tr>
	  </tr>
	  </tr>
	  <tr>
	  <td> <input  type="submit" value="Enviar dados"> <input name="Reset" type="reset"  value="Redefinir"> 
	 
	 </tr>
	  
	  
	  </table>
      
	   <a href="menu3.php"> Voltar</a>
	  

		
		
</body>
</html>
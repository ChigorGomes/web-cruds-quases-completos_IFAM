<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>francisco</title>
   <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
   <script language="javascript" src="java/formulario.js"></script>        

	  
</head>	  
 
	<h2>Finalizar compra</h2>

<body class="body1"> 
<form action="pagina de ação" method="post" name="dados" onSubmit="return enviardados();" >
 <table class="tab"> 
 <tr> 
 <td>Nome completo:</td> 
 <td> <input name="tx_nome" type="text" class="formbutton" id="tx_nome" size="52" maxlength="150"> </td> </tr> 
 <tr> 
 <td>E-mail:</td> 
 <td><input name="tx_email" type="text" id="tx_email" size="52" maxlength="150" class="formbutton"></td> </tr> 
 <tr> 
 <td>Senha:</td> 
 <td> <input type="password" name="senha"></td> </tr> 
<tr><td>Dados Pessoais de entrega</td></tr> 
<td>cpf</td><td>Rg</td></tr>
<tr><td><input  type="text" name="txtnome" required></td>
<td><input  type="text" name="txtnome" required></td></tr>
<td>Celular:</td><td>Cep</td></tr>
<tr><td><input  type="text" name="txtnome" required></td>
<td><input  type="text" name="txtnome" required></td></tr>
<td>Endereço:</td><td>Numero</td></tr>
<tr><td><input  type="text" name="txtnome" required></td>
<td><input  type="text" name="txtnome" required></td></tr>
<td>complemento:</td></tr>
<tr><td><input  type="text" name="txtnome" required></td>

<tr><td>escolha de frete</td></tr> 
<td>Correios:</td><td>Forma de pagamento</td></tr>
<tr><td><input  type="text" name="txtnome" required></td>
<td><input  type="radio" name="rdpagamento" value="p" id="pagamento" >
	  <label for="pagamento">pag seguro</label><input type="radio" name="rdpagamento" value="d" id="deposito">
	  <label for="deposito">Deposito Bancario</label>
	  </td></tr>
<tr><td>resumo da compra</td></tr>   
<tr class="tamanho"><td>produto</td>
<td>preço</td>
<td>Quantidade</td>
<td>Subtotal</td>

</tr>
<tr class="tamanho"><td>LEGO Star Wars - Darth Vader </td>
<td>R$ 179,90</td>
<td>2 peças</td>
<td>R$ 359,8</td>
</tr>
<tr class="cadastrar"> 
 <td colspan="4"> <input name="Submit" type="submit" value="Enviar dados"> <input name="Reset" type="reset"  value="Redefinir"> 
 </td> 
 </tr> 

</table> 
 </form> 
 
	
	
	
	</body>
</html>
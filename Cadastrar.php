<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="cadCadastro.php" method="post" >
		<table align="center" border="1">
			<th colspan="2">Cadastrar</th>
			<tr>
				<td>
					<label for="txtNome">Nome:</label>
				</td>
				<td>
					<input name="txtNome" id="txtNome" type="text" placeholder="fulano de tal" size="50">
				</td>
			<tr>
				<td>
					<label for="txtEmail">Email:</label>
				</td>
				<td>
					<input name="txtEmail" id="txtEmail" type="email" placeholder="fulano@.com" size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label for="txtSenha">Senha:</label>
				</td>
				<td>
					<input  name="txtSenha" id="txtSenha" type="password"  size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Data de Nascimento:</label>
				</td>
				<td>
					<input type="date" name="txt_Nascimento" id="id_nascimento"  size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Estado Civil:</label>
				</td>
				<td>
					<input type="text" name="txt_estadoC" id="id_estadoC"  size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Sexo:</label>
				</td>
				<td>
					<input type="text" name="txt_Sexo" id="id_sexo" size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Rua:</label>
				</td>
				<td>
					<input type="text" name="txt_Rua" id="id_rua"  size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Número:</label>
				</td>
				<td>
					<input type="text" name="txt_Numero" id="id_Numero" size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Bairro:</label>
				</td>
				<td>
					<input type="text" name="txt_Bairro" id="id_bairro"  size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Cidade:</label>
				</td>
				<td>
					<input type="text" name="txt_Cidade" id="id_Cidade"  size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Cep:</label>
				</td>
				<td>
					<input type="text" name="txt_Cep" id="id_cep"  size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label>Telefone:</label>
				</td>
				<td>
					<input type="text" name="txt_Telefone" id="id_Telefone"  size="50">
				</td>
			</tr>


			<tr>
				<td>
					<input type="submit" value="Cadastrar">
				</td>
				<td>
					<input type="reset" value="Limpar">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Usuário</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="validarLogin.php" method="post">
		<tr>
			<td>
				<label for="login_id">Login</label>
				<input type="text" id="login_id" name="txtLogin">
			</td>
		</tr>
		<tr>	
			<td>
				<label for="senha_id">Senha</label>
				<input type="password" name="txtSenha" id="senha_id"> 
			</td>
				
		</tr>
		<tr>
			<td>
				<input type="submit" value="Entrar">
			</td>
			<td>
				<input type="reset" value="Limpar">
			</td>
		</tr>
		<tr>
			<td>
				<a href="FormCadadministrador.php">Sem cadastro?</a>
			</td>
		</tr>
	</form>

</body>
</html>
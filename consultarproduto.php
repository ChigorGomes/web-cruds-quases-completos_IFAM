<html>
<head>
    <meta charset = "utf-8">
    <title> Consulta de Produtos </title>
    <style>
        img#image{
            width: 100px;
            height: 50px;
        }

    </style>
</head>

<body>
<form method = "post" action = "consultarproduto.php">
    <br><br><br><br><br><br><br><br>
    <a href="administrador/area_Administrador.php" class="menu"> <b> Voltar a página Anterior </b> </a>
    <table class = "tableforma">
        <tr>
            <p class = "tabela"> <strong > <h2>Consulta de Produto </h2> </strong> </p>
        </tr>
        <tr>
            <td> <b> <h1>Nome:</h1> </b> </td>
            <td> <input class = "campoBusca" type = "text" name = "txtNome" size = "30" autofocus> </td>
            <td> <input class = "buscar" type = "submit" value = "Buscar" > </td>
        </tr>
    </table>
    <br><br>
    <p class = "tabela"> <strong ><h2>Produtos Cadastrados</h2> </strong> </p>
    <table  class = "tableconsulta">
        <tr>
            <td> Código </td>
            <td> Nome </td>
            <td> Descrição </td>
            <td> Categoria </td>
            <td> Preço (R$)</td>
            <td> Imagem </td>
            <td> Proceso</td>
        </tr>
        <br><br>
        <?php

        include ("Sysweb/conexaoBd.php");
        try{
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $nome = "";

            if(isset($_POST)&&!empty($_POST)){
                $nome = $_POST["txtNome"];
            }

            $sql = "SELECT * FROM produtos WHERE nome LIKE? ORDER BY nome";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, '%' .$nome. '%');
            $stmt->execute();
            if($stmt){
                foreach($stmt as $usr){
                    echo "<tr>";
                    echo "<td>".$usr["codigo"]." </td>
                    <td>".$usr["nome"]." </td>
                    <td>".$usr["descricao"]."</td> 
                    <td>".$usr["CATEGORIA"]."</td>
                     <td>".$usr["preco"]."</td>";
                    echo "<td>";
                    echo "<img id ='image' src=".$usr["imagem"]."/>";
                    echo  "</td>";
                    echo "<td>";
                    echo "<a href = 'formeditarproduto.php?idCodigo=".$usr["idCodigo"]."'> Alterar </a>";
                    echo "<a href = 'FormDeletaImagem.php?idCodigo=".$usr["idCodigo"]."'onclick = 'return deletaproduto(".$usr["idCodigo"].")'> Excluir </a>";
                    echo "</td>";
                    echo"</tr>";
                }
            }

        }catch(Exception $e){
            echo "Erro: ".$e->getMessage();
        }
        ?>
    </table>
</form>
</body>
</html>
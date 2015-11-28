<html>
<head>
    <meta charset = "utf-8">
    <title> Consulta de Produtos </title>
    <style>
        img#image{
            width: 200px;
            height: 100px;
        }

    </style>
</head>

<body>
<form method = "post" action = "teste.php">
          <table>
          	 <tr>
            <td> <b> <h1>Nome:</h1> </b> </td>
            <td> <input class = "campoBusca" type = "text" name = "txtNome" size = "30" autofocus> </td>
            <td> <input class = "buscar" type = "submit" value = "Buscar" > </td>
        </tr>
			 
          </table>  
        
        <?php

        include ("Sysweb/conexaoBd.php");
        try{
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $nome = "";

            if(isset($_POST)&&!empty($_POST)){
                $nome = $_POST["txtNome"];
                #$idCodigo= $_GET['idCodigo'];
            }

            $sql = "SELECT * FROM produtos WHERE nome LIKE? ORDER BY nome";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, '%' .$nome. '%');
            $stmt->execute();
            if($stmt){
                foreach($stmt as $usr){
                    echo "<table>";
					echo "<tr>";
					echo "<td>";
					echo "<a href = 'teste2.php?idCodigo=".$usr["idCodigo"]."'>";
                     echo "<img id ='image' src=".$usr["imagem"]."/>";
                    echo "</td>";
                    echo  "<td>".$usr["nome"]. "</td>";
                    echo "<td>".$usr["preco"]."</td>";
                     echo "<td>".$usr["descricao"]."</td>";
                     echo "<td>";  
            		echo "</tr>";
                    echo "</table>";

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
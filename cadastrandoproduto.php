<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>
<style>
    
    .produto{
        padding:10px 5px 10px;
        border:1px solid #066;
        border-radius:5px;
        border-top:2px solid #066;
        width: 400px;
    }
    .preco{
        padding:10px 5px 10px;
        border:1px solid #066;
        border-radius:5px;
        border-top:2px solid #066;
        width: 180px;
    }
    th{
        font-size:17px;
    }

    a:hover{
        color:white;
    }

    .menu{list-style-type:none;top: 10px;left: 550px; position: absolute;}

    .menu > li{display:table-cell;border:1px solid black;}

    .menu li a{color:black;text-decoration:none;padding:5px 10px;display:block;}

    .menu li ul{list-style:none;border:1px solid lightgrey;background-color:whitesmoke;position:absolute;display:none;}

    .menu li ul li{border:1px solid lightgrey;width:150px;}

    .menu li a:hover{background:grey;color:cyan;text-shadow:0px 0px 10px cyan;}

    .menu li:hover ul{display:block;}

    fieldset#imagem{
        width: 370px;
        height: 140px;
    }
    div#imagem2{
        position: relative;
        left: 200px;
    }
</style>

<body>
<a href="administrador/area_Administrador.php">Voltar página anterior</a>
    <fieldset>
        <legend><h1>CADASTRO DE PRODUTOS</h1></legend>
    <form method="post" enctype="multipart/form-data" action="upload.php">
            <table align="center">
                <tr>
                    <td class="campo"> Código: </td>
                    <td colspan="3"> <input class="campo" type="text" name="txtCodigo" id="txtCodigo"> </td>
                </tr>
            <tr>
                <td class="campo"> Produto: </td>
                <td colspan="3"> <input class="campo" type="text" name="txtNome" id="txtNome"> </td>
            </tr>
            <tr>
                <td class="campo"> Descrição: </td>
                <td colspan="3"><textarea class="campo" id="txtDescricao" name = "txtDescricao" rows="3"></textarea> </td>
            </tr>
            <tr>
                <td class="campo"> Categoria: </td>
                <td>
                     <select  name="txtCategoria" id="txtCategoria">
                        <?php
                            include ("Sysweb/conexaoBd.php");
                            try {
                                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                $nome = "";

                                if(isset($_POST)&&!empty($_POST)){
                                    $nome = $_POST["txtCategoria"];
                                }
                                $sql = "SELECT * FROM categoria ORDER BY CATEGORIA";
                                $stmt = $conn->prepare($sql);
                                $stmt->bindValue(1, '%' .$nome. '%');
                                $stmt->execute();
                                 if($stmt){
                                    foreach($stmt as $usr){
                                        echo "<option>".$usr['CATEGORIA']."</option>";
                                    }
                                 }
                            }catch(Exception $e){
                                echo "Erro: ".$e->getMessage();
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="campo"> Preço: </td>
                <td> <input class="campo" type="text" name="txtPreco" id="txtPreco"> </td>
            </tr>
            <tr>
                <td colspan="3" class="campo">
                    Selecione uma imagem: <input name="arquivo" type="file" />
                    <br />
                </td>
            </tr>
            <tr>
                <td> <input class="botao" type="submit" value="Cadastrar"></td>
            </tr>
            <tr>
                <td><input class="botao" type="reset" value="Limpar"> </td>
            </tr>
         </table>
    </form>
    </fieldset>
</body>
</html>
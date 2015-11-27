<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>francisco</title>
   <style>
     
	  figure{
	  text-align: center;
}
       
	  .aki{
	  text-align: left;
	  }


	  li{
        text-transform:uppercase;
        padding:5px;
        border:1px solid lightgrey;
		background-color : whitesmoke;
		
	  
		}
	   
	   body{
	    background-color:DodgerBlue;
	    height:100px;margin:20px;
		}
	    
		header{
	    background-color:red;
		margin:10px;
		margin-right:auto;
		font-size:14px;
		}
	   p{
	   font-size:50px;}
	    
	  h1{
        top: 0;
		color:white;
		text-align:right;
		 height:100px;
		 
		
		
		}
		
	 

 
*, *:after, *:before{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
  font-size: 14px;
  line-height: 0.5;
 
  }
  
.menu{

top: 0;
width: 100%;
height: 100px;
color: # 333;
background: # fff;
margin-left:auto;
margin-right:auto;
margin-top:0;
}	
  
  
  
  
  
  
.menu .menu-list{
  list-style: none;
}
.menu a{
  color: DarkOrange;
  text-decoration: none;
  display: block;
  cursor: pointer;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 700;
  letter-spacing:0.1em;
 
  
  }
.menu > .menu-list > li{
  float: left;
  position: relative;
 
  
  }
.menu > .menu-list > li > a {
  padding: 15px;
  margin: 05px;
  background:blue;
  
  }
.menu > .menu-list > li:hover a {
  background: red;
}


<!-- Remove as bolinhas do lado das listas -->
.sidebar li {
  list-style-type:decimal;
  
  
  }

<!-- Configura os links do menu principal -->
.menu > .menu-list > li > a {
  padding: 20px;
  margin: 0 5px;
  background: red;
}
<!-- Configura o fundo do menu principal quando com mouse hover -->
.menu > .menu-list > li:hover a {
  background: red;
}

/* Mostra o submenu no evento de mouse hover */

.menu > .menu-list > li:hover > .sub-menu {
  display: block;
}
/* Configura o estilo do submenu */
.menu > .menu-list > li > .sub-menu {
  position: absolute;
  top: 50px;
  left: 50px;
  background: blue;
  min-width: 200px;
  z-index: 1000;
  display: none;
}
/* Configura os links do submenu */
.menu > .menu-list > li > .sub-menu > li > a {
	padding: 10px 20px;
}
/* Clearfix para o menu  pode ser deletado*/
.menu:after {
  content: '.';
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

	table{
	   
	   width:20%;
	   float:right;
	   top:0px;
	   }
      
      
	</style>
       
</head>	  
 <body>
	 
<figure class="aki"><img src="logo1.png" alt="imagem">
</figure> 
	  <header><h2>SEJA BEM VINDO</h2>
	  </header>
	  
	  <h1>
	  <form action="processa.php" method="post">
	  <table>
	<tr><td> <label for="login_id"> login: </label></td>
	 <td><input id="login_id" type="text" name="txtLogin"></td>
	 <td><label for="senha_id"> senha:</label></td>
	 <td><input id="senha_id" type="password" name="txtSenha"></td>
	 <td><input type="submit" value="Enviar"></td></tr>
	 <tr><td ><label for ="pesquisa_id"> buscar: </label></td>
	  <td><input id="pesquisa_id" type="search" name="txtPesquisa" 
	  placeholder="Digite sua busca"></td></tr>
	 
	 </table>
	
	</form>
	 </h1>
	 

	 
	 <div class="menu">
  <ul class="menu-list">
    <li><a href="#">Home</a></li>
    <li>
      <a href="#">Meninos</a>
       <ul class="sub-menu">
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
      </ul>
    </li>
    <li><a href="#">meninas</a>
    <ul class="sub-menu">
	    <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
      </ul>
	  </li>
	<li><a href="#">categoria</a>
    <ul class="sub-menu">
	    <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
      </ul>
	  </li>
	
	<li><a href="#">personagens</a>
    <ul class="sub-menu">
	    <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
      </ul>
	  </li>
  
  </ul>
</div>


	 









<figure><img src="foto.png" alt="imagem">
</figure>

	    
		
		
</body>
</html>
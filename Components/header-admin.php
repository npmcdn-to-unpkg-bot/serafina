<?php    
    echo '
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="admin.php">Serafina Bolos</a>
    	</div>

    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    		<ul class="nav navbar-nav">
				<li class=""><a href="funcionario.php">Funcionários</a></li>
        		<li><a href="clientes.php">Clientes</a></li>
				<li><a href="bolos.php">Bolos</a></li>
        		<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar <b class="caret"></b></a>
        			<ul class="dropdown-menu">
					  <li><a href="addBolo.php">Bolos</a></li>
					  <li class="divider"></li>
					  <li><a href="cadastroFunc.php">Funcionários</a></li>
					  <li class="divider"></li>
        			</ul>
        		</li>
        		<li><a href="Controller/logout.php">logout</a></li>
    		</ul>
    	</div>
	</div>
</nav>';

?>
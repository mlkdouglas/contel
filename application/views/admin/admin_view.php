
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-admin.css');?>">
	<title>Contel</title>
</head>
<body>
    <div class='container-fluid'>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
        <nav class="main-menu">
            <div class="main-menu-content">
                <a href="/" class="logo">Admin</a>
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                
            </div>
        </nav>
    </header>  

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/home">Admin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="<?php base_url('noticias');?>">Notícias</a></li>

          </ul>
            
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/sair">Sair</a></li>
          </ul>
            
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container" style="margin-top:70px">

      <!-- Main component for a primary marketing message or call to action -->
      <?php

        if (isset($page) && is_file('application/views/admin/' . $page . '.php'))
        {
            include('application/views/admin/' . $page . '.php');
        }
        ?>

    </div> <!-- /container -->
    



        
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>



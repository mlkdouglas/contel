
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
	<title>Contel</title>
</head>
<body>
    <section id="barra-menu-desktop" class="container-fluid">
        <div class="container">
            <div class='col-md-3'>
                <div class='midia-social'>
                    <ul class="col-md-offset-10 col-md-2 pull-right ul-inline  " >
                        <li><img src="<?php echo base_url('assets/img/ico-social-linkedin.png');?>"></li>
                        <li><img src="<?php echo base_url('assets/img/ico-social-facebook.png');?>"></li>
                        <li><img src="<?php echo base_url('assets/img/ico-social-twitter.png');?>"></li>
                        <li><img src="<?php echo base_url('assets/img/ico-social-instagram.png');?>"></li>
                    </ul>
                </div>
            </div>
            <!--div class="menu-mobile col-md-1">
                <img src="<?php echo base_url('assets/img/ico-menu-desktop.png');?>" />
            </div>

            <div class="menu-desktop col-md-5 " >
                <ul class='ul-inline '>
                    <li>CONTEL</li>
                    <li>CONSULTAS</li>
                    <li>DENUNCIAS</li>
                    <li>ASSOCIE-SE</li>
                </ul>
            </div-->
            
            <div class="sign-in col-md-offset-4 col-md-5" >
                <!--form class="form-inline pull-right">
                    <div class="form-group input-group-sm">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="E-mail">
                    </div>
                    <div class="form-group input-group-sm">
                        
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Senha">
                    </div>
                    <div class="form-group btn-group-sm">
                    <button type="submit" class="btn btn-green ">Sing in</button>
                    </div>
                </form-->
                
                <form class="form-inline pull-right">
                    <div class="form-group input-group-sm">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Consulte seu protocolo">
                    </div>
                    
                    <div class="form-group btn-group-sm">
                    <button type="submit" class="btn btn-green ">Consultar</button>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    
    
    
    <section class="submenu-content">
        <div class="container">
            
            <div class="col-md-3">
                <div class='logo'>
                    <img src="<?php echo base_url('assets/img/logo-contel.png');?>">
                </div>
            </div>
            
            <div class="submenu col-md-9">
                <ul class='ul-inline pull-right '>
                    <li> <a href="<?php echo base_url('o-contel');?>/#o-contel">O Contel</a></li>
                    <li><a href="<?php echo base_url('o-contel');?>/#atuacao">Atuação</a></li>
                    <li>Links Úteis</li>
                    <li>Notícias</li>
                    <li>Contel na mídia</li>
                    <li> <a href="<?php echo base_url('o-contel');?>/#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class='slide-noticias'>
        <div class='container'>
            
                <!--img src='<?php echo base_url('assets/img/slide-noticias.png');?>' /-->
                
                <div class="content-slide">
                    <div class="col-md-7" >
                        <div class="content-image">
                            
                            <iframe  style="width:100%; height:401px;"  src="https://www.youtube.com/embed/-O9cT7Fjp3c?rel=0&amp;showinfo=0" frameborder="0" border="0"  allowfullscreen></iframe>
                            
                            <!--img src="assets/img/slide/image1.png" /-->
                        </div>
                    </div>
               
                    <div class="col-md-5 content-text">
                        <!--div class="">
                            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet, tellus eget tristique pharetra, ex tortor blandit tortor, at lobortis lectus risus id sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                            
                            <div class="control-button">
                                <div class="previews"><img src="<?php echo base_url('assets/img/slide/ico-previews.png');?>" /></div>
                                <div class="next"><img src="<?php echo base_url('assets/img/slide/ico-next.png');?>" /></div>
                            </div>
                        </div-->
                        <h1>Faça sua reclamação</h1>
                        <p>O Contel quer te ouvir</p>
                        <textarea class='form-control' style='height:260px;'></textarea>
                        
                        <button class='btn btn-green ' style='margin:10px auto;'>Click aqui para reclamar</button>
                        
                    </div>
                    
                </div>
            
        </div>
    </section>
    
    <?php $this->load->view($page . '.php');?>
    
    
    <section class='footer container-fluid'>
        <div class="container">
            
            
            <div class='col-md-3'>
                <h3>Regional São Paulo</h3>
                Rua Marechal Xavier da Câmara, 21 Cjs 11, 12, 15 e 22 - Casa Verde - São Paulo – CEP.: 02517-190
                <br />
                <br />
                Tel.: +55 (11) 4305-9004 <br />
                E-mail: sp1@contel.org.br

            </div>
            
            <div class='col-md-3'>
                <h3>Regional SP - Interior</h3>
                Rua do Patrocínio, 426 – Centro - Itú – São Paulo CEP.: 13300-200
                <br />
                <br />
                Tel.: +55 (11) 2715-6550 <br />
                E-mail: sp2@contel.org.br


            </div>
            
            <div class='col-md-3'>
                <h3>Regional Curitiba</h3>
                Rua Alcídio Viana, 1001 – Sala 31 - Centro  São José dos Pinhais – Paraná CEP.: 83.005-560
                <br />
                <br />
                Tel.: +55 (41) 3058-5288 <br />
                E-mail: atendimento.ctba@contel.org.br

            </div>
            
            <div class='col-md-3'>
                <form class='form-horizontal'>
                <textarea class='form-control' placeholder="Fale conosco" style='height:100px;'></textarea>
                <div class=''>
                    <button class='btn btn-green col-sm-12' style='margin-top:10px;'>Fale Conosco</button>
                </div>
                </form>
            </div>
            
            
            
            <!--div class="col-md-4">
                <ul class="footer-menu">
                    <li>CONTEL</li>
                    <li>CONSULTAS</li>
                    <li>DENUNCIAS</li>
                    <li>ASSOCIADOS</li>
                    <li>ASSOCIE-SE</li>
                    <li>LINKS UTÉIS</li>
                    <li>NOTÍCIAS</li>
                    <li>REVISTA CONTEL</li>
                    <li>EM FOCO</li>
                    <li>CONTATO</li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <div class="denuncia-rapida">
                    <form class="form-horizontal">
                        <textarea class="form-control"></textarea>
                        <button class="btn btn-green col-sm-12">Denunciar</button>
                            
                    </form>
                </div>
            </div>
            
            <div class="col-md-3 col-md-offset-1">
                <div class="footer-login">
                    <form class="form-horizontal">
                        <input type="text" class="form-control"  style="margin-top:0;" placeholder="E-mail" />
                        <input type="text" class="form-control" placeholder="Senha" />
                        <button class="btn btn-gray col-sm-12">Entrar</button>
                        
                    </form>
                    
                    <form class="form-horizontal">
                        <input type="text" class="form-control" placeholder="Cadastre seu e-mail"  />
                        <button class="btn btn-gray col-sm-12">Cadastrar</button>
                    </form>
                    
                </div>
            </div-->
        </div> 
       
        
    </section>
    
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>



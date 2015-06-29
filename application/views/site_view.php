
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script type="text/javascript">
                // Use jQuery com a variavel $j(...)
                var $j = jQuery.noConflict();
                $j(document).ready(function() { 
                    $j(".voltarTopo").hide();
                    $j(function () {
                        $j(window).scroll(function () {
                            if ($j(this).scrollTop() > 300) {
                                $j('.voltarTopo').fadeIn();
                            } else {
                                $j('.voltarTopo').fadeOut();
                            }
                        });                    
                        $j('.voltarTopo').click(function() {
                            $j('body,html').animate({scrollTop:0},10);
                        }); 
                    });
                });
                </script>
	<title>Contel</title>
</head>
<body id="voltarTopo">  
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
                
                <form class="form-inline pull-right" id="consulta_protocolo" method="post" action="<?php echo base_url('consulta'); ?>">
                    <div class="form-group input-group-sm">
                        <input type="text" class="form-control" id="protocol" name="protocol" placeholder="Consulte seu protocolo">
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
                    <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url('assets/img/logo-contel.png');?>"></a>
                </div>
            </div>
            
            <div class="submenu col-md-9">
                <ul class='ul-inline pull-right '>
                    <li> <a href="<?php echo base_url('o-contel');?>">O Contel</a></li>
                    <li><a href="<?php echo base_url('atuacao');?>">Atuação</a></li>
                    <li>Links Úteis</li>
                    <li><a href="<?php echo base_url('noticias');?>">Notícias</a></li>
                    <li>Contel na mídia</li>
                    <li> <a href="<?php echo base_url('contato');?>">Contato</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    
    
    
    
    <?php $this->load->view($page . '_view.php');?>
    
    <button type="button" class="voltarTopo btn btn-green btn-lg" alt="Ir para o topo" title="Ir para o topo" onclick="$j('html,body').animate({scrollTop: $j('#voltarTopo').offset().top}, 2000);">
        <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
    </button>
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



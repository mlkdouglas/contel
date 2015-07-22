 <div class="header-home container-fluid">
            <div class="container mt-20">
                <div class="col-md-10">
                    <div class="nav">
                        <ul class="list-inline color-white-light">
                           <?php foreach($navtop as $item): ?>
                            <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
               
                
                <div class="col-md-2 ">
                   
                    <div class="form-group pull-right">
                       <?php foreach ($btnlogin as $itemlogin):
                           echo $itemlogin;
    endforeach; ?>
                    </div>
                  
                    
                </div>
                <div class="clearfix mb-20"></div>
            </div>
      <?php if(!$user_dados){ ?>
       
                <div class="col-md-6">
                    <p class="size-8 color-white text-shadow-default">
                        Faça a sua <br />
                        reclamação
                    </p>
                    <div class="size-2 color-white-light text-shadow-1">
                    <p >
                        São comuns os erros existentes nas faturas de telecomunicação. 
                        7 em cada 10 pessoas são cobradas indevidamente pelas operadoras 
                        de telefonia. Segundo dados do Procon, essas mesmas operadoras 
                        lideram o ranking de reclamações ano após ano.
                    </p>
                    </div>
                </div>
                  
                <div class="col-md-offset-2 col-md-4">
                    <form class="form-group " id="usercad" action="" method="post">
                        <div class="retornovalida"></div>
                            
                        <div class="mb-10">
                            <input type="text" class="form-control input-lg" placeholder="Nome" id="user_name" name="user_name"/>
                        </div>
                        
                        <div class="mb-10">
                            <input type="email" class="form-control input-lg" placeholder="E-mail" id="email" name="email" />
                        </div>
                        
                      
                        <div class="mb-10">
                            <button class="btn btn-lg btn-green fullwidth ">Cadastrar <span class="loader"></span></button>
                        </div>
                    
                    
                    <p class="color-white-light">
                        Ao clicar em "Cadastre-se no Contel" , você concorda com nossos 
                        <a href="#" class="color-green">termos de serviço</a> e <a href="#" class="color-green">política de privacidade</a>. Nós lhe enviaremos 
                        e-mails relacionados representam ocasionalmente.
                    </p>
                    </form>
                    
                    <form class="form-group " id="login" action="" method="post" hidden>
                        <h3 class="color-white">Efetue o login</h3>
                            
                        <div class="retornovalida"></div>
                        <label class="color-white-light">Email</label>
                            
                        <div class="mb-10">
                            <input type="email" class="form-control input-lg" placeholder="Email" id="email" name="email"/>
                        </div>
                        <label class="color-white-light">Senha</label>
                        <div class="mb-10">
                            <input type="password" class="form-control input-lg" id="password" name="password" />
                        </div>
                        
                      
                        <div class="mb-10">
                            <button class="btn btn-lg btn-green fullwidth ">Entrar <span class="loader"></span></button>
                        </div>
                    
                    
                 
                    </form>
                    
                    
                </div>
      <?php }else{ ?>
     
     <!-- Se usuário estiver logado -->
     
     
     <?php foreach ($user_dados as $usuario): ?>
     <div class="col-md-6">
                    <p class="size-8 color-white text-shadow-default">
                        Faça a sua <br />
                        reclamação
                    </p>
                    <div class="size-2 color-white-light text-shadow-1">
                    <p >
                        São comuns os erros existentes nas faturas de telecomunicação. 
                        7 em cada 10 pessoas são cobradas indevidamente pelas operadoras 
                        de telefonia. Segundo dados do Procon, essas mesmas operadoras 
                        lideram o ranking de reclamações ano após ano.
                    </p>
                    </div>
                </div>
                  
                <div class="col-md-offset-2 col-md-4">
                    <form class="form-group " id="reclamar" action="" method="post">
                        <div id="retornovalida"></div>
                        <label class="color-white"><h3>Reclamar</h3></label>
                        <div class="mb-10">
                            <textarea name="rec" id="rec" rows="10" cols="60"></textarea>
                        </div>
                        
                        
                      
                        <div class="mb-10">
                            <button class="btn btn-lg btn-green fullwidth ">Reclamar</button>
                        </div>
                    
                    
                    <p class="color-white-light">
                        Ao clicar em "Cadastre-se no Contel" , você concorda com nossos 
                        <a href="#" class="color-green">termos de serviço</a> e <a href="#" class="color-green">política de privacidade</a>. Nós lhe enviaremos 
                        e-mails relacionados representam ocasionalmente.
                    </p>
                    </form>
                    
                    <form class="form-group " id="login" action="" method="post" hidden>
                        <h3 class="color-white">Efetue o login</h3>
                            
                        <div id="retornovalida"></div>
                        <label class="color-white-light">Email</label>
                            
                        <div class="mb-10">
                            <input type="email" class="form-control input-lg" placeholder="Email" id="email" name="email"/>
                        </div>
                        <label class="color-white-light">Senha</label>
                        <div class="mb-10">
                            <input type="password" class="form-control input-lg" id="password" name="password" />
                        </div>
                        
                      
                        <div class="mb-10">
                            <button class="btn btn-lg btn-green fullwidth ">Entrar <span class="loader"></span></button>
                        </div>
                    
                    
                 
                    </form>
                    
                    
                </div>
     <?php endforeach; ?>
      <?php } ?>
            </div>
            
            
        </div>   
        
        
        <div class="container">
            <div class="col-md-offset-3 col-md-6">
                <p class="text-center size-3 mt-40">
                    O Contel através de Pesquisas e Mapeamento encontrou problemas 
                    comuns a quase todas elas, cobranças indevidas, erros na portabilidade, 
                    problemas de rede, dentre muitos outros. Faça aqui a sua reclamação e 
                    nos ajude a lutar pelos direitos dos usuários de telecomunicação.
                </p>

                <div class="text-center mt-20 mb-20">
                    <button class="btn btn-green btn-mod-3 ">Reclamar</button>
                </div>
            </div>
        </div>
        
            
        <div class="mt-20">
            <iframe width="100%" height="650" src="https://www.youtube.com/embed/-O9cT7Fjp3c" frameborder="0" allowfullscreen></iframe>
        </div>
        
        
        <!-- area de Ultimas noticias -->
        <div class="news bg-gray pt-40 pb-40" >
            
            <div class="container ">
                
                <div class="col-md-12 text-center mb-40">
                    <h1 class="size-5">Notícias</h1>
                </div>
                <?php 
                foreach ($noticias_index as $not):?>
                   <div class="col-md-3 mb-30" >
                    <div class="content-news-item bg-white  fullwidth">
                        <h3 class="size-4 mb-0"><?php echo $not->title; ?></h3>
                        <div class="news-data size-1 mt-0"><?php echo $not->creationdate.' atualizada em '.$not->modifieddate; ?></div>
                        <div class="news-img text-center mt-20 mb-20"><img src="<?php echo $not->url; ?>"></div>
                        <div class="news-titulo size-1">Edição n.<?php echo $not->id; ?></div>
                        <div class="news-descricao size-2 mb-20">
                           <?php echo $not->description; ?>
                        </div>
                        <div class="news-shared text-right"><i class="fa fa-share"></i></div>
                    </div>
                </div>
                <?php                 endforeach; ?>
                
                
                
            </div>
            
        </div>
        
        
 </section>
    
 
 <script>
 $(function(){
     $('.btn-logar').click(function(){
        $('#usercad').hide();
        $('#login').fadeIn();
     });
     
     $('#login').ajaxForm({
          data: $(this).serialize(), 
          type: 'POST',
          url: '<?php echo base_url('login/logar'); ?>',
          dataType: 'json',
  beforeSubmit:function() { 
      $('.loader').html('Aguarde...');
      
    }, 
  beforeSend: function(e) {
      $('.loader').html('Aguarde...');
  },
 // uploadProgress: function(event, position, total, percentComplete) {},
  complete: function(data) {
    
     location.reload(true);
     }
  });
                         
                         
                         $('#usercad').ajaxForm({
          data: $(this).serialize(), 
          type: 'POST',
          url: '<?php echo base_url('login/caduser'); ?>',
  beforeSubmit:function() { 
      $('.loader').html('Aguarde...');
      
    }, 
  beforeSend: function(e) {
      $('.loader').html('Aguarde...');
  },
 // uploadProgress: function(event, position, total, percentComplete) {},
  complete: function() {
    // location.reload(true);

  }
  });
                         
                         $('#logout').on('click',function(){
                            $('.loader-user').html('Aguarde...');
                            $.ajax({
                                 url:'<?php echo base_url('login/logout'); ?>',
                                  }).done(function(){
                                   location.reload(true);
                             });
                         });
                         
         });
       
     
 </script>
 <div class="header-complaint container-fluid">
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
       
                <div class="col-md-8">
                    <p class="size-6 color-white text-shadow-default">
                        Faça a sua reclamação
                       
                    </p>
                    <div class="clearfix mb-20"></div>
                    <p class="size-5 color-white text-shadow-default">
                        
                        
                        Efetue o login

                    </p>
                    <div class="size-2 color-white-light text-shadow-1">
                   
                     <form class="form-inline " id="login" action="" method="post" >
                                                    
                        <div class="retornovalida"></div>
                        <div class="form-group">
                        <label class="color-white-light">Email</label>
                            
                        
                            <input type="email" class="form-control input-lg" placeholder="Email" id="email" name="email"/>
                        </div>
                        <div class="form-group">
                        <label class="color-white-light">Senha</label>
                        
                            <input type="password" class="form-control input-lg" id="password" name="password" />
                        </div>
                        
                      
                        <div class="form-group">
                            <button class="btn btn-lg btn-green fullwidth ">Entrar <span class="loaderlogin"></span></button>
                        </div>
                    
                    
                 
                    </form>
                    </div>
                </div>
                  
                <div class="col-md-4">
                    <div class="clearfix mb-20"></div>
                    <p class="size-5 color-white text-shadow-default">
                        Cadastre-se!

                    </p>
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
                    
                   
                    
                    
                </div>
      <?php }else{ ?>
     
     <!-- Se usuário estiver logado -->
     
     
     <?php foreach ($user_dados as $usuario): ?>
     <div class="col-md-12 center">
         <div class="col-md-8 col-md-offset-2 ">
                    <p class="size-6 color-white  text-shadow-default">
                        Faça a sua reclamação
                    </p>
                   
                </div>
                  
                <div class="col-md-8 col-md-offset-2">
                    <form class=" " id="reclamar" action="" method="post">
                        <div id="retornovalida"></div>
                                <label class="color-white"><h3>Selecione o tipo de Reclamação</h3></label>
                            <?php foreach($define_complaint as $define): ?>
                            <div class="radio form-control">
                                
                            <label>
                            <input type="radio" value="<?php echo $define->id; ?>" name="define" class="radio<?php echo $define->id; ?>"><?php echo $define->title; ?>
                            
                            </label>
                            </div>
                            <?php endforeach; ?>
                        <input type="text" class="outros form-control" value="" placeholder="Informe outro assunto!Ex: Internet não conecta.">
                        <label class="color-white"><h3>Reclamação</h3></label>
                        <div class="mb-10">
                            <textarea name="rec" class="form-control" id="rec" rows="10" ></textarea>
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
                    
                   
                    
                    
                </div>
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
      $('.loaderlogin').html('Aguarde...');
      
    }, 
  beforeSend: function(e) {
      $('.loaderlogin').html('Aguarde...');
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
   location.reload(true);

  }
  });
                         
                         $('#reclamar').ajaxForm({
                             data : $(this).serialize(),
                             type: "post",
                             url: '<?php echo base_url('reclamar/insert_complaint'); ?>',
                             beforeSubmit:function(){
                                 $('#retornovalida').html('<span class="alert alert-warning">Enviando Reclamação...</span>');
                             },
                                     beforeSend: function(e){
                                         $('#retornovalida').html('<span class="alert alert-warning">Quase terminando...</span>');
                                     },
                                             complete:function(){
                                                 var url = '<?php echo base_url('reclamar/complaint_success'); ?>'
                                                 window.location.href = url ;
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
                         $('.outros').fadeOut();
                         $('.radio5').change(function(){
                         $('.outros').fadeIn().attr('name','define-outros').attr('id','define-outros').focus();
                         });
                         $('.outros').focusout(function(){
                             $(this).fadeOut();
                         });
                         
});      
         
       
     
 </script>
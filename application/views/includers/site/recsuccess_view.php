 
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
                        Sua reclamação foi enviada com sucesso!
                       
                    </p>
                    <div class="clearfix mb-20"></div>
                    <p class="size-5 color-white text-shadow-default">
                        
                        
                       Você receberá um email com as informações sobre o andamento de sua reclamação

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
                    <p class="size-5 color-white  text-shadow-default">
                        Reclamação enviada com sucesso.
                    </p>
                   
                </div>
                  
                <div class="col-md-8 col-md-offset-2">
                      <div id="retornovalida"></div>
                        
                           <?php foreach($complaint as $rec): ?>
                      <h3 class="color-white-light ">Numero do protocolo: <?php echo $rec->protocol; ?></h3>
                      <p class="color-white-light size-4">Assunto: <?php echo $rec->title_define; ?></p>
                      <p class="color-white-light size-4">Responsavel: <?php echo $rec->admin_user_name; ?></p>
                            <?php endforeach; ?>
                      <p class="color-white-light size-3">Sr(Sra) <?php echo $rec->user_name;?></p>
                    <p class="color-white-light size-3">
                        Você receberá um email com os dados da sua reclamação em breve, para acompanhar sua reclamação acesse sua conta efetuando o login e clique em MINHA CONTA.
                        
                    </p>
                    <p class="color-white-light size-3">Agradecemos o seu contato.</p>
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
                   <?php echo $reclamar_button; ?>
                </div>
            </div>
        </div>
        
            
       
       
        
        
 
    
 
 
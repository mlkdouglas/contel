<div class="container-fluid">
            <div class="container mt-20">
                <div class="col-md-10">
                    <div class="nav">
                        <ul class="list-inline">
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
       
               <div class="col-md-12">
        <div class="container-fluid">
                <div class="col-md-5 col-md-offset-1 bg-gray">
                   
                    <div class="clearfix mb-20"></div>
                    <h3>Efetue o login</h3>
                    <div class=" ">
                   <div class="clearfix mb-20"></div>
                     <form class="form-inline  " id="login" action="" method="post" >
                                                    
                        <div class="retornovalida"></div>
                        <div class="input-group">
                        <span class="input-group-addon">@</span>
                            
                        
                            <input type="email" class="form-control input-md" placeholder="Email" id="email" name="email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-md" id="password" name="password" placeholder="Senha"/>
                        </div>
                        
                      
                        <div class="form-group">
                            <button class="btn btn-md btn-green fullwidth ">Entrar <span class="loaderlogin"></span></button>
                        </div>
                        <div class="clearfix mb-20"></div>
                    <p >
                       Ao efetuar o login você terá acesso a seus protocolos. 
                        <a href="#" class="color-green">Esqueci a Senha</a> e <a href="#" class="color-green">política de privacidade</a>. Nós lhe enviaremos 
                        e-mails relacionados representam ocasionalmente.
                    </p>
                    <div class="clearfix mb-20"></div>
                 
                    </form>
                    </div>
                </div>
                  
                <div class="col-md-5 col-md-offset-1 bg-gray">
                    <div class="clearfix mb-20"></div>
                    <p class="size-5 ">
                        Cadastre-se!

                    </p>
                    <form class="form-group " id="usercad" action="" method="post">
                        <div class="retornovalida"></div>
                            
                        <div class="mb-10">
                            <input type="text" class="form-control " placeholder="Nome" id="user_name" name="user_name"/>
                        </div>
                        
                        <div class="mb-10">
                            <input type="email" class="form-control " placeholder="E-mail" id="email" name="email" />
                        </div>
                        
                      
                        <div class="mb-10">
                            <button class="btn x btn-green fullwidth ">Cadastrar <span class="loader"></span></button>
                        </div>
                    
                    
                    <p >
                        Ao clicar em "Cadastre-se no Contel" , você concorda com nossos 
                        <a href="#" class="color-green">termos de serviço</a> e <a href="#" class="color-green">política de privacidade</a>. Nós lhe enviaremos 
                        e-mails relacionados representam ocasionalmente.
                    </p>
                    </form>
                    
                   
                    
                </div>
                </div>
    </div>

      <?php }else{ ?>
     
     <!-- Se usuário estiver logado -->
     
     
     <?php foreach ($user_dados as $usuario): ?>
     <div class="col-md-12 center">
         <div class="col-md-2">
         <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Minha conta
                    </a>
                </li>
                <li>
                    <a href="#">Perfil</a>
                </li>
                <li>
                    <a href="#">Minhas reclamações</a>
                </li>
                <li>
                    <a href="#">Dados de Contato</a>
                </li>
                <li>
                    <a href="#">Alterar Senha</a>
                </li>
               
            </ul>
        </div>
         </div>
        <!-- /#sidebar-wrapper -->
                  
        <div class="col-md-9 " style=" border-left: 1px solid #ddd;">
                     <?php if(!$consulta){ ?>
            <h3>Ultimas Reclamações</h3>
                <p class="text-center size-3 mt-40">
                    O Contel através de Pesquisas e Mapeamento encontrou problemas 
                    comuns a quase todas elas, cobranças indevidas, erros na portabilidade, 
                    problemas de rede, dentre muitos outros. Faça aqui a sua reclamação e 
                    nos ajude a lutar pelos direitos dos usuários de telecomunicação.
                </p>

             
                        
                </div>
     </div>
        <?php }else{ ?>
     <?php //var_dump($consulta); ?>
     <?php foreach($consulta as $con): ?>
             <h3>Protocolo <?php echo $con->protocol; ?></h3>
                <div class="table-responsive">
  <table class="table">
      
      <th>Assunto</th>
      <th>Data de Criação</th>
      <th>Autor</th>
      <th>Status</th>
      <th>Modificado</th>
      <th>Responsavel</th>
      <th>#</th>
     
      <tr>
          
          <td><?php echo $con->title_define; ?></td>
          <td><?php echo date('d/m/Y',strtotime($con->creationdate)); ?></td>
          <td><?php echo $con->user_name; ?></td>
          <td><?php if($con->status == '1'){echo 'Ativo';} ?></td>
          <td><?php if($con->modifieddate == '0000-00-00 00:00:00'){echo '';}else{date('d/m/Y',  strtotime($con->modifieddate));} ?></td>
          <td><?php echo $con->admin_user_name; ?></td>
          <td><button class="btn btn-green detalhes">Detalhes</button></td>
          
      </tr>
  </table>
                    <div id="detalhes" style="display: none;"> 
                        <h3>Detalhes</h3>
                   <dl>
                       <dt><?php echo $con->title_define; ?></dt>
                       <dd><?php echo $con->descri_related; ?></dd>
                       <dd><?php echo $con->complaint; ?></dd>
                   </dl>
                        <blockquote>
                            <p>Comentarios</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
                    <?php endforeach; ?>
       <?php } ?>
     <?php endforeach; ?>
      <?php } ?>
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
        
<script>
$(function(){
   
    $('.detalhes').click(function(){
        $('#detalhes').fadeIn();        
    });
});</script>
    
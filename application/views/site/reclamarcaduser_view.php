<section id="reclamar">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1>Reclamar - <small>Confirmação</small></h1>
                <hr />
                <p>Confirme os dados abaixo e informe uma senha para finalizar o cadastro!</p>
            </div>  
            
             <form class=" ">
            <div class='col-md-6'>
                
              <?php foreach ($reclam_user as $reclamacao_user) {
                  foreach($reclamar as $reclamacao):?> 
                <h3><smal>Numero de protocolo gerado:</smal> <?php echo $reclamacao->protocol ; ?></h3>
                    <div class="form-group">
                        <label>O que você é ?</label>
                        <input type="text" name="define" id="define" disabled value="<?php echo $reclamacao_user->define; ?>" />
                    </div>
                    
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $reclamacao_user->name; ?>" disabled />
                    </div>
                    
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" value="<?php echo $reclamacao_user->cpf; ?>"disabled />
                    </div>
                    
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $reclamacao_user->email; ?>" disabled />
                    </div>
                    
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php echo $reclamacao_user->zipcode; ?>" disabled />
                    </div>
                    
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $reclamacao_user->address; ?>" disabled />
                    </div>
                    
                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" class="form-control" name="state" id="state" value="<?php echo $reclamacao_user->state; ?>" disabled />
                    </div>
                    
                    <div class="form-group">
                        <label>Qual é o seu problema ?</label> <br />
                        <div class="radio">
                            <label><input  type="text" name="related" id="related" value="<?php echo $reclamacao->related; ?>"/> </label>
                        </div>
                       
                        
                    </div>
                    
                    <div class='form-group'>
                        <label>Reclamação</label>
                        <textarea class='form-control' style='height:200px;' name="complaint" id="complaint" disabled><?php echo $reclamacao->complaint; ?></textarea>
                    </div>
                    
                    
                  
              
            </div>
              <?php endforeach; } ?>
                <p class="col-md-6">
                    Para concluir o cadastro informe uma senha para acesso!
               
                   
                </p>
                <div class="col-md-4">
                     <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="password" id="password"  />
                    </div>  
                <div class="form-group">
                        <label>Confrma Senha</label>
                        <input type="password" class="form-control" name="confirmpass" id="confirmpass"  />
                    </div>  
                <button class="btn btn-green">Enviar</button>
                </div>
             </form>
        </div>
    </div>
    
    
</section>
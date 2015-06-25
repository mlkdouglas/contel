<section id="reclamar">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1>Reclamar</h1>
                <hr />
            </div>  
            
            
            <div class='col-md-6'>
                
                <form class="" action="<?php echo base_url('reclamar/reclamarcaduser') ;?>"  id="form-reclamacao" method="post">
                    <div class="form-group">
                        <label>O que você é ?</label>
                        <select class="form-control" name="define" id="define">
                            <option value="Pessoa fisica">Pessoa fisica</option>
                            <option value="Pessoa juridica">Pessoa juridica</option>
                            <option value="Associação / sindicato">Associação / sindicato</option>
                            <option value="Problemas coletivos">Problemas coletivos</option>
                            <option value="Orgão publicos">Orgão publicos</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" />
                    </div>
                    
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" id="email" />
                    </div>
                    
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" name="zipcode" id="zipcode" />
                    </div>
                    
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="address" id="address" />
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" class="form-control" name="state" id="state" />
                    </div>
                    
                    <div class="form-group">
                        <label>Qual é o seu problema ?</label> <br />
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Fraude"/> Fraude</label>
                        </div>
                        
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Problema de sinal" /> Problema de sinal</label>
                        </div>
                        
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Cobranças indevidas"/> Cobranças indevidas</label>
                        </div>
                        
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Renovação não autorizada"/> Renovação não autorizada</label>
                        </div>
                        
                        <div class="radio">
                            <label><input  type="radio"  id="related-outras" name="related" /> Outras 
                                <style type="text/css">
                                 .outras{visibility: hidden;}
                                </style>
                                <input type='text'class='form-control outras' placeholder="aparece apos selecionar outras" /></label>
                        </div>
                        
                    </div>
                    
                    <div class='form-group'>
                        <label>Reclamação</label>
                        <textarea class='form-control ' style='height:200px;' name="complaint" id="complaint"></textarea>
                    </div>
                    
                    
                    <button class="btn btn-green">Enviar</button>
                </form>
            </div>
                
                <p class="col-md-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Quisque accumsan tortor non semper vehicula. Mauris sit amet 
                    molestie arcu. Vivamus faucibus sodales mi vel elementum. Nam finibus lectus in ante pretium, eu vehicula mi placerat. Aliquam quis sollicitudin leo. Integer eu nisi cursus, mollis libero at, posuere justo.
                </p>
           
        </div>
    </div>
    
    
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#related-outras').click(function(){
          $('.outras').css('visibility', 'visible').attr('name','related');
          $('.outras').attr('id','related');
            $(this).removeAttr('name').removeAttr('id');  
      
        });
       
    });
</script>

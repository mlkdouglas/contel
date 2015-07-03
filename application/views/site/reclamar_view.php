<section id="reclamar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Reclamar <small><span id="problem"> </span></small></h1>
                <hr />
            </div>  
        </div>
        <form class="reclamacao_form" action=""  id="form-reclamacao" method="post">
            <div class="row" id="setproblem">                   
                <div class='col-md-6' >                                    
                    <div class="form-group">
                        <label>Qual é o seu problema ?</label> <br />
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Cobrança Indevida/Erro de Fatura"/>Cobrança Indevida/Erro de Fatura</label>
                        </div>
                        
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Problema de sinal" />Problemas de Sinal</label>
                        </div>                        
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Bloqueio Injustificado de Internet Móvel"/>Bloqueio Injustificado de Internet Móvel</label>
                        </div>                        
                        <div class="radio">
                            <label><input  type="radio" name="related" id="related" value="Falha ou Demora no Atendimento"/>Falha ou Demora no Atendimento</label>
                        </div>                        
                        <div class="radio">
                            <label><input  type="radio"  id="related-outras" name="related" />Outras 
                                <style type="text/css">
                                 .outras{visibility: hidden;}
                                </style>
                                <input type='text'class='form-control outras' placeholder="Discrimine" /></label>
                        </div>                        
                    </div>                    
                   
                                      
                </div>                
                <p class="col-md-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Quisque accumsan tortor non semper vehicula. Mauris sit amet 
                    molestie arcu. Vivamus faucibus sodales mi vel elementum. Nam finibus lectus in ante pretium, eu vehicula mi placerat. Aliquam quis sollicitudin leo. Integer eu nisi cursus, mollis libero at, posuere justo.
                </p>
            </div> 
            <div class="row titular">
                <div class="col-md-12">
                    <h3>Dados do titular</h3>
                    <hr />
                </div>
                <div class="col-md-7 col-md-offset-2">                    
                    <div class="form-group">
                        <label>O que você é ?</label>
                        <select class="form-control " name="define" id="define">                         
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
                        <input type="text" class="form-control" name="user_name" id="user_name"/>
                    </div>                    
                    <div class="form-group">
                        <label>CPF ou CNPJ</label>
                        <input type="text" class="form-control" name="cpf_cnpj" value="" id="cpf_cnpj" />
                    </div>
                    <div class="form-group">
                         <a class="btn btn-green titular-retorna">Voltar</a>
                        <a class="btn btn-green titular-avancar">Avançar</a>
                       
                    </div>
                </div>
            </div>
            <div class="row endereco">              
                <div class="col-md-12">
                    <h3>Endereço</h3>
                    <hr />
                </div> 
                <div class="col-md-7 col-md-offset-2">                        
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" name="zipcode" id="zipcode" />
                    </div>                        
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="address" id="address" />
                    </div>
                    <div class="form-group">
                        <label>Numero</label>
                        <input type="text" size="10" class="form-control" name="number" id="number" />
                    </div>
                    <div class="form-group">
                        <label>Complemento</label>
                        <input type="text" class="form-control" name="complement" id="complement" />
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select name="state" class="form-control"> 
                            <option value="estado">Selecione o Estado</option> 
                            <option value="ac">Acre</option> 
                            <option value="al">Alagoas</option> 
                            <option value="am">Amazonas</option> 
                            <option value="ap">Amapá</option> 
                            <option value="ba">Bahia</option> 
                            <option value="ce">Ceará</option> 
                            <option value="df">Distrito Federal</option> 
                            <option value="es">Espírito Santo</option> 
                            <option value="go">Goiás</option> 
                            <option value="ma">Maranhão</option> 
                            <option value="mt">Mato Grosso</option> 
                            <option value="ms">Mato Grosso do Sul</option> 
                            <option value="mg">Minas Gerais</option> 
                            <option value="pa">Pará</option> 
                            <option value="pb">Paraíba</option> 
                            <option value="pr">Paraná</option> 
                            <option value="pe">Pernambuco</option> 
                            <option value="pi">Piauí</option> 
                            <option value="rj">Rio de Janeiro</option> 
                            <option value="rn">Rio Grande do Norte</option> 
                            <option value="ro">Rondônia</option> 
                            <option value="rs">Rio Grande do Sul</option> 
                            <option value="rr">Roraima</option> 
                            <option value="sc">Santa Catarina</option> 
                            <option value="se">Sergipe</option> 
                            <option value="sp">São Paulo</option> 
                            <option value="to">Tocantins</option> 
                        </select>    
                    </div>
                    <div class="form-group">
                        <a class="btn btn-green endereco-retorna">Voltar</a>
                        <a class="btn btn-green endereco-avancar">Avançar</a>
                   
                    </div>
                </div>
            </div>    
            <div class="row contato">
                <div class="row">
                    <div class="col-md-12">  
                        <h3>Dados para contato</h3>                
                        <hr />
                    </div> 
                    <div class="col-md-7 col-md-offset-2">                        
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" />
                        </div>
                        <div class="form-group">
                            <a class="btn btn-green contato-retorna">Voltar</a>   
                            <a class="btn btn-green contato-avancar">Avançar</a>                
                                       
                        </div>
                    </div>   
                </div>
            </div>                    
            <div class="row reclamacaotext">
                <div class="row">
                    <div class="col-md-12">  
                        <h3>Reclamação</h3>                
                        <hr />
                    </div> 
                    <div class="col-md-7 col-md-offset-2">  
                        <div class='form-group'>
                            <label>Reclamação</label>
                            <textarea class='form-control ' style='height:200px;' name="complaint" id="complaint"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-2">
                     <a class="btn btn-green rec-retorna">Voltar</a>   
                    <button class="btn btn-green enviar">Enviar</button>               
                </div> 
            </div>
            </form>
    </div>

    </div>       
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){  
        $('.titular').hide();
        $('.endereco').hide();
        $('.contato').hide();
        $('.reclamacaotext').hide();
      $('input[name="related"]').change(function(e) { // Select the radio input group
      $('#problem').html( " > "+$(this).val());  
      $('.titular').fadeIn(900);
      $('#setproblem').fadeOut();
   });
   $('.titular-avancar').click(function(){
        $('.titular').fadeOut();
        $('.endereco').fadeIn(900);
   });
   $('.endereco-avancar').click(function(){
        $('.endereco').fadeOut();
        $('.contato').fadeIn(900);
   });
   $('.contato-avancar').click(function(){
        $('.contato').fadeOut();
        $('.reclamacaotext').fadeIn(900);
   });
   $('.titular-retorna').click(function(){
        $('.titular').fadeOut();
        $('#setproblem').fadeIn(900);
   });
   $('.endereco-retorna').click(function(){
        $('.endereco').fadeOut();
        $('.titular').fadeIn(900);
   });
   $('.contato-retorna').click(function(){
        $('.contato').fadeOut();
        $('.endereco').fadeIn(900);
   });
   $('.rec-retorna').click(function(){
        $('.reclamacaotext').fadeOut();
        $('.contato').fadeIn(900);
   });
        $('#related-outras').click(function(){
          $('.outras').css('visibility', 'visible').attr('name','related');
          $('.outras').attr('id','related');
            $(this).removeAttr('name').removeAttr('id');  
      
        });
        
       
       
    });
    
    
</script>

<script>
    $(document).ready(function(){
               
            $('.enviar').click(function(){
            $('.progress-menu').css("display","inline");
                var dados = jQuery( '.reclamacao_form' ).serialize();

                jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url('site/reclamarcad');?>",
                        data: dados,
                        dataType: "json",
                        
                }).done(function(){
                  
             window.location.replace('<?php echo base_url('site/reclamacaoenv/rec/2'); ?>');
                });

                return false;
            
            });
            });
            </script>

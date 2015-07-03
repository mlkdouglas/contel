<section id="reclamar">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <h1>Reclamar</h1>
                <hr />
            </div>  
        </div>
             <div class="row login">
            <div class='col-md-6'>
                <h3>Efetue o login</h3>
              
                <div class="col-md-12">                
                <form method="post" action="<?php echo base_url('site/logar'); ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <?php //echo md5('k2108f84    '); ?>
    <input type="password" class="form-control" name="password" value="" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
            </div>
                <div class="col-md-12 novocad">
                    Após efetuar seu cadastro efetue o login e envie a sua reclamação!
                </div>
            </div>
            <div class="col-md-6">
                <h3>Não tem cadastro ainda?</h3>
                <p>
                    Faça o seu cadastro para enviar uma reclamação e poder acompanhar seu protocolo.
                                        
                </p>
                <p>
                    <a href="#" title="Cadastrar" class="btn-lg btn btn-green cadastrar">Cadastre-se!</a>
                </p>
           
            </div>
        </div>
        <div class="row novocad">
            <div class="col-md-7 col-md-offset-2">
                <div class="col-md-12">
                <h3>Dados do titular</h3>
                <hr />
            </div> 
                <form class="form-horizontal" action="<?php echo base_url('site/cad_user') ;?>"  id="form-cad-user" method="post">
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
                        <label>CPF</label>
                        <input type="text" class="form-control" name="cpf" value="" id="cpf" />
                    </div>
                    
                    
                    <div class="col-md-12">
                        <h3>Endereço</h3>
                <hr />
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
                 <div class="col-md-12">
                        <h3>Dados para contato</h3>
                <hr />
            </div> 
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" id="email" />
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="tel" class="form-control" name="phone" id="phone" />
                    </div>
                    
                    <button class="btn btn-green enviar_cad">Enviar</button>
                </form>
                
            </div>
        </div>
    </div>
    
    
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.novocad').hide();
        $('.cadastrar').click(function(){
             $('.novocad').fadeIn(900);
             $('.login').fadeOut(10);
        });
        $('#form-cad-user .alert').hide();
        $('#related-outras').click(function(){
          $('.outras').css('visibility', 'visible').attr('name','related');
          $('.outras').attr('id','related');
            $(this).removeAttr('name').removeAttr('id');  
      
        });
        $("#form-cad-user #confirm_password").keyup(function(){
             $('#form-cad-user .alert').fadeIn();
            if($("#form-cad-user #confirm_password").val() != $('#form-cad-user #password').val()){
                $("#form-cad-user #confirm_password").addClass('alert-danger');
                
                return false;
            }else{  $('#form-cad-user .alert').fadeOut().hide();  $("#form-cad-user #confirm_password").removeClass('alert-danger').addClass('alert-success');  }
        });
        
        $('#form-cad-user').submit(function(){    
              $('#form-cad-user .alert').show();
            if($("#form-cad-user #confirm_password").val() != $('#form-cad-user #password').val()){
                $("#form-cad-user #confirm_password").addClass('alert-danger')
                return false;
            }         
            else
            {                  
               //  
                return true;
            }
        });
     
       
    });
</script>

<section id="novanoticia">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-plus"></span> Adicionar nova Noticia</h1>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" method="POST" id="nova" action="">
                    <div class="form-group">                          
                        <label class="col-sm-2 control-label" for="not_titulo">Titulo</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="not_titulo" id="not_titulo" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"  for="not_link">Link</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="not_link" id="not_link" placeholder="Url da notícia">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="not_descricao">Descrição</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="not_descricao" id="not_descricao" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="not_noticia">Noticia</label>
                        <div class="col-md-6">                            
                            <textarea class="form-control" name="not_noticia" id="not_noticia" rows="10" ></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="not_criationdate" id="not_criationdate" value="<?php //echo date(); ?>" />                    
                    <div class="form-group form-group-md">
                        <label class="col-sm-2 control-label" for="not_status">Status</label>
                        <div class="col-md-6">
                            <select class="form-control" name="not_status"id="not_status">
                                <option value="0">Inativo</option>
                                <option value="1">Ativo</option>
                            </select>  
                        </div> 
                    </div>
                    <div class="form-group">
                          <style>
                                .progress-menu{
                                    display: none;
                                    width:32px;
                                    margin: 2px;
                                    
                                }
                            </style>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default"><img src="<?php echo base_url('assets/img/progress-menu.gif'); ?>" class="progress-menu" /> Salvar</button>
                        </div>
                    </div>
                </form> 
            </div>                            
        </div>
    </div>   
</section>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
               
            $('#nova').submit(function(){
            $('.progress-menu').css("display","inline");
                var dados = jQuery( this ).serialize();

                jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url('admin/cadastrar/');?>",
                        data: dados,
                        success: function( data )
                        {     
                          window.location.replace('<?php echo base_url('admin/noticias/'); ?>');
                        }
                });

                return false;
            
            });
            });
            </script>
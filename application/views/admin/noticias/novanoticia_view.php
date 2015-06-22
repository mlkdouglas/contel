<section id="novanoticia">
    
        <div class="row">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-plus"></span> Adicionar nova Noticia</h1>
                <hr />
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-10">
                <form id="form-new-noticia" class="form-horizontal" method="POST" id="nova" action="">
                    <div class="form-group">                          
                        <label class="col-sm-2 control-label" for="title">Titulo</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="title" id="title" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"  for="link">Link</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="link" id="link" placeholder="Url da notícia">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="description">Descrição</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="news">Noticia</label>
                        <div class="col-md-6">                            
                            <textarea class="form-control" name="news" id="news" rows="10" ></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="creationdate" id="creationdate" value="<?php //echo date(); ?>" />                    
                    <div class="form-group form-group-md">
                        <label class="col-sm-2 control-label" for="published">Status</label>
                        <div class="col-md-6">
                            <select class="form-control" name="published"id="published">
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
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
                            <button type="" class="btn btn-default btn-new-not"><img src="<?php echo base_url('assets/img/progress-menu.gif'); ?>" class="progress-menu" /> Salvar</button>
                        </div>
                    </div>
                </form> 
            </div>                            
        </div>
</section>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
               
            $('.btn-new-not').click(function(){
            $('.progress-menu').css("display","inline");
                var dados = jQuery( '#form-new-noticia' ).serialize();

                jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url('admin/cadastrar/');?>",
                        data: dados,
                        dataType: "json",
                        
                }).done(function(){
                window.location.replace('<?php echo base_url('admin/noticias/'); ?>');
                });

                return false;
            
            });
            });
            </script>
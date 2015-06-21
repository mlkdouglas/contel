<section id="novanoticia">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-edit"></span> Atualizar Noticia</h1>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                
                <?php foreach ($noticia as $not): ?>
                <form class="form-horizontal" method="POST" id="not_update" action="">
                    <div class="form-group">                          
                        <label class="col-sm-2 control-label" for="not_titulo">Titulo</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="not_titulo" value="<?php echo $not->not_titulo; ?>"id="not_titulo" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"  for="not_link">Link</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="not_link" id="not_link" value="<?php echo $not->not_link; ?>" placeholder="Url da notícia">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="not_descricao">Descrição</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="not_descricao" id="not_descricao"  rows="3"><?php echo $not->not_descricao; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="not_noticia">Noticia</label>
                        <div class="col-md-6">                            
                            <textarea class="form-control" name="not_noticia" id="not_noticia" rows="10" ><?php echo $not->not_noticia; ?></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="not_modifidate" id="not_modifidate" value="<?php echo date('d/m/Y'); ?>" />                    
                    <div class="form-group form-group-md">
                        <label class="col-sm-2 control-label" for="not_status">Status</label>
                        <div class="col-md-6">
                            <select class="form-control" name="not_status"id="not_status">
                                <?php if ($not->not_status != 0){ ?>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                                <?php }else{ ?>
                                <option value="0">Inativo</option>
                                <option value="1">Ativo</option>
                                <?php } ?>
                            </select>  
                        </div> 
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <style>
                                .progress-menu{
                                    display: none;
                                    width:32px;
                                    margin: 2px;
                                    
                                }
                            </style>
                            <button type="submit" class="btn small"><img src="<?php echo base_url('assets/img/progress-menu.gif'); ?>" class="progress-menu" /> Atualizar</button>
                        </div>
                    </div>
                </form> 
                <?php endforeach; ?>
            </div>                            
        </div>
    </div>   
</section>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
               
            $('#not_update').submit(function(){
            $('.progress-menu').css("display","inline");
                var dados = jQuery( this ).serialize();

                jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url('admin/atualizanoticia/'.$not->not_id.'/update');?>",
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
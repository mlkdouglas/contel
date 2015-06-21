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
                        <label class="col-sm-2 control-label" for="title">Titulo</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="title" value="<?php echo $not->title; ?>"id="title" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"  for="link">Link</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="link" id="link" value="<?php echo $not->link; ?>" placeholder="Url da notícia">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="description">Descrição</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="description" id="description"  rows="3"><?php echo $not->description; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="news">Noticia</label>
                        <div class="col-md-6">                            
                            <textarea class="form-control" name="news" id="news" rows="10" ><?php echo $not->news; ?></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="modifieddate" id="modifieddate" value="<?php echo date('d/m/Y'); ?>" />                    
                    <div class="form-group form-group-md">
                        <label class="col-sm-2 control-label" for="published">Status</label>
                        <div class="col-md-6">
                            <select class="form-control" name="published"id="published">
                                <?php if ($not->published != 0){ ?>
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
                            <button  class="btn small btn-atualiza-not"><img src="<?php echo base_url('assets/img/progress-menu.gif'); ?>" class="progress-menu" /> Atualizar</button>
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
        alert();
    })
    $(document).ready(function(){
              // alert();
            $('.btn-atualiza-not').click(function(){
            $('.progress-menu').css("display","inline");
                var dados = jQuery( this ).serialize();

                jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url('admin/atualizanoticia/'.$not->id.'/update');?>",
                        data: dados,
                        dataType: "json",
                        
                }).done(function(){
                     window.location.replace('<?php echo base_url('admin/noticias/'); ?>');
                });

                return false;
            
            });
            });

            </script>
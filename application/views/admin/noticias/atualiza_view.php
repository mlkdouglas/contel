<section id="novanoticia">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-edit"></span> Atualizar Noticia</h1>
                <hr />
            </div>
        </div>  <?php foreach ($noticia as $not): ?>
                <form class="form-horizontal " id="form-update" method="POST" id="not_update" action="">
        <div class="row">
            <div class="col-md-6">
                
              
                    <div class="form-group">                          
                        <label class="col-sm-2 control-label" for="title">Titulo</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="title" value="<?php echo $not->title; ?>"id="title" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"  for="link_reference">Link</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="link_reference" id="link_reference" value="<?php echo $not->link_reference; ?>" placeholder="Url da notícia">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="description">Descrição</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="description" id="description"  rows="3"><?php echo $not->description; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="news">Noticia</label>
                        <div class="col-md-12">                            
                            <textarea class="form-control" name="news" id="news" rows="10" ><?php echo $not->news; ?></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="modifieddate" id="modifieddate" value="<?php echo date('d/m/Y'); ?>" />                    
                    <div class="form-group form-group-md">
                        <label class="col-sm-2 control-label" for="published">Status</label>
                        <div class="col-md-12">
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
                          <style>
                                .progress-menu{
                                    display: none;
                                    width:32px;
                                    margin: 2px;
                                    
                                }
                            </style>
                            <input type="hidden" name="createby" id="createby" value="1" />
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="" class="btn btn-default btn-atualiza-not"><img src="<?php echo base_url('assets/img/progress-menu.gif'); ?>" class="progress-menu" /> Salvar</button>
                        </div>
                    </div>
                
            </div>
        
          <div class="col-md-4">
                 <div class="panel panel-default">
                     <div class="panel-heading">Destacar ná Página inicial</div>
                
               <div class="panel-body">
                    <div class="form-group form-group-md">
                        <label class="col-md-4 control-label" for="published">Publicar</label>
                        <div class="col-md-6">
                            <select class="form-control" name="published"id="published">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>  
                        </div> 
                    </div>
                <div class="form-group">
                     <label class="col-md-4 control-label" for="fature">Destacar?</label>
                   <div class="col-md-6">
                       <label class="col-md-4 control-label">
                    <input type="checkbox" value="1" name="fature" id="fature" /> Sim
                    <input type="checkbox" value="0" name="fature" id="fature" /> Não
                       </label>
                   </div>
                </div>
            </div>
                 </div>
          </div> 
        </div>
       
    
           
                         </form> 
                <?php endforeach; ?>
            </div>                            
           
</section>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
              // alert();
            $('.btn-atualiza-not').click(function(){
            $('.progress-menu').css("display","inline");
                var dados = jQuery( "#form-update" ).serialize();

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
            
 <script src="<?php echo base_url('assets/libs/tinymce/tinymce.min.js'); ?>"></script>
             
            <script>
                tinyMCE.init({
	 selector: "textarea#news",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
});
</script>
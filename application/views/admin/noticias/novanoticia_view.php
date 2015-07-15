<section id="novanoticia">
    
        <div class="row">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-plus"></span> Adicionar nova Noticia</h1>
                <hr />
            </div>
        </div>
    
        <div class="row">
             <form id="form-new-noticia" class="form-horizontal" method="POST" id="nova" action="">
            <div class="col-md-8">
               
                    <div class="form-group">                          
                        <label class="col-sm-2 control-label" for="title">Titulo</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="title" id="title" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"  for="link_reference">Link</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="link_reference" id="link_reference" placeholder="Url da notícia">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="description">Descrição</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="news">Noticia</label>
                        <div class="col-md-10">                            
                            <textarea class="form-control news" name="news" id="news" rows="10" ></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="creationdate" id="creationdate" value="<?php //echo date(); ?>" />                    
                   
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
                            <button type="" class="btn btn-default btn-new-not"><img src="<?php echo base_url('assets/img/progress-menu.gif'); ?>" class="progress-menu" /> Salvar</button>
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
                    <input type="checkbox" value="1" name="fature" id="fature" data-target="#myModal" /> Sim
                       </label>
                   </div>
                </div>
            </div>
                 </div>
                
           
        </div>
                  </form>
             <div class="col-md-4">
                 <div class="panel panel-default">
                     <div class="panel-heading">Imagem de destaque</div>
  <div class="panel-body">
  <div class="form-group">
                    <button class="btn btn-block btn-success " id="media">Escolha uma imagem</button>
    <p class="help-block">Extenções: jpg,png.</p> 
                </div>
  </div>
</div>
               
               
           
        </div>
        </div>
    
    <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
$('#myModal').modal('show')
});
$('#media').click(function(){
  //alert(); 
  $('#myModal').modal('show');

});


         

            </script>
                
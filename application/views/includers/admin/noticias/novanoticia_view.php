<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Noticia <small>Cadastrar nova</small>
                </h1>
                <ol class="breadcrumb">
                    <li >
                        <a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li c>
                        <a href="<?php echo base_url('admin/noticias'); ?>"><i class="fa fa-fw fa-table"></i> Noticias</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-fw fa-laptop"></i> Nova Noticia
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->                
        <!-- /.row -->           
        <div class="col-lg-12">  
            <form id="form-new-noticia" class="form-horizontal" method="POST" id="nova" action="">
                         
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-laptop fa-fw"></i> Cadastre uma nova noticia</h3>
                </div>
                <div class="panel-body">
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
                            <input type="hidden" name="creationdate" id="creationdate" value="<?php echo date('Y-m-d'); ?>" />                    
                            
                            <div class="form-group">
                                
                                <input type="hidden" name="createby" id="createby" value="<?php echo $user_dados['0']->id; ?>" />
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="" class="btn btn-default btn-new-not"> Salvar</button>
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
                                            <input type="checkbox" value="1" name="fature" id="fature"  /> Sim
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>                                                
                    </div>                                                
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="returnarchive"></div>                        
                            </div>
                        </div>
                    </div>
                    <div id="visualizar"></div>                    
                    </form> 
            <div class="col-md-4">        
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            Escolha uma imagem
                        </button>                                               
                    </div>                                                                                                                 
                </div>
            </div>
</div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<!-- /#wrapper -->   
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Anexos</h4>
            </div>
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Galeria</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Enviar um novo Arquivo</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <form id="selectimg" method="post"> 
 <?php foreach ($archive as $file): ?>
                            
                            <label class="col-md-4">
                                <input  type="radio" name="id_attachments" id="id_attachments" value="<?php echo $file->id;?>"><img src="<?php echo base_url('libs/upload/'.$file->url);?>" class="img-responsive col-md-12"  />
                            </label>
        <?php endforeach; ?>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="select" >Selecionar</button>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="visualizar-temp"></div>
                            </div>    
                        </div>
                        <form id="file_env" method="post" enctype="multipart/form-data" action="upload.php">
                            
                            <a id="btnFake" class="btn btn-green btn-lg">Selecionar Imagem</a>                                       
                            <input type="file" id="imagem" name="imagem" data-input="false" data-buttonText="Selecionar Arquivo" style="display: none;"  />
                        </form> 
                        <p class="help-block">Extenções: jpg,png.</p> 
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="save" data-dismiss="modal">Salvar</button></div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">                
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>                
            </div>
        </div>
    </div>
</div>
<script>   
    $(document).ready(function(){     
        $('.btn-new-not').click(function(){                
            $(this).html('Salvando');
            var dados = jQuery('#form-new-noticia').serialize();
            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url('admin/news_cad/');?>",
                data: dados,
                dataType: "json"        
    }).done(function(){                  
        window.location.replace('<?php echo base_url('admin/noticias/'); ?>');
    });
    return false;            
    });                                                               
    });    
    document.getElementById('btnFake').addEventListener('click', function(){
    document.getElementById('imagem').click();
    });
    $(function(){$('#imagem').change(function(){
            $('#file_env').ajaxSubmit({
                type:'post',                
                url : '<?php echo base_url('upload/enviar'); ?>',
                target:'#visualizar-temp',                        
            });                   
    return false;                   
    });
    });     
    $(function(){
    $('#save').click(function(){
        $(this).html('Salvando');
        $('#formarchive').ajaxSubmit({
            type:'post',                
            url : '<?php echo base_url('upload/salvar_archive'); ?>',
            target:'#returnarchive',
        });
$('#myModal').modal('hide');
return false;
});
});    
$(function(){
$('#select').click(function(){
    $('#selectimg').ajaxSubmit({
        type:'post',
        url: '<?php echo base_url('upload/selectimg');?>',
        target:'#returnarchive',
    });
    $('#myModal').modal('hide');
    });
    });
                            </script>                        
                            <script src="<?php echo base_url('libs/global/libs/tinymce/tinymce.min.js'); ?>"></script>
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
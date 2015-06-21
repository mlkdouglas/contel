
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Painel de Controle <small>Noticias</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Notícias
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                

                <a href="<?php echo base_url('admin/novanoticia'); ?>" class="btn btn-primary">Novo</a>
    <br><br>
    <div class="row">
      <div class="table-responsive">
        <table class="table  " id="table">
          
            <th>Noticia ID</th>
            
            <th>Título</th>
            <th width="2%" >Status</th>
            <th>Data Criação</th>
            <th>Ultima atualização</th>
            <th>#</th>
            <?php foreach ($not_list as $list): ?>
            <tr>
                <td><?php echo $list->id;?></td>
                
                <td><?php echo $list->title;?></td>
                <td><?php echo(!$list->published != 0)?"Inativo":"Ativo";?></td>
                <td><?php echo $list->creationdate;?></td>
                <td><?php echo $list->modifieddate;?></td>
                <td><a href="<?php echo base_url('admin/atualizanoticia/'.$list->id); ?>"><span class="glyphicon glyphicon-pencil" title="Editar"></span></a> | 
                    <a href="#" id="del"><span class="glyphicon glyphicon-trash" title="Excluir"></span></a></td>
            </tr>
            <?php endforeach; ?>
            
        </table>
      </div>
         <div class="nav">
                    <style>
                        .pagination strong{
                            margin-left:0;
                            border-top-left-radius:4px;
                            border-bottom-left-radius:4px;
                            position: relative;
                            float: left;
                            padding: 6px 12px;    
                            margin-left: -1px;
                            line-height: 1.42857143;
                            color: #337ab7;
                            
                            text-decoration: none;
                            background-color: #fff;
                            border: 1px solid #ddd;}
                    </style>
                    <ul class="pagination">
                        <li>
                            <?php
                            echo $paginacao;
                            ?>
                        </li>
                        
                    </ul>
                </div>
    </div>
   <!-- Button to trigger modal -->
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
  <div class="modal-body">
       <img src="<?php echo base_url('assets/img/animated-web-preloader.gif'); ?>" style="margin-left: 40%; margin-top: 10%; " />
     
  </div>
 
</div>
    
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
  
    
     <script type="text/javascript">
                // Use jQuery com a variavel $j(...)
                var $url = '<?php echo base_url("admin/deletar/{$list->not_id}/del"); ?>';
                $(document).ready(function() { 
                   
               $('#del').click(function(){
                  $confirma = confirm("Desja realmente excluir este anúncio?");
                   if($confirma){
                       $('#myModal').modal('show');
             jQuery.ajax({
            type: "GET",
            url: $url,
            
            success:function(response){
            
             window.location.replace('<?php echo base_url('admin/noticias/'); ?>');
            },
         error: function(xhr, textStatus, errorThrown) {
                alert('Error!  Status = ' + xhr.status);
             }

        });       
            
               }else{
                   
               }
               });
    });
    </script>
        
        
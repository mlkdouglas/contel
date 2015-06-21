
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
                <td><?php echo $list->not_id;?></td>
                
                <td><?php echo $list->not_titulo;?></td>
                <td><?php echo(!$list->not_status != 0)?"Inativo":"Ativo";?></td>
                <td><?php echo date('d/m/Y', strtotime($list->not_criationdate));?></td>
                <td><?php echo date('d/m/Y', strtotime($list->not_modifidate));?></td>
                <td><a href="#"><span class="glyphicon glyphicon-pencil" title="Editar"></span></a> | 
                <a href="<?php echo base_url('admin/deletar/'.$list->not_id); ?>"><span class="glyphicon glyphicon-trash" title="Excluir"></span></a></td>
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
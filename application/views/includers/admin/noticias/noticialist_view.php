<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Lista de notícias</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li >
                                <a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> Noticias
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                         <div class="panel-body">
                                <div class="alert alert-info">
                                    <p>Crie uma nova noticia para seu site <a href="<?php echo base_url('admin/novanoticia'); ?>" class="btn btn-info "><i class="fa fa-newspaper-o"></i> clique aqui</a>.</p>
                                </div>
                           
                    </div>
                </div>
                </div>
                <!-- /.row -->


                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#publicadas" aria-controls="publicadas" role="tab" data-toggle="tab"> <h3 class="panel-title"><i class="fa fa-check-circle-o fa-fw"></i>Publicadas</h3></a></li>
    <li role="presentation"><a href="#inativas" aria-controls="inativas" role="tab" data-toggle="tab"> <h3 class="panel-title"><i class="fa fa-circle-o-notch fa-fw"></i>Inativas</h3></a></li>
    <?php foreach ($user_dados as $user):
     
        if($user->define === "Admin"){
            echo ' <li role="presentation"><a href="#excluidos" aria-controls="excluidos" role="tab" data-toggle="tab"> <h3 class="panel-title"><i class="fa fa-remove fa-fw"></i>Excluidas</h3></a></li>';
        }
    endforeach;
    ?>
    </ul>
                               
                            </div>
                            <div class="panel-body">
                                <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="publicadas">
    <div class="table-responsive">
        <h4>Publicadas</h4>
                                <table class="table">
                                    <th>#</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Descrição</th>
                                    <th>Data de Criação</th>                                    
                                    <th>Ultima Modificação</th>                                    
                                    <th>Destaque</th>
                                    <th>Autor</th>
                                    <th>Ação</th>
                                   <?php foreach($noticia_list_published as $not_active): ?> 
                                    <tr>
                                        <td><?php echo $not_active->news_id; ?></td>
                                        <td> <a href="#" class="thumbnail col-md-3 col-xs-3 col-sm-3 col-lg-3 col-md-offset-2 col-lg-offset-2">
                                               <?php if($not_active->archive_url == null){echo '<i class="fa fa-empire fa-4x"></i>';}else{echo '<img src="'.$not_active->archive_url.'" alt="<?php echo '.$not_active->archive_title.'">';} ?>
                                             </a>
                                        </td>
                                        <td><?php echo $not_active->news_title; ?></td>
                                        <td><?php echo $not_active->news_description; ?></td>
                                        <td><?php echo $not_active->news_creationdate; ?></td>
                                        <td><?php echo $not_active->news_modifieddate; ?></td>
                                        <td><?php if($not_active->news_fature == 1){echo '<i class="fa fa-check"></i>';}else{echo '<i class="fa fa-remove"></i>';} ?></td>
                                        <td><?php echo $not_active->admin_user_name; ?></td>
                                        
                                        <td><a href="#"><i class="fa fa-edit fa-1x" title="Editar"></i> </a>| <a href="#"><i class="fa fa-remove fa-1x" title="Excluir"></i> </a>| <a href="#"><i class="fa fa-laptop" title="Ver a noticia"></i></a></td>
                                    </tr>
                                    <?php                                        
                                    endforeach;
                                    ?>
                                    
                                </table>
                              </div></div>
    <div role="tabpanel" class="tab-pane" id="inativas">
    <div class="table-responsive">
        <h4>Inativas</h4>
                                <table class="table">
                                    <th>#</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Descrição</th>
                                    <th>Data de Criação</th>
                                    <th>Ultima Modificação</th>                                    
                                    <th>Destaque</th>
                                    <th>Autor</th>
                                    <th>Ação</th>
                                    <?php foreach($noticia_list_inative as $not_inativo): ?> 
                                    <tr>
                                        <td><?php echo $not_inativo->news_id; ?></td>
                                        <td> <a href="#" class="thumbnail col-md-3 col-xs-3 col-sm-3 col-lg-3 col-md-offset-2 col-lg-offset-2">
                                               <?php if($not_inativo->archive_url == null){echo '<i class="fa fa-empire fa-4x"></i>';}else{echo '<img src="'.$not_inativo->archive_url.'" alt="<?php echo '.$not_inativo->archive_title.'">';} ?>
                                             </a>
                                        </td>
                                        <td><?php echo $not_inativo->news_title; ?></td>
                                        <td><?php echo $not_inativo->news_description; ?></td>
                                        <td><?php echo $not_inativo->news_creationdate; ?></td>
                                        <td><?php echo $not_inativo->news_modifieddate; ?></td>
                                        <td><?php if($not_inativo->news_fature == 1){echo '<i class="fa fa-check"></i>';}else{echo '<i class="fa fa-remove"></i>';} ?></td>
                                        <td><?php echo $not_inativo->admin_user_name; ?></td>
                                        
                                        <td><a href="#"><i class="fa fa-edit fa-1x" title="Editar"></i> </a>| <a href="#"><i class="fa fa-remove fa-1x" title="Excluir"></i> </a>| <a href="#"><i class="fa fa-laptop" title="Ver a noticia"></i></a></td>
                                    </tr>
                                    <?php                                        
                                    endforeach;
                                    ?>
                                    
                                </table>
                              </div>
    </div>
       <?php foreach ($user_dados as $user):
        if($user->define === "Admin"){ ?>
      <div role="tabpanel" class="tab-pane" id="excluidos">
    <div class="table-responsive">
        <h4>Excluidas</h4>
                                <table class="table">
                                    <th>#</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Descrição</th>
                                    <th>Data de Criação</th>
                                    <th>Ultima Modificação</th>
                                    <th>Destaque</th>
                                    <th>Autor</th>
                                    <th>Ação</th>
                                    <?php foreach($noticia_list_remove as $not_removed): ?> 
                                    <tr>
                                        <td><?php echo $not_removed->news_id; ?></td>
                                        <td> <a href="#" class="thumbnail col-md-3 col-xs-3 col-sm-3 col-lg-3 col-md-offset-2 col-lg-offset-2">
                                                <?php if($not_removed->archive_url == null){echo '<i class="fa fa-empire "></i>';}else{echo '<img src="'.$not_removed->archive_url.'" alt="<?php echo $not_removed->archive_title;?>">';} ?>
                                            </a>
                                        </td>
                                        <td><?php echo $not_removed->news_title; ?></td>
                                        <td><?php echo $not_removed->news_description; ?></td>
                                        <td><?php echo $not_removed->news_creationdate; ?></td>
                                        <td><?php echo $not_removed->news_modifieddate; ?></td>
                                        <td><?php if($not_removed->news_fature == 1){echo '<i class="fa fa-check"></i>';}else{echo '<i class="fa fa-remove"></i>';} ?></td>
                                        <td><?php echo $not_removed->admin_user_name; ?></td>
                                        
                                        <td><a href="#"><i class="fa fa-edit fa-1x" title="Editar"></i> </a>| <a href="#"><i class="fa fa-remove fa-1x" title="Excluir"></i> </a>| <a href="#"><i class="fa fa-laptop" title="Ver a noticia"></i></a></td>
                                    </tr>
                                    <?php                                        
                                    endforeach;
                                    ?>
                                    
                                </table>
                              </div>
    </div>
        <?php } endforeach; ?>
        
    </div>
                                
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
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

    </div>
    <!-- /#wrapper -->
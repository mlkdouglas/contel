<section id="reclamacao">
    <div class="container">
         <?php if($n_protocolo != null) { ?>
        <?php foreach ($n_protocolo as $protocolo): ?>
        
        <div class="col-md-12">
            <h1><small>Consulta protocolo numero </small><?php echo $protocolo->protocol; ?>    </h1>
            <hr />
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>N</th>
                        <th>Assunto</th>
                        <th>Data de Criação</th>
                        <th>Data de Atendimento</th>
                        <th>Status</th>
                        <th>Responsavel</th>
                        <th>Detalhes</th>
                    </tr>
                    <tr>
                        <td><?php echo $protocolo->protocol; ?></td>
                        <td><?php echo $protocolo->title_define_complaint; ?></td>
                        <td><?php echo date('d/m/Y',  strtotime($protocolo->creationdate)); ?></td>
                        <td><?php if ($protocolo->modifieddate != "0000-00-00 00:00:00"){echo date('d/m/Y H:i:s', strtotime($protocolo->modifieddate));}else{null;}; ?></td>
                        <td><?php echo $protocolo->status_name; ?></td>
                        <td><?php if($protocolo->admin_name != null){echo $protocolo->admin_name;}else{null;}?></td>
                        <td><a href="#" class="btn btn-green" id="verdetalhe">Ver detalhes</a></td>                        
                    </tr>
                </table>
            </div>            
            <div class="row" id="detalhes">
                <div class="col-md-12">
                    <hr>
                    <h3>Detalhes</h3>                    
                    <h4>Assunto:  <?php echo $protocolo->related; ?> <small> <?php echo 'criado em '.date('d/m/Y', strtotime($protocolo->creationdate));?></small></h4>
                    <h4>Reclamação</h4>
                    <p><?php echo $protocolo->complaint; ?></p>
                    <hr>
                    <h4>Comentários</h4>
                    
                    <?php if ($comentarios != null){ ?>
                    <?php foreach($comentarios as $coment){ ?>                    
                    <div class="media">                        
                        <div class="media-body">
                            <h4 class="media-heading">Usuário <?php echo $coment->admin_name; ?> <small><?php echo date('d/m/Y H:i:s',strtotime($coment->creationdate)); ?></small></h4>                                  
                            <p><?php echo $coment->coment; ?></p>
                            <p><a href=""><span class="glyphicon glyphicon-share-alt"></span> Responder</a></p>
                            <div class="media">
                                 <?php if($coment_parent != null) { ?>
                        <?php foreach ($coment_parent as $parent){ ?>
                               
                                <div class="media col-md-11 col-md-offset-1">
                                    <div class="media-body">
                                        <h4 class="media-heading">Usuário <?php echo $parent->user_name; ?> <small><?php echo date('d/m/Y H:i:s',strtotime($parent->creationdate)); ?></small></h4>
                                           <p><?php echo $parent->coment; ?> </p>
                                           <p><a href=""><span class="glyphicon glyphicon-share-alt"></span> Responder</a></p>
                                    </div>
                                </div>
                        <?php }} ?>
                        
                            </div>
                        </div>                       
                    </div>               
                    
                    <?php } }else{echo 'Nenum comentário até o momento.';}?>                    
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php }else{ ?>
        <div class="col-md-12">
            <h1>Nenhum protocolo encontrado, por favor tente outro numero de protocolo</h1>
            <hr />                        
        </div>
        <?php } ?>        
    </div>
</section>
<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script>
$(document).ready(function(){
   $('#detalhes').hide();
   $('#verdetalhe').click(function(){
      $('#detalhes').show(400);
      //alert();
   });
   
})    ;

</script>
<section id="noticias">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1>Noticias</h1>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
                <div class="row">
                    <h5>Resultados encontrados: <span class="badge"><?php echo $total_result; ?></span></h5>
                </div>
                <div class="row"><hr></div>
                <div class="row">
                    <?php foreach($not_list as $noticias): ?>
                    <div class="media">
                
                   
                        <div class="media-left">
                            <a href="<?php echo base_url('noticia/'.$noticias->id); ?>">
                                
                        </div>                        
                        <div class="media-body">
                             <a href="<?php echo base_url('noticia/'.$noticias->id); ?>">
                            <h4 class="media-heading"><?php echo $noticias->title; ?></h4>
                            <?php echo $noticias->description;?>
                             </a>
                        </div>
                   
                        <hr>
                        </div>
                    <?php endforeach; ?>
                    
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
        </div>
    </div>
</section>

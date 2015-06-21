
    
    <section class="cadastrar-email">
        <div class="container">
            <!--div class="col-md-12">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class=" col-md-6  ">
                            <input type="text" class="form-control" placeholder="Cadastre seu e-mail e receba nossos informes" />
                        </div>
                        <button type="submit" class="btn btn-green col-md-1 ">Cadastrar</button>
                    </div>
                </form>
            </div-->
            
            <!--div class="col-md-3" >
                <div class="enquete">
                    
                    <h1>Enquete</h1>
                    
                    <h2>O que você gostaria de ver com mais frequência no portal do consumidor?</h2>
                    
                    
                    <ul>
                        <li>Mais esclarecimentos sobre os meus direitos em relação aos serviços de telecom</li>
                        <li>Mais notícias atualizadas sobre telecom</li>
                        <li>Mais enquetes e curiosidades sobre telecom</li>
                        <li>Mais dados sobre o desempenho das prestadoras</li>
                    </ul>
                    
                </div>
            </div-->
        </div>
    </section>
    
   <section class="content-enquete">
       <div class="container">
           
           <div class="col-md-8">
               <div class="enquete">
                    <h1>Outra Coisa</h1>
                   
               </div>
           </div>
           
           <div class="col-md-4">
               <div class="enquete">
                    <h1>Enquete</h1>
                    <h2>O que você gostaria de ver com mais frequência no portal do consumidor?</h2>
                    
                    <ul>
                        <li>
                            <input type="radio" name="enquete" />
                            Mais esclarecimentos sobre os meus direitos em relação aos serviços de telecom
                        </li>
                        <li>
                            <input type="radio" name="enquete" />
                            Mais notícias atualizadas sobre telecom
                        </li>
                        <li>
                            <input type="radio" name="enquete" />
                             Mais enquetes e curiosidades sobre telecom
                        </li>
                        <li>
                            <input type="radio" name="enquete" />
                             Mais dados sobre o desempenho das prestadoras
                        </li>
                    </ul>
               </div>
           </div>
           
           
               
       </div>
    </section>
    <div class="clearfix"></div>
    
    <section class="content-news">
        
        
        
        <div class="container">
            <div class="news-title col-md-12">
                News
                <hr />
            </div>
            
             <?php foreach ($noticias as $row) : ?>
             <div class="col-md-3 " >
                <div class="content-news-item">
                    <h1><?php  echo $row->title; ?></h1>
                    <div class="news-data"><?php echo $row->modifieddate; ?></div>
                   
                    <div class="news-titulo">Edição n.<?php echo $row->id; ?></div>
                    <div class="news-descricao">
                        <?php echo $row->descricao; ?>
                    </div>
                    <div class="news-shared"><img src="<?php echo base_url('assets/img/ico-shared.png');?>"></div>
                </div>
            </div>
        <?php endforeach; ?>    
            
        </div>
        
    </section>
    <section class='slide-noticias'>
        <div class='container'>
            
                <!--img src='<?php echo base_url('assets/img/slide-noticias.png');?>' /-->
                
                <div class="content-slide">
                    <div class="col-md-7" >
                        <div class="content-image">
                            
                            <iframe  style="width:100%; height:401px;"  src="https://www.youtube.com/embed/-O9cT7Fjp3c?rel=0&amp;showinfo=0" frameborder="0" border="0"  allowfullscreen></iframe>
                            
                            <!--img src="assets/img/slide/image1.png" /-->
                        </div>
                    </div>
               
                    <div class="col-md-5 content-text">
                        <!--div class="">
                            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet, tellus eget tristique pharetra, ex tortor blandit tortor, at lobortis lectus risus id sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                            
                            <div class="control-button">
                                <div class="previews"><img src="<?php echo base_url('assets/img/slide/ico-previews.png');?>" /></div>
                                <div class="next"><img src="<?php echo base_url('assets/img/slide/ico-next.png');?>" /></div>
                            </div>
                        </div-->
                        <h1>Faça sua reclamação</h1>
                        <p>O Contel quer te ouvir</p>
                        <textarea class='form-control' style='height:260px;'></textarea>
                        
                        <button class='btn btn-green ' style='margin:10px auto;'>Click aqui para reclamar</button>
                        
                    </div>
                    
                </div>
            
        </div>
    </section>
    
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
<section id="novanoticia">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-check"></span> Noticia Cadastrada</h1>
                <hr />
                
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Titulo <?php  echo $dados['not_titulo']; ?></h3>
  </div>
  <div class="panel-body">
      <p>   Link <?php echo $dados['not_link']; ?> </p>
      <p>   Descrição <?php echo $dados['not_descricao']; ?> </p>
      <p>   Noticia <?php echo $dados['not_noticia']; ?> </p>
      <p>   Status <?php echo $dados['not_status']; ?> </p>
      
      
  </div>
                </div>
                    
</div>
            </div>
        <div class="row">
            <div class="col-md-10">
                Adicionar anexos a noticia?
                <form class="form-horizontal">
                   <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
                         
                </form>
                      
            </div>
        </div>
             
        </div>
    
</section>
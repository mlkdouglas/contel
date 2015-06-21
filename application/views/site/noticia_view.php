<section id="noticia">
    <div class="container">
        <div class="row-">
            <div class="col-md-12">
                <h1>Noticia</h1>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-offset-2">
                <?php foreach($noticia as $not): ?>
                <h3><?php echo $not->title; ?> </h3>
                <h4><small> Ultima atualização <?php echo $not->modifieddate; ?></small></h4>
                
                <em class="lead"><?php echo $not->description; ?></em>
                
                 <p><?php echo $not->news; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
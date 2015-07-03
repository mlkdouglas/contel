<section id="reclamacao">
    <div class="container">
        <div class="col-md-12">
            
            <?php foreach ($reclamar as $rec): ?>
        
            <h1>Reclamação enviada: <small>Protocolo <?php echo $rec->protocol; ?> </small></h1>
            <hr />
            <p>
           Sua reclamação foi enviada com sucesso anote seu numero de protocolo:  <?php echo $rec->protocol; ?></p>

            <p>
           Você receberá um email com dados para acesso com usuario e senha para futuras consultas. </p><br />
            <p>
           Agradecemos o contato. </p><br />
            
        </div>
                    <?php endforeach; ?>
    </div>
</section>
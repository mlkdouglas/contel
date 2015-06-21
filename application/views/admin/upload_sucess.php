<h3>Seu arquivo foi enviado com sucesso!</h3>

<ul>
<?php foreach($upload_data as $item => $value):?>
<li><?=$item;?>: <?=$value;?></li>
<?php endforeach; ?>
</ul>

<p><?=anchor('upload', 'Deseja enviar outro?'); ?></p>
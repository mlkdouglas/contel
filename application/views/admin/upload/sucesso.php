
<ul>

<?php foreach ($arquivo_data as $item => $valor) {?>
        <li><?php echo $item;?>: <?php echo $valor;?></li>
<?php } ?>
  
</ul>
  
<p><?php echo anchor('admin/upload', 'Enviar outro arquivo!'); ?></p>
  
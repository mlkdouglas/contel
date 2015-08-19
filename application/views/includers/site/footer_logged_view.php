<section id="footer">
        
            
            <hr class="btn-green" style="border-color:#a4c735;"/>
            
            <div class="footer">
                <div class="container pb-20">
                    <div class="col-md-2">
                        <img width="120" src="<?php echo base_url('/libs/site/img/logo-contel.png');?>">
                    </div>

                    <div class="col-md-8 mt-10 ">
                        <div class="col-md-10t text-center">
                            
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus alique

                        </div>
                    </div>

                    <div class="col-md-2 mt-10">
                        <ul class="no-ul-style ul-inline color-gray pull-right">
                            <li><i class="fa fa-rss fa-1x"></i></li>
                            <li><i class="fa fa-facebook fa-1x"></i></li>
                            <li><i class="fa fa-twitter fa-1x"></i></li>
                            <li><i class="fa fa-instagram fa-1x"></i></li>

                        </ul>
                    </div>
                </div>
            </div>
            
            
        </div>
        
        
    </section>

<script>
    
    $(function(){
         $('#login').ajaxForm({
          data: $(this).serialize(), 
          type: 'POST',
          url: '<?php echo base_url('login/logar'); ?>',
          dataType: 'json',
  beforeSubmit:function() { 
      $('.loaderlogin').html('Aguarde...');
      
    }, 
  beforeSend: function(e) {
      $('.loaderlogin').html('Aguarde...');
  },
 // uploadProgress: function(event, position, total, percentComplete) {},
  complete: function(data) {
    
     location.reload(true);
     }
  });
    $('#usercad').ajaxForm({
          data: $(this).serialize(), 
          type: 'POST',
          url: '<?php echo base_url('login/caduser'); ?>',
          dataType:'json',
  beforeSubmit:function() { 
      $('.loader').html('Aguarde...');
      
    }, 
  beforeSend: function(e) {
      $('.loader').html('Aguarde...');
  },
 // uploadProgress: function(event, position, total, percentComplete) {},
  success: function(data) {
     if(data.Error > "0"){
         alert(data.Error);
     }else{
 location.reload(true);
  }
  }
  });
    });
  $('#logout').on('click',function(){
                            $('.loader-user').html('Aguarde...');
                            $.ajax({
                                 url:'<?php echo base_url('login/logout'); ?>',
                                  }).done(function(){
                                   location.reload(true);
                             });
                         });
                         </script>
</body>
</html>



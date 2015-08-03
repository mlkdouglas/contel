
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('/libs/site/css/bootstrap.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/libs/site/css/font-awesome.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/libs/site/css/vertical-rhythm.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/libs/site/css/style.css');?>">
        <script type="text/javascript" src="<?php echo base_url('/libs/site/js/jquery-1.11.3.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/libs/site/js/jquery.form.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/libs/site/js/bootstrap.min.js'); ?>"></script>
       
	<title>Contel</title>
        
</head>
<body>  

    
    <section id="header">
        <div class="container">
            <div class="col-md-3">
                <img src="<?php echo base_url('/libs/site/img/logo-contel.png');?>">
            </div>
            
            <div class="col-md-4 mt-10 ">
                <form id="searshform" method="post" action="<?php echo base_url('consultaprotocolo'); ?>"><div class="col-md-10">
                    <input type="text" placeholder="Consulte seu protocolo" class="form-control " name="protocol" id="protocol" />
                    
                </div>
                <button class="search"> <i style="font-size:20px;margin-top:5px;" class="fa fa-search  color-gray"></i></button>
                </form>
                <script>
                    $(function(){
                         $('.search').click(function(){
                      
                        var dados = $('#searshform').serialize();
                       $('#searshform').ajaxSubmit({
                          
                           url: '<?php echo base_url('reclamar/protocolo'); ?>',
                           type: 'post',
                           data:dados,
                            dataType: "json",
                           success:function(data){
                                if(data.Error >= '0'){
                                alert(data.Error);
                                return false;
                            }
                           if(data.Success){
                               $('#searshform').submit();
                           }
                            
                           }
                       });
                      return false;
                       
                       });
                    
                 
                   });
                
                </script>
            </div>
            
            <div class="col-md-5 mt-10">
                <ul class="no-ul-style ul-inline color-gray pull-right">
                    <li><i class="fa fa-rss fa-2x"></i></li>
                    <li><i class="fa fa-facebook fa-2x"></i></li>
                    <li><i class="fa fa-twitter fa-2x"></i></li>
                    <li><i class="fa fa-instagram fa-2x"></i></li>
                    
                </ul>
            </div>
        </div>
        
    </section>
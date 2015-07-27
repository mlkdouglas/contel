<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contel - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('libs/admin');?>/css/bootstrap.min.css" rel="stylesheet">
 <!-- Custom Fonts -->
    <link href="<?php echo base_url('libs/admin');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
  
        @import url(http://weloveiconfonts.com/api/?family=entypo);
@import url(http://fonts.googleapis.com/css?family=Roboto);

/* zocial */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; 
}


h2 {
  color:rgba(255,255,255,.8);
  margin-left:12px;
}

body {
  background: #272125;
  font-family: 'Roboto', sans-serif;
  
}

form {
  position:relative;
  margin: 50px auto;
  width: 380px;
  height: auto;
}

input {
  padding: 16px;
  border-radius:7px;
  border:0px;
  background: rgba(255,255,255,.2);
  display: block;
  margin: 15px;
  width: 300px;  
  color:white;
  font-size:18px;
  height: 54px;
}

input:focus {
  outline-color: rgba(0,0,0,0);
  background: rgba(255,255,255,.95);
  color: #e74c3c;
}

button {
  float:right;
  height: 121px;
  width: 50px;
  border: 0px;
  background: #e74c3c;
  border-radius:7px;
  padding: 10px;
  color:white;
  font-size:22px;
}

.inputUserIcon {
  position:absolute;
  top:68px;
  right: 80px;
  color:white;
}

.inputPassIcon {
  position:absolute;
  top:136px;
  right: 80px;
  color:white;
}

input::-webkit-input-placeholder {
  color: white;
}

input:focus::-webkit-input-placeholder {
  color: #e74c3c;
}
    </style>



 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<section id="header">
    <div class="container-fluid">
        <h2><span class="entypo-briefcase"></span> CONTEL - DASHBOARD</h2>
    </div>
</section>
  <!-- /.container-fluid -->
            <div class="container-fluid">
                <form action="" id="loginadmin" method="post">
  <h2><span class="entypo-login"></span> Login</h2>
  <button class="submit" type="submit"><span class="entypo-lock"></span></button>
  <span class="entypo-user inputUserIcon"></span>
  <input type="email" class="user" id="email" name="email" placeholder="ursername" required/>
  <span class="entypo-key inputPassIcon"></span>
  <input type="password" class="pass" id="password" name="password" placeholder="password" required/>
</form>
            </div>
        </div>
        <!-- /#page-wrapper -->
        

    <!-- jQuery -->
    <script src="<?php echo base_url('libs/global/libs');?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url('libs/global/libs');?>/js/jquery.form.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('libs/admin');?>/js/bootstrap.min.js"></script>

    <script>
 
$(".user").focusin(function(){
  $(".inputUserIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function(){
  $(".inputPassIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputPassIcon").css("color", "white");
});
</script>

<script>
$(function(){
    $('#loginadmin').submit(function(){
        var dados = $(this).serialize();
       $.ajax({
           data: dados,
           url: '<?php echo base_url('loginadmin/logar'); ?>',
          
           method: "post",
           success: function(){
               location.reload(true);
           }
       });
        return false;
    });
});
</script>
</body>

</html>

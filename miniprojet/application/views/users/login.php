<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Miniprojet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">        
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> 	
</head>
<body>
<div class="container">
    <h2 class="alert alert-info">User Login</h2>
    <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
    <form action="" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn btn-success" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p>
</div>
</body>
</html>
<body>
<nav class="navbar navbar-inverse" id="header">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>home">M3104 Miniprojet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="#"><a href="<?php echo base_url(); ?>home">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['loginName']) && $_SESSION['loginName']=='admin'){?>
          <li><a href="<?php echo base_url(); ?>users/registration"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
        <?php }?>
        <?php if (isset($_SESSION['loginName']) && $_SESSION['loginName']<>'admin'){?>
          <li><a href="<?php echo base_url(); ?>collection/index"><span class="glyphicon glyphicon-user"></span> Collection</a></li>
        <?php }?>

        <li><a href="<?php echo base_url(); ?>users/registration"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
        <li><a href="<?php echo base_url(); ?>users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="<?php echo base_url(); ?>users/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RIAN RAKA BLOG</title>
    

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/style.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="index.php">
              <img src="img/launch.png" width="30" height="30" class="d-inline-block align-top" alt="">
              RIAN RAKA BLOG
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/">Home</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/bio">portofolio</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/portofolio">Foto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/form">komentar</a>
            </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/contact.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form action="<?php echo base_url();?>index.php/welcome/komentar" method="POST"  novalidate>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="Nama">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Komentar anda</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kom"></textarea>
            </div>
                        <button type="submit" class="btn btn-warning" name="send">send</button>
              <!-- <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="send" >Send</button>
            </div> -->
          </form>
          <br>
          <?php if (isset($nama)) {?>
          <div class="card text-center bg-warning">
            <div class="card-header">
              KOMENTAR
            </div>
            <div class="card-body bg-light">
              <h5 class="card-title" >From: <?php echo $nama; ?></h5>
              <p class="card-text"><?php echo $kom; ?></p>
              
            </div>
            <div class="card-footer text-muted">
              Learn how to code :)
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
              </ul>
              <p class="copyright text-dark ">Copyright &copy; Rifqi ryandi Website 2018</p>
            </div>
          </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/js/clean-blog.min.js"></script>

  </body>

</html>

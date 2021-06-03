<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For Search Engine Meta Data  -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="yoursite.com" />

    <title></title>

    <!-- Favicon -->
    


    <!-- Main structure css file -->
    <link  rel="stylesheet" href="<?php echo base_url(); ?>jsjs/bootstrap.min.css">
    <link  rel="stylesheet" href="<?php echo base_url(); ?>jsjs/login-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<form method="post" action="<?php echo base_url('index.php/auth/login'); ?>">
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"> <!--animasi-->
        
    </div>
</div>
<!-- Preloader End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
            <!-- login start -->
            <div class="authfy-login">
                <!-- panel-login start -->
                <div class="authfy-panel panel-login text-center active">
                    <div class="authfy-heading">
                        <h3 class="auth-title">INI BERANDA</h3>
                        
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                                
                                <div class="form-group">
                                    <a href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a>
                                    
                                </div>
                            
                        </div>
                    </div>
                </div> <!-- ./panel-login -->




                
            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->
<!-- Javascript Files -->

<!-- initialize jQuery Library -->
<script src="<?php echo base_url(); ?>jsjs/jquery-2.2.4.min.js"></script>

<!-- for Bootstrap js -->
<script src="<?php echo base_url(); ?>jsjs/bootstrap.min.js"></script>

<!-- Custom js-->
<script src="<?php echo base_url(); ?>jsjs/custom.js"></script>
</form>
</body>
</html>

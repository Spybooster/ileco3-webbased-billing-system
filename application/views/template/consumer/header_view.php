<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ileco-III | Client- <?=consumer_info()->lname?>, <?=consumer_info()->fname?></title>
    <link rel="shortcut icon" href="<?=base_url('img/icon.png')?>">
    <!-- css -->
    <link href="<?=base_url('theme/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('theme/font-awesome/css/font-awesome.min.css')?>"" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('plugins/cubeportfolio/css/cubeportfolio.min.css')?>">
    <link href="<?=base_url('theme/css/nivo-lightbox.css')?>" rel="stylesheet" />
    <link href="<?=base_url('theme/css/default.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('theme/css/owl.carousel.css')?>" rel="stylesheet" media="screen" />
    <link href="<?=base_url('theme/css/owl.theme.css')?>" rel="stylesheet" media="screen" />
    <link href="<?=base_url('theme/css/animate.css')?>" rel="stylesheet" />
    <link href="<?=base_url('theme/css/style.css')?>" rel="stylesheet">
    <link href="<?=base_url('theme/css/templatemo_style.css')?>"  rel='stylesheet' type='text/css'>

    <!-- boxed bg -->
    <link id="bodybg" href="<?=base_url('theme/bodybg/bg63css')?>" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="<?=base_url('theme/color/blue.css')?>" rel="stylesheet">
    
     <style media="print">
            .Alarming{
                width: 20px; 
                background-color:#ad0909;
            }
            .Mild{
                width: 20px; 
                background-color:#cf752d;
            }
            
            .Default{
                width: 50px; 
                background-color:#ad0909;
            }
        </style>

    <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-left"><?=consumer_info()->fname.' '.consumer_info()->lname?></p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-right">Account Number: <?=consumer_info()->account_number?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">
        
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?=base_url('img/logo2.jpg')?>" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?=site_url('consumer/view')?>">Home</a></li>
                <li><a href="<?=site_url('consumer/bills')?>">Billing Account</a></li>
                <li><a href="<?=site_url('consumer/view/facilities')?>">Service&Facilities</a></li>
                <li><a href="<?=site_url('consumer/logout')?>">Logout</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>view/
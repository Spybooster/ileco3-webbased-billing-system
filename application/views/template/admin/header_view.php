<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ileco III |Admin</title>
    <link rel="shortcut icon" href="<?=base_url('img/icon.png')?>">
    <link href="<?=base_url('dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('dist/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('dist/css/prettyPhoto.css')?>" rel="stylesheet">
    <link href="<?=base_url('dist/css/price-range.css')?>" rel="stylesheet">
    <link href="<?=base_url('dist/css/animate.css')?>" rel="stylesheet">
	<link href="<?=base_url('dist/css/main.css')?>" rel="stylesheet">
	<link href="<?=base_url('dist/css/responsive.css')?>" rel="stylesheet">
	 <link rel="stylesheet" href="<?=base_url('dist/datatables/css/dataTables.bootstrap.css')?>">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="dist/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="dist/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="dist/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
    	.main-body{
    		min-height: 500px;
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
    
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?=base_url('dist/images/logo2.jpg')?>" alt="" width="150" height="40"/></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                <li><a href="<?=base_url('admin/dashboard')?>"><i class="fa fa-home"></i>Home |</a></li>
								<li><a href="<?=base_url('admin/account')?>"><i class="fa fa-users"></i>Accounts |</a></li>
								<li><a href="<?=base_url('admin/component')?>"><i class="fa fa-th-list"></i>Component |</a></li>
								<li><a href="<?=base_url('admin/category')?>"><i class="fa fa-list-alt"></i>Category |</a></li>
								<li><a href="<?=base_url('admin/setting')?>"><i class="fa fa-wrench"></i>Setting |</a></li>
								<li><a href="<?=base_url('logout')?>"><i class="fa fa-sign-out"></i>Logout |</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	<div class="main-body">
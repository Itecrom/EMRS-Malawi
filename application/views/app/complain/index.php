<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Electronic Medical Records System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <meta content="Electronic Medical Records System, EMRS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated Hospital information" name="description">
	 <meta content="This is a Prototype for the MUUNI FUND. Languages used are php,mysql,codeigniter,mvc,php frameworks" name="keywords">
	  <meta content="Leonard JJRA Mhone" name="author">

	  <meta property="og:site_name" content="Electronic Medical Records System">
	  <meta property="og:title" content="Electronic Medical Records System">
	  <meta property="og:description" content="EMRS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated hospital information.">
	  <meta property="og:type" content="website">
	  <meta property="og:image" content="public/img/new/hms_logo.png">
	  <meta property="og:url" content="">

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php require_once(APPPATH.'views/include/sidebar.php');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Complain Master</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Admin</a></li>
                        <li class="active">Complain Master</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div class="box">
                         		<form class="form-search" method="post" action="<?php echo base_url();?>app/complain">
                         		<div class="box-header">
                                    <h3 class="box-title"><a href="<?php echo base_url();?>app/complain/add" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a></h3>
                                    
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="search" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" name="btnSearch" id="btnSearch" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div><!-- /.box-header -->
								</form>
                        	<div class="box-body table-responsive no-padding">
                            	<?php echo $message;?>
                                
                            	<?php echo $table; ?>
                                
                            </div>
                            	<div class="box-footer clearfix">
                                	<?php echo $pagination; ?>
                                </div>
                        </div>
                    </div>
                 </div>
                 

                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
    </body>
</html>
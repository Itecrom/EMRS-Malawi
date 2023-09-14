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
        
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php require_once(APPPATH.'views/include/sidebar.php');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>In-Patient Master</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Doctor Module</a></li>
                        <li><a href="#">IPD</a></li>
                        <li class="active">In-Patient Master</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div class="box">
                         		
                         		<div class="box-body table-responsive no-padding">
                                    <h4 class="box-title">Search IPD Patient</h4>
                                    
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <form method="post" action="">
                                            <table cellpadding="3" cellspacing="3" width="100%">
                                            <tr>
                                            	<td>From Date</td>
                                                <td>To Date</td>
                                                <td>IPD/LastName/FirstName</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                            	<td><input class="form-control input-sm" name="cFrom" id="cFrom" type="text" value="<?php echo date("Y-m-d");?>" placeholder="From Date Registration" style="width: 130px;" required></td>
                                                <td><input class="form-control input-sm" name="cTo" id="cTo" type="text" value="<?php echo date("Y-m-d");?>" placeholder="to Date Registration" style="width: 130px;" required></td>
                                            	
                                                <td>
                                                <input type="text" class="form-control input-sm" name="search" id="search" placeholder="IPD/LastName/FirstName" style="width: 180px;">
                                                </td>
                                                <td>
                                                <button class="btn btn-sm btn-primary" name="btnSearch" id="btnSearch" type="submit"><i class="fa fa-search"></i> Search </button>
                                                </td>
                                            </tr>
                                            </table>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div><!-- /.box-header -->
                                
								
                            
                            <div class="box-footer clearfix">
                                	
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                    
                    	 <div class="box">
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
        
         <!-- BDAY -->
         <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#cFrom').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
				
				$('#cTo').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });
        </script>
        <!-- END BDAY -->
        
        
    </body>
</html>
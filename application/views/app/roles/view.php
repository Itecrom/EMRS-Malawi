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
                    <h1>User Roles</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">User Management</a></li>
                        <li><a href="<?php echo base_url()?>app/roles">User Roles</a></li>
                        <li class="active">View</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 <form role="form" method="post" action="<?php echo base_url()?>app/roles/updateRolePages" onSubmit="return confirm('Are you sure you want to save?');">
                 <input type="hidden" name="id" id="id" value="<?php echo $roles->role_id?>">
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div>
                         	
                            <div class="nav-tabs-custom">
                            	<ul class="nav nav-tabs">
                                	<li><a href="#tab_1" data-toggle="tab">General Information</a></li>
                                    <li class="active"><a href="#tab_2" data-toggle="tab">Role Permission</a></li>
                                </ul>
                                <div class="tab-content">
                                	<div class="tab-pane" id="tab_1">
                                		
                                		<br>
                                		<div class="form-group">
                                            <label for="exampleInputEmail1">Role Name</label>
                                            <input class="form-control input-sm" name="role_name" id="role_name" type="text" placeholder="Role Name" style="width: 350px;" required value="<?php echo $roles->role_name?>" readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Role Description</label>
                                            <input class="form-control input-sm" name="role_description" id="role_description" type="text" placeholder="Role Description" style="width: 350px;" required value="<?php echo $roles->role_description?>" readonly>
                                        </div>
                                        <br><br><Br>
                                    </div>
                                    
                                    <div class="tab-pane active" id="tab_2">
                                    <?php echo $message;?>
                                    	<p><button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit">Update User Role Pages</button></p>
                                    	
                                        <!--start of accordion-->
                                        <div class="panel-group" id="accordion">

                                            <!-- <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOneDash">
                                                        Dashboard
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOneDash" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <table width="100%" cellpadding="2" cellspacing="2">
                                                            <tr>
                                                                <td width="7%"><input type="checkbox" name="page_id[]" id="page_id[]" value="<?php echo $pages->page_id;?>" <?php echo $checked;?>></td>
                                                                <td width="93%"><?php echo $pages->page_name;?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div> -->
                                        
                                        	<!--start of panel-->
                                            <?php 
											$num = 0;
											foreach($links as $links){
											$num = $num + 1;
											?>
                                        	<div class="panel panel-default">
                                            	<div class="panel-heading">
                                                	<h4 class="panel-title">
        												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $num;?>">
          												<?php echo $links->page_module;?>
        												</a>
      												</h4>
                                                </div>
                                                <?php
												$ci_obj = & get_instance();
												$ci_obj->load->model('app/roles_model');
												$pages = $ci_obj->roles_model->getPageByPageModule($links->page_module);
												?>
                                                <div id="collapseOne<?php echo $num;?>" class="panel-collapse collapse">
      												<div class="panel-body">
        												<table width="100%" cellpadding="2" cellspacing="2">
                                                        <?php 
														foreach($pages as $pages){
														
														//get the access level of user
														$ci_obj2 = & get_instance();
														$ci_obj2->load->model('app/roles_model');
														$access_level = $ci_obj2->roles_model->getRole_AccessLevel($pages->page_id,$roles->role_id);
														if(!empty($access_level)){
															if($pages->page_id == $access_level->page_id){
																$checked = "checked";
															}else{
																$checked = "";
															}
														}else{
															$checked = "";	
														}
														?>
                                                        <tr>
                                                        	<td width="7%"><input type="checkbox" name="page_id[]" id="page_id[]" value="<?php echo $pages->page_id;?>" <?php echo $checked;?>></td>
                                							<td width="93%"><?php echo $pages->page_name;?></td>
                                                        </tr>
                                                        <?php }?>
                                                        </table>
      												</div>
    											</div>
                                            </div>
                                            <?php }?>
                                            <!--end of panel-->
                                            
                                        </div>
                                        <!--end of accordion-->
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                 </div>
                 </form>
                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
    </body>
</html>
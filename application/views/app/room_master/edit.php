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
                    <h1>Edit Room Master</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                       
                        <li><a href="#">Room Management</a></li>
                        <li><a href="<?php echo base_url()?>app/room_master">Room Master</a></li>
                        <li class="active">Edit Room Master</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div class="box">
                         		
                         		<div class="box-header">
                                    <h3 class="box-title"></h3>
                                    
                                </div>
                        	<div class="box-body table-responsive">
                            	<form role="form" method="post" action="<?php echo base_url()?>app/room_master/edit" onSubmit="return confirm('Are you sure you want to save?');">
                                <input type="hidden" name="id" value="<?php echo $room_category->room_master_id?>">
                                <input type="hidden" name="old_room_rates" value="<?php echo $room_category->room_rates?>">
                                		<?php echo validation_errors(); ?>   
                                
                                		<div class="form-group">
                                            <label for="exampleInputEmail1">Room No/Name</label>
                                            <input class="form-control input-sm" value="<?php echo $room_category->room_name;?>" name="room_name" id="room_name" type="text" placeholder="Room No/Name" style="width: 250px;" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Room Type</label>
                                            				<select name="roomType" id="roomType" class="form-control input-sm" style="width: 250px;" required>
                                                            	<option value="">- Room Type -</option>
																<?php 
																foreach($roomTypeList as $roomTypeList){
																if($_POST['room_type'] == $roomTypeList->category_id || $room_category->category_id == $roomTypeList->category_id){
																	$selected = "selected='selected'";
																}else{
																	$selected = "";
																}
																?>
                                                            	<option value="<?php echo $roomTypeList->category_id;?>" <?php echo $selected;?>><?php echo $roomTypeList->category_name;?></option>
                                                                <?php }?>
                                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Floor</label>
                                            				<select name="floor" id="floor" class="form-control input-sm" style="width: 250px;" required>
                                                            	<option value="">- Floor -</option>
																<?php 
																foreach($floorList as $floorList){
																if($_POST['floor'] == $floorList->floor_id || $room_category->floor == $floorList->floor_id ){
																	$selected = "selected='selected'";
																}else{
																	$selected = "";
																}
																?>
                                                            	<option value="<?php echo $floorList->floor_id;?>" <?php echo $selected;?>><?php echo $floorList->floor_name;?></option>
                                                                <?php }?>
                                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Room Rate</label>
                                            <input class="form-control input-sm" value="<?php echo $room_category->room_rates;?>" name="room_rates" id="room_rates" type="text" placeholder="Room Rate" style="width: 250px;" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <a href="<?php echo base_url();?>app/room_master" class="btn btn-default">Cancel</a>
                                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                        </div>
                                        
                                </form>
                                
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
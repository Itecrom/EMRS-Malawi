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
        
           <!----------BOOTSTRAP DATEPICKER----------------------------->
    	<link rel="stylesheet" href="<?php echo base_url();?>public/datepicker/css/datepicker.css">
		<!---------------------------------------------------------->
        
        <!------------ bootstrap timepicker ---------------------------------->
    	<link href="<?php echo base_url();?>public/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    	<!-------------------------------------------------------------------->
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php require_once(APPPATH.'views/include/sidebar.php');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Patient Information Details</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Patient Management</a></li>
                        <li><a href="<?php echo base_url()?>app/patient">Patient Master</a></li>
                        <li class="active">Patient Information Details</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div class="box">
                         		
                         		<div class="box-header">
                                    <h3 class="box-title">
                                    <a href="<?php echo base_url();?>app/patient/" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>	
                                    <a href="<?php echo base_url();?>app/patient/edit/<?php echo $patientInfo->patient_no?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Information</a>
                                    </h3>
                                    
                                    <div class="box-tools">
                                        <div class="input-group">
                                            
                                        </div>
                                    </div>
                                    
                                </div><!-- /.box-header -->
								
                        	<div class="box-body table-responsive">
                            
                            	<div class="nav-tabs-custom">
                                	<ul class="nav nav-tabs">
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                                    	<li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                                    	<li><a href="#tab_3" data-toggle="tab">Other Information</a></li>
                                    	<li><a href="#tab_4" data-toggle="tab">Attachment</a></li>
                                	</ul>
                                    
                                    <div class="tab-content">
                                    	<div class="tab-pane active" id="tab_1">
                                        	<table cellpadding="3" cellspacing="3" align="center" width="100%">
                                	<tr>
                                		<td width="15%">Patient No.</td>
                                        <td width="40%"><?php echo $patientInfo->patient_no?></td>
                                        <td width="45%" rowspan="6" align="center">
    									<?php
											if(!$patientInfo->picture){
												$picture = "avatar.png";	
											}else{
												$picture = $patientInfo->picture;
											}
										?>
										<img src="<?php echo base_url();?>public/patient_picture/<?php echo $picture;?>" class="img-rounded" width="150" height="150">
    									</td>
                                	</tr>
                                    <tr>
                                		<td width="15%">Patient Name</td>
                                        <td width="40%"><?php echo $patientInfo->name?></td>
                                	</tr>
                                    <tr>
                                    	<td width="15%">Gender</td>
                                        <td width="40%"><?php echo $patientInfo->gender?></td>
                                    </tr>
                                    <tr>
                                    	<td width="15%">Age</td>
                                        <td width="40%"><?php echo $patientInfo->age?></td>
                                    </tr>
                                    <tr>
                                		<td width="15%">Adddress</td>
                                        <td><?php echo $patientInfo->address?></td>
                                	</tr>
                                    <tr>
                                		<td width="15%">Civil Status</td>
                                        <td width="40%"><?php echo $patientInfo->civil_status?></td>
                                	</tr>
                                    <tr>
                                    	<td width="15%">Religion</td>
                                        <td width="40%"><?php echo $patientInfo->religion?></td>
                                    </tr>
                                    <tr>
                                		<td width="15%">Birthday</td>
                                        <td width="40%"><?php echo date('M d, Y',strtotime($patientInfo->birthday));?></td>
                                        
                                	</tr>
                                    <tr>
                                    	<td width="15%">Birth Place</td>
                                        <td width="40%"><?php echo $patientInfo->birthplace?></td>
                                    </tr>
                                    <tr>
                                    	<td>Blood Group</td>
                                        <td><?php echo $patientInfo->blood_group?></td>
                                    </tr>
                                	</table>
                                        </div>
                                        <div class="tab-pane" id="tab_2">
                                        	<table cellpadding="3" cellspacing="3" align="center" width="100%">
                                     <tr>
                                     	<td width="21%">Phone No (Home).</td>
                                        <td width="79%"><?php echo $patientInfo->phone_no?></td>
                                     </tr>
                                     <tr>
                                     	<td>Phone No (Office).</td>
                                        <td><?php echo $patientInfo->phone_no_office?></td>
                                     </tr>
                                     <tr>
                                     	<td>Phone No (Mobile)</td>
                                        <td><?php echo $patientInfo->mobile_no?></td>
                                     </tr>
                                     <tr>
                                     	<td>Email Address</td>
                                        <td><?php echo $patientInfo->email_address?></td>
                                     </tr>
                                     </table>
                                        </div>
                                        <div class="tab-pane" id="tab_3">
                                        	<table cellpadding="3" cellspacing="3" align="center" width="100%">
                                     <tr>
                                     	<td width="21%">Company Insurance</td>
                                        <td width="79%"><?php echo $patientInfo->company_name?></td>
                                     </tr>
                                     <tr>
                                     	<td>Isurance ID No.</td>
                                        <td><?php echo $patientInfo->insurance_no?></td>
                                     </tr>
                                     <tr>
                                     	<td>Patient Identifiers</td>
                                        <td><?php echo $patientInfo->id_identifiers?></td>
                                     </tr>
                                     </table>
                                        </div>
                                        <div class="tab-pane" id="tab_4">
                                        	<iframe width="100%" frameborder="0" height="400" src="<?php echo base_url()?>app/patient/attachment/<?php echo $patientInfo->patient_no?>"></iframe>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            	<div class="box-footer clearfix">
                                	
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
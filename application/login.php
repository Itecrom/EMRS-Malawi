<!DOCTYPE html>
<html lang="en">
  
<head>
<head>
    <meta charset="utf-8">
    <title>Electronic Medical Records System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <meta content="Electronic Medical Records System, EMRS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated Hospital information" name="description">
	 <meta content="This is a Prototype for the MUUNI FUND. Languages used are php,mysql,codeigniter,mvc,php frameworks" name="keywords">
	  <meta content="Leonard JJRA Mhone" name="author">

	  <meta property="og:site_name" content="Electronic Medical Records System">
	  <meta property="og:title" content="Electronic Medical Records System">
	  <meta property="og:description" content="EMRS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated hospital information.">
	  <meta property="og:type" content="website">
	  <meta property="og:image" content="public/img/new/hms_logo.png">
	  <meta property="og:url" content="https://itecictsol.com">
    
	<link href="<?php echo base_url()?>public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url()?>public/login/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="<?php echo base_url()?>public/login/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/login/css/pages/signin.css" rel="stylesheet" type="text/css">






<body bgcolor="#FFFFFF">
	<script src="<?php echo base_url()?>public/login/js/jquery-1.7.2.min.js"></script>
	<script language="javascript">
    $(document).ready(function(){
		
	});
    </script>
    


<div style="background: #FFFFFF url('<?php echo base_url()?>public/img/new/hms_login_bg.png'); 
    background-position: center; background-size:cover; ">



	

<div class="row">
	<div class="col-md-12">
	<table width="100%" border="0">
		<tr>
			<td colspan="2" align="center"><div style="background: transparent url('<?php echo base_url()?>public/img/new/hms_logo.png') no-repeat center; height:111px; margin-bottom:-50px; padding-top:120px;"></div></td>
		</tr>
		<tr>
			<td width="50%" align="center">

			</td>
			<td width="50%">
				
				<div class="account-container">
					
					<div class="content clearfix" >
						
						
						<form action="<?php echo base_url()?>login/validate_login" method="post" id="frmLogin" name="frmLogin">

							<h1>Live Demo Login</h1>		

							<div class="login-fields">
								
								<p>Please provide your details</p>
				                <br>
				                <?php echo validation_errors(); ?>    

				                <?php 

				                if(isset($usernamelogin))
				                {
				                	$usernamelogin = $usernamelogin;
				                }else{
				                	$usernamelogin = "";
				                }

				                if(isset($passwordlogin))
				                {
				                	$passwordlogin = $passwordlogin;
				                }else{
				                	$passwordlogin = "";
				                }

				                ?>

								
								<div class="field">
									<label for="username">Username</label>
									
									<?php
										echo form_input("username",$usernamelogin,"class='login username-field' placeholder='Username' required");
										?>
				                </div> <!-- /field -->
								
								<div class="field">
									<label for="password">Password:</label>
				                    <input type="password" name="password" class="login password-field" placeholder="Password" required value="<?php echo $passwordlogin;?>" />
								</div> <!-- /password -->
								
							</div>
							<div class="login-actions">
								<button class="button btn btn-primary btn-large">Log In</button>
							</div> <!-- .actions -->
							<div class="field" style="margin-bottom: 15px;">
							<strong>Administrator Login</strong><br>
							Username: demo-hmsh<br>
							Password: hospital
							</div>

							<div class="field" style="margin-bottom: 15px;">
							<strong>Nurse Login</strong><br>
							Username: nurse1<br>
							Password: nurse1
							</div>

							<div class="field" style="margin-bottom: 15px;">
							<strong>Doctor Login</strong><br>
							Username: doctor1<br>
							Password: doctor1
							</div>

							<div class="field" style="margin-bottom: 15px;">
							<strong>Receptionist Login</strong><br>
							Username: receptionist<br>
							Password: demo-receptionist
							</div>
						</form>
						
					</div> <!-- /content -->
					
				</div> <!-- /account-container -->
			</td>
		</tr>
	</table>
	</div>
</div>



</div>


<script src="<?php echo base_url()?>public/login/js/bootstrap.js"></script>

<script src="<?php echo base_url()?>public/login/js/signin.js"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5804b99536ee5b45"></script> 
<!-- Go to www.addthis.com/dashboard to customize your tools --><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5804b99536ee5b45"></script> </body>

</html>

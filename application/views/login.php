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






<body bgcolor="#FFFFFF">
	<script src="<?php echo base_url()?>public/login/js/jquery-1.7.2.min.js"></script>
	<script language="javascript">
    $(document).ready(function(){
		
	});
    </script>
    


<div style="background: #FFFFFF url('<?php echo base_url()?>public/img/new/hms_login_bg.png'); 
    background-position: center; background-size:cover; ">



	
<br /><br /><br /><br /><br /><br /><br />
<div class="row">
	<div class="col-md-12">

				
				<div class="account-container">
					
					<div class="content clearfix" >
						
						
						<form action="<?php echo base_url()?>login/validate_login" method="post" id="frmLogin" name="frmLogin">

							<h1>Login</h1>		

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
						</form>
						
					</div> <!-- /content -->
					
				</div> <!-- /account-container -->
	</div>
</div>



</div>

</body>

</html>


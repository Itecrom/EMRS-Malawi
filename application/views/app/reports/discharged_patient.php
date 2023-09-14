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
    <body class="skin-blue" onLoad="getPatientList('a')">
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php require_once(APPPATH.'views/include/sidebar.php');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                     <h1>Discharged Patient Reports</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Reports</a></li>
                        <li class="active">Discharged Patient Reports</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                     
                 
                 <div class="row">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                    
                         <div class="box">
                                 
                                 <div class="box-body table-responsive">
                                    <h4 class="box-title"></h4>
                                    
                                    <div class="box-body">
                                            <form method="post" action="<?php echo base_url()?>app/reports/discharged_patient" onSubmit="return validate();" target="_blank">
                                            <table class="table table-hover" width="100%">
                                            <tr>
                                                <td><strong>From Date</strong></td>
                                                <td><input class="form-control input-sm" name="cFrom" id="cFrom" type="text" value="<?php echo date("Y-m-d");?>" placeholder="From Date" style="width:100%;" required></td>
                                            </tr>
                                            <tr>
                                                <td><strong>To Date</strong></td>
                                                <td><input class="form-control input-sm" name="cTo" id="cTo" type="text" value="<?php echo date("Y-m-d");?>" placeholder="to Date" required></td>
                                            </tr>
                                            <tr>
                                                <Td><b>Department</b></Td>
                                                <td>
                                                <select name="department" id="department" class="form-control input-sm" style="width: 100%;">
                                                                <option value="">All Department</option>
                                                                <?php 
                                                                foreach($departmentList as $departmentList){
                                                                if($_POST['department'] == $departmentList->department_id){
                                                                    $selected = "selected='selected'";
                                                                }else{
                                                                    $selected = "";
                                                                }
                                                                ?>
                                                                <option value="<?php echo $departmentList->department_id;?>" <?php echo $selected;?>><?php echo $departmentList->dept_name;?></option>
                                                                <?php }?>
                                                            </select>
                                                </td>
                                            </tr>
                                            <tr>
                                            	<td><strong>Reports Type</strong></td>
                                            	<td>
                                                <select name="cType" id="cType" class="form-control">
                                            		<option value="browser">Browser</option>
                                                	<option value="pdf">PDF</option>
                                            	</select>
                                                </td>
                                             </tr>
                                            <tr>
                                                <tD></tD>
                                                <td>
                                                <input type="submit" value="View Report" class="btn btn-primary" style="width: 100%;" name="btnView">
                                                </td>
                                            </tr>
                                            </table>
                                          </form>
                                    </div>
                                    
                                </div>
                        </div>
                        
                        
                        
                    </div>
                    <div class="col-md-3"></div>
                 </div>
                 
                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
  
  
  
  
          <!-- / patientListModal modal -->   
                            <div class="modal fade" id="patientListModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Search Patient</h4>
                                        </div>
                                        <div class="modal-body">
                                                    
                                                    
<script language="javascript">
function addPatient(iop_no,patient_no,patient){

document.getElementById("patient_name").value = patient;
document.getElementById("iop_no").value = iop_no;
document.getElementById("patient_no").value = patient_no;

$('#patientListModal').modal('hide');
                        return true;    
}

function getPatientList(val)
{
    var cType;
    cType = "OPD";
    
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
    document.getElementById("showPatients").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","<?php echo base_url();?>general/ipdLists/"+val,true);
xmlhttp.send();

}
</script>   
                                                    <input onKeyUp="getPatientList(this.value)" class="form-control input-sm" name="cSearch" id="cSearch" type="text" placeholder="Search here">
                                                <span id="showPatients">
                                                
                                                </span>
                                                
                                               
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           <!-- <button type="button" class="btn btn-primary" onClick="return addPatient()">Proceed</button>-->
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
  
  
  
  
        
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
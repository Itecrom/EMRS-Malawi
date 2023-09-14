<!DOCTYPE html>
<html lang="en"><head>
<head>

    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 	
   		<link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />


<body>
<table cellpadding="5" cellspacing="5">
<tr>
	<td>
    <?php
if(!$user->picture){
	$picture = "no_avatar.gif";	
}else{
	$picture = $user->picture;
}
?>

<img src="<?php echo base_url();?>public/user_picture/<?php echo $picture;?>" class="img-rounded" width="150" height="150">
    </td>
    <td valign="top">
    <?php echo $message;?>
    <?php echo form_open_multipart(base_url().'app/user/upload_na'); ?>
    <input type="hidden" name="user_id" value="<?php echo $user->user_id;?>">
    <fieldset>
    	<legend> CHANGE PICTURE </legend>
    	<input type="file" name="userfile" size="20" />
        <br />
        <input type="submit" value="upload" />
    </fieldset>
    <?php echo form_close();?>
    </td>
</tr>
</table>

</body>
</html>
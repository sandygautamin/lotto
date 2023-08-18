<html lang="en">    <head>        <meta charset="utf-8">        <meta http-equiv="X-UA-Compatible" content="IE=edge">        <meta name="viewport" content="width=device-width, initial-scale=1">        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->        <meta name="description" content="">        <meta name="author" content="">        <link rel="icon" href="<?php echo base_url(); ?>favicon.ico">        <title>Lottary Login</title>        <!-- Bootstrap core CSS -->        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->        <link href="<?php echo base_url(); ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">				<link rel='stylesheet' href="<?php echo base_url('assets/css/style.css');?>" type="text/css" />		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>                    </head>  <div class="login-form">           <form action="" method="post">		 <h2>Registration</h2>		  <?php  			if(!empty($success_msg)){ 				echo '<p class="alert alert-success">'.$success_msg.'</p>'; 			}elseif(!empty($error_msg)){ 				echo '<p class="alert alert-danger">'.$error_msg.'</p>'; 			} 		?>            <div class="form-group">                <input type="text" name="fname" placeholder="FIRST NAME" value="<?php echo !empty($user['fname'])?$user['fname']:''; ?>" required  class="form-control">                <?php echo form_error('fname','<p class="help-block alert-danger">','</p>'); ?>            </div>            <div class="form-group">                <input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required  class="form-control">                <?php echo form_error('email','<p class="help-block alert-danger">','</p>'); ?>            </div>            <div class="form-group">                <input type="password" name="password" placeholder="PASSWORD"  class="form-control" required >                <?php echo form_error('password','<p class="help-block alert-danger">','</p>'); ?>            </div>            <div class="form-group">                <input type="password" name="conf_password" placeholder="CONFIRM PASSWORD"  class="form-control" required>                <?php echo form_error('conf_password','<p class="help-block alert-danger">','</p>'); ?>            </div>            <div class="form-group">                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>"  class="form-control">                <?php echo form_error('phone','<p class="help-block alert-danger">','</p>'); ?>            </div>            <div class="send-button">                <input type="submit" class="btn btn-primary btn-block" name="signupSubmit" value="Create an Account">            </div>        </form>        <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p>  </div>
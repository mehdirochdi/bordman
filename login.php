<?php include_once('_header.php') ?>

<!-- Page Heading -->
<section class="page-heading">
	<div class="container">
		<div class="row"> <div class="col-md-12"> <h1>Login</h1> </div> </div>
	</div>
</section>
<!-- Page Heading / End -->
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="box">
				<h3>Login</h3>
				<div class="alert alert-danger">Error credentials</div>
				<form action="#" method="POST" role="form">
					<div class="form-group has-error">
						<label>Email address <span class="required">*</span></label>
						<input type="email" class="form-control ">
						<p class="help-block">Example error.</p>
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label class="pull-left"> Password <span class="required">*</span> </label>
							<span class="pull-right"><a href="#">Lost password?</a></span>
						</div>
						<input type="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary btn-inline">Login</button>&nbsp; &nbsp; &nbsp; 
					<label for="remember" class="checkbox-inline"> <input type="checkbox" name="remember" id="remember"> Remember me </label>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once('_footer.php') ?>

			
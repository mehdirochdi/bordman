<?php include_once('_header.php') ?>

<!-- Page Heading -->
<section class="page-heading">
	<div class="container">
		<div class="row"> <div class="col-md-12"> <h1>Contact form</h1> </div> </div>
	</div>
</section>
<!-- Page Content -->
<section class="page-content">
<div class="container">

		<div class="row">
			<div class="col-md-4">
				<div class="icon-box">
					<div class="icon">
						<i class="fa fa-location-arrow"></i>
					</div>
					<div class="icon-box-body">
						<h6>Address:</h6>
						HandyMan Co., Old Town Avenue, New York, USA 23000
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="icon-box">
					<div class="icon">
						<i class="fa fa-phone"></i>
					</div>
					<div class="icon-box-body">
						<h6>Phone:</h6>
						+1700 124-5678<br>
						+1700 124-5678
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="icon-box">
					<div class="icon">
						<i class="fa fa-clock-o"></i>
					</div>
					<div class="icon-box-body">
						<h6>Working Hours:</h6>
						Monday - Friday 9:00 - 21:00<br>
						Saturday - Sunday 10:00 - 16:00
					</div>
				</div>
			</div>
		</div>

		<div class="spacer-lg"></div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Contact Form</h3>
				<form action="php/contact-form.php" id="contact-form">

					<div class="alert alert-success hidden" id="contact-alert-success">
						<strong>Success!</strong> Thank you for your message. Reply will be in a while!
					</div>
					<div class="alert alert-danger hidden" id="contact-alert-error">
						<strong>Error!</strong> Something went wrong sending your message.
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name <span class="required">*</span></label>
								<input type="text"
									value=""
									data-msg-required="Please enter your name."
									class="form-control"
									name="name" id="name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email <span class="required">*</span></label>
								<input type="email" 
									value=""
									data-msg-required="Please enter your email address."
									data-msg-email="Please enter a valid email address."
									class="form-control"
									name="email"
									id="email">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Subject</label>
								<input type="text" 
									value=""
									data-msg-required="Please enter the subject."
									class="form-control"
									name="subject"
									id="subject">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message <span class="required">*</span></label>
								<textarea
									data-msg-required="Please enter your message."
									rows="10"
									class="form-control"
									name="message"
									id="message"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>

</section>
<!-- Page Content / End -->
<?php include_once('_footer.php') ?>

			
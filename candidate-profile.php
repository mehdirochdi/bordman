<?php include_once('_header.php') ?>

<!-- Page Heading -->
<section class="page-heading">
	<div class="container">
		<div class="row"> <div class="col-md-12"> <h1>Candidate profile</h1> </div> </div>
	</div>
</section>
<!-- Page Heading / End -->
<section class="page-content">
	<div class="container">
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Job Form -->
				<form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">					
					<!-- Job Information Fields -->
					<fieldset class="fieldset-job_title">
						<label for="job_title">Firstname</label>
						<div class="field">
							<input type="text" class="form-control" placeholder="firstname" />
						</div>
					</fieldset>
					<fieldset class="fieldset-job_title">
						<label for="job_title">lastname</label>
						<div class="field">
							<input type="text" class="form-control" placeholder="lastname" />
						</div>
					</fieldset>
					<fieldset class="fieldset-job_title">
						<label for="job_title">email</label>
						<div class="field">
							<input type="email" class="form-control" placeholder="email" />
						</div>
					</fieldset>

					<fieldset class="fieldset-job_location">
						<label for="job_location">Job Location <small>(optional)</small></label>
						<div class="field">
							<select class="form-control">
								<option>All cities</option>
								<option>Casablanca</option>
								<option>Rabat</option>
								<option>Fes</option>
								<option>Marrakech</option>
								<option>Tanger</option>
							</select>
							<small class="description">Leave this default if the job can be done from anywhere</small>
						</div>
					</fieldset>
					<fieldset class="fieldset-job_description">
						<label>Description</label>
						<div class="field">
							<textarea name="textarea" cols="30" rows="8" class="form-control"></textarea>
						</div>
					</fieldset>
					<fieldset class="fieldset-company_logo">
						<label for="company_logo">Photo candidate<small>(optional)</small></label>
						<div class="field">
							<input type="file" class="form-control" name="company_logo" id="company_logo" />
							<small class="description">
							Max. file size: 1 MB.</small>
						</div>
					</fieldset>

					<div class="spacer"></div>

					<p>
						<input type="submit" name="submit_job" class="btn btn-primary" value="Update &rarr;" />
					</p>

				</form>
				<!-- Job Form / End -->
			</div>
		</div>

	</div>
</section>
<?php include_once('_footer.php') ?>
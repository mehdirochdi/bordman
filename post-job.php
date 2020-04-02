<?php include_once('_header.php') ?>

<!-- Page Heading -->
<section class="page-heading">
	<div class="container">
		<div class="row"> <div class="col-md-12"> <h1>post job</h1> </div> </div>
	</div>
</section>
<!-- Page Heading / End -->
<!-- Page Content -->
<section class="page-content">
	<div class="container">
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Job Form -->
				<form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">					
					<!-- Job Information Fields -->
					<fieldset class="fieldset-job_title">
						<label for="job_title">Job Title</label>
						<div class="field">
							<input type="text" class="form-control" name="job_title" id="job_title" placeholder="e.g. “Painter”" />
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

					<div class="row">
						<div class="col-md-6">
							<fieldset class="fieldset-job_type">
								<label for="job_type">Job service</label>
								<div class="field select-style">
									<select name="job_type" id="job_type" class="form-control">
										<option>Unspecified</option>
										<option>Informatique</option>
										<option>Hotelerie</option>
										<option>Développement</option>
									</select>
								</div>
							</fieldset>
						</div>
						<div class="col-md-6">
							<fieldset class="fieldset-job_category">
								<label for="job_category">Job type</label>
								<div class="field select-style">
									<select name="job_category" id="job_category" class="form-control">
										<option>All type</option>
										<option>CDI</option>
										<option>CDD</option>
										<option>Interim</option>
										<option>Freelance</option>
									</select>
								</div>
							</fieldset>
						</div>
					</div>

					<fieldset class="fieldset-job_description">
						<label>Description</label>
						<div class="field">
							<textarea name="textarea" cols="30" rows="8" class="form-control"></textarea>
						</div>
					</fieldset>
					<fieldset class="fieldset-company_logo">
						<label for="company_logo">Photo <small>(optional)</small></label>
						<div class="field">
							<input type="file" class="form-control" name="company_logo" id="company_logo" />
							<small class="description">
							Max. file size: 32 MB.</small>
						</div>
					</fieldset>

					<div class="spacer"></div>

					<p>
						<input type="submit" name="submit_job" class="btn btn-primary" value="Preview Job Listing &rarr;" />
					</p>

				</form>
				<!-- Job Form / End -->
			</div>
		</div>

	</div>
</section>
<!-- Page Content / End -->

<?php include_once('_footer.php') ?>

			
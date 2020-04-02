<?php include_once('_header.php') ?>

<!-- Page Heading -->
<section class="page-heading">
	<div class="container">
		<div class="row"> <div class="col-md-12"> <h1>Jobvacancies</h1> </div> </div>
	</div>
</section>
<!-- Page Heading / End -->
<!-- Page Content -->
<section class="page-content">
	<div class="container">
		<div class="col-md-8">
			<div class="job_listings">
				<ul class="job_listings">
					<li class="job_listing">
						<a href="#">
							<div class="job_img">
								<img src="images/nologo.png" alt="" class="company_logo">
							</div>
							<div class="position">
								<h3>looking for developer (male, female)</h3>
								<div class="company"> <strong>Company name</strong> </div>
								<div class="location"> <i class="fa fa-location-arrow"></i> <span>Casablanca,</span> </div>
							</div>
							<!-- <div class="location"> <i class="fa fa-location-arrow"></i> Casablanca, </div> -->
							<ul class="meta">
								<li class="job-type">Service name</li>
								<li class="date"> Posted 1 month ago </li>
<!-- 								<li class="location"> <i class="fa fa-location-arrow"></i> Casablanca, </li> -->
							</ul>
						</a>
					</li>
				</ul>

				<ul class="pagination">
				    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item active"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item"><a class="page-link" href="#">Next</a></li>
				  </ul>
			</div>
		</div>
		<!-- Sidebar -->
		<aside class="sidebar col-md-4">
			<hr class="visible-sm visible-xs lg">
			<div class="box box__color-darken mb-30">
				<h4>Search for a job</h4>
				<form action="#" method="POST" id="profile-form">
					<div class="form-group form-grop__icon">
						<input type="text" class="form-control" placeholder="Key word">
					</div>
					<div class="form-group form-grop__icon">
						<select class="form-control">
							<option>All cities</option>
							<option>Casablanca</option>
							<option>Rabat</option>
							<option>Fes</option>
							<option>Marrakech</option>
							<option>Tanger</option>
						</select>
					</div>
					<div class="form-group form-grop__icon">
						<select class="form-control">
							<option>All Services</option>
							<option>Informatique</option>
							<option>Hotelerie</option>
							<option>Développement</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Search</button>
				</form>
			</div>
		</aside>

	</div>
</section>
<?php include_once('_footer.php') ?>

			